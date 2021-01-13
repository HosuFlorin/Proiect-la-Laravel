<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function edit(request $request ) {
        if(isset($_POST['edit_personal_data'])){
                $nume=$_POST["name"];
                $username=$_POST["username"];
                $lastname=$_POST["prenume"];
                DB::update('update users set name = ? ,prenume=? ,username=? where id = ?',[$nume,$lastname,$username, Auth::user()->id]);   
               
        }
        elseif (isset($_POST['edit_image'])) {
            if($request->file('image')!=null)
            {
            $imageavatar=request()->file('image');
            $imagename=time().'.'.$imageavatar->getClientOriginalExtension();
            $imagepatch=public_path('/images/');
            $imageavatar->move($imagepatch,$imagename);
            DB::update('update users set image = ? where id = ?',[$imageavatar, Auth::user()->id]);
            }
            else {
                echo "eroare";
            }
        }
         return view('home');
     }
public function search( Request $request )
     {
        $search= $request->get('search');
        $articole= DB::table('articles')->where('title','like','%'.$search.'%')->paginate(5);
        $tags = DB::table('tags')->get();
        return view('home',['articole'=>$articole, 'tags'=>$tags]);
     }
 public function tags(Request $request)
    {
        $search=$request->get('taguri');
        $articole=db::table('article_tag')
        ->select("articles.title","articles.context","articles.date","articles.status","articles.slug","articles.image")
        ->join('articles', 'articles.id', '=', 'article_tag.article_id')
       ->join('tags', 'article_tag.tag_id', '=', 'tags.id')
       ->where('tags.slug',$search)
       ->get();
      
        $tags = DB::table('tags')->get();
        return view('home',['articole'=>$articole, 'tags'=>$tags]);
    } 
    
public function readmore(Request $request)
{
    $search=$request->get('read_more');
    $leg=$request->get('leg');
    $articole=db::table('articles')
    ->where('articles.slug',$search)
    ->get();

    $tags = DB::table('tags')->get();

    $comment = DB::table('comments')
    ->select('comments.context', 'comments.date','users.username')
    ->join('articles','articles.id','=','comments.articol_id')
    ->join('users','users.id','=','comments.user_id')
    ->where('comments.articol_id',$leg)
    ->get();
    return view('/readmore',['articole'=>$articole, 'tags'=>$tags,'comment'=>$comment]);
}
}

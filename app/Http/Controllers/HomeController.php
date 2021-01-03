<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

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
     
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class AddArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $cat = DB::table('categories')->get();
      

        return view('/addarticol', ['cat' => $cat]);
       
    }
    public function post(Request $request)
    {
        $title=$request->get('title');
        $slug=$request->get('slug');
        $categorii=$request->get('categorii');
        $context=$request->get('context');
        $image=$request->get('image');
        $mytime = Carbon::now();
        DB::table('articles')->insert([
            'category_id' => $categorii,
            'title' => $title,
            'slug'=>$slug,
            'context'=>$context,
            'image'=>$image,
            'status'=>'DRAFT',
            'date'=>$mytime->toDateTimeString()
        ]);
        return view('/welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

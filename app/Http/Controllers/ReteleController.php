<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReteleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $id=2;
        $articole = DB::table('articles')
        ->select("articles.title","articles.context","articles.date","articles.status","articles.slug","articles.image","articles.id")
        ->join('categories', 'articles.category_id', '=', 'categories.id')
        ->where('articles.category_id', $id)
        ->orderBy('date','DESC')
        ->get();
        $tags = DB::table('tags')->get();

        return view('/home', ['articole' => $articole, 'tags'=>$tags]);
       
    }
    public function readmore(Request $request)
    {
        $search=$request->get('read_more');
        $articole=db::table('articles')
        ->where('slug',$search)
        ->get();
        $tags = DB::table('tags')->get();
        return view('/readmore',['articole'=>$articole, 'tags'=>$tags]);
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

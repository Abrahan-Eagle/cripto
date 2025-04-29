<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

use App\Models\Videohero;
use App\Models\Testimonio;
use App\Models\Historyabout;
use App\Models\Post;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $projects = Post::orderBy('posts.id', 'DESC')
         ->where('posts.statusx', 'PUBLISHED')
         ->where('posts.level', 'project')
         ->paginate(7);

         $posts = Post::orderBy('posts.id', 'DESC')
         ->where('posts.statusx', 'PUBLISHED')
         ->where('posts.level', 'blog')
         ->paginate(10);

         return view('front.home', compact('projects', 'posts'));
    }

    public function services(){

        return view('front.services');
    }

    public function about(){

        $author = Author::orderBy('id', 'DESC')
        ->limit(6)
        ->get();



        return view('front.about', compact('author'));
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
    public function show($id)
    {
        //
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

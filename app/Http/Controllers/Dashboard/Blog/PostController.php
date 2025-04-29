<?php

namespace App\Http\Controllers\Dashboard\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Models\Author;
use App\Models\Post;
use App\Models\Category;
use App\Models\Country;
use App\Models\Tag;
use App\Models\Likes;
use App\Models\IpLikes;
use App\Models\Sponsor;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class PostController extends Controller
{
    private $imageManager;

    public function __construct()
    {
        $this->middleware('auth');
        $this->imageManager = new ImageManager(new Driver());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($level)
    {
        $posts = Post::orderBy('id', 'DESC')->where('user_id', auth()->user()->id)->where('level', $level)->paginate(5);
        // dd($level);

        if ($level == "project") {
            $view = 'dashboard.project.posts.index';
        }

        // dd($level);
        if ($level == "blog") {
            $view = 'dashboard.blog.posts.index';
        }

        // dd($view);

        return view($view, compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($level)
    {
        //$categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $categories = Category::where('level', $level)->orderBy('title', 'ASC')->get();
        $tags = Tag::where('level', $level)->orderBy('title', 'ASC')->get();

        if ($level == "project") {
            $view = 'dashboard.project.posts.create';
            $authors = Author::orderBy('name', 'ASC')->get();
        }
        if ($level == "blog") {
            $view = 'dashboard.blog.posts.create';
            $authors = Author::orderBy('name', 'ASC')->get();
        }


        $compact = ['categories', 'tags', 'authors', 'level'];


        return view($view, compact($compact));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {


        $level = $request->level;

        if ($level == "project") {
            $view = 'posts-project.index';
            $img_path = 'img/portafolio/';
        }
        if ($level == "blog") {
            $view = 'posts.index';
            $img_path = 'images/front/blog/';
        }



        $post = Post::create($request -> all());


        // if ($request->hasFile('img')) {
        //     $file = $request->file('img');
        //     $filename = time() . '.' . $file->getClientOriginalExtension();
        //     $path = public_path($img_path . $filename , 60);
        //     Image::make($file)->resize(1024, 768)->save($path);
        //     $post->fill(['img' => $filename ])->save();
        // }



        if ($request->hasFile('img')) {

            $file = $request->file('img');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = public_path($img_path .  $filename);

            // dd($path);

            $this->imageManager->read($file)
                ->resize(1024, 768)
                ->save($path, quality: 60);

            $post->update(['img' => $filename]);
        }



        $post->tags()->sync($request->get('tags'));



        $like = new Likes;
        $like -> Post()->associate($post);
        $like -> save();

        $iplike = new Iplikes;
        $iplike -> like()->associate($like);
        $iplike -> save();

        toastr()->info('El post creada con exito');
        return redirect()->route($view, ['level' => $level, $post->id])->with('info', 'El post creada con exito');
        //return view($view, compact('level'))->with('info', 'El post creada con exito');
//        return back()->with('info', 'El post creada con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($level, $id)
    {
        $post = Post::where('level', $level)->find($id);
        $this->authorize('pass', $post);
        $category = Category::where('level', $level)->find($post -> category_id);

        if ($level == "project") {
            $view = 'dashboard.project.posts.show';
        }
        if ($level == "blog") {
            $view = 'dashboard.blog.posts.show';
        }



        return view($view, compact('post', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($level, $id)
    {
            $post = Post::where('level', $level)->find($id);
            $this->authorize('pass', $post);
            $categories = Category::where('level', $level)->orderBy('title', 'ASC')->get();
            $tags = Tag::where('level', $level)->orderBy('title', 'ASC')->get();
            $authors = Author::orderBy('name', 'ASC')->get();

            if ($level == "project") {
                $view = 'dashboard.project.posts.edit';
            }
            if ($level == "blog") {
                $view = 'dashboard.blog.posts.edit';
            }


            return view($view, compact('post', 'categories', 'tags', 'authors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, $id)
    {

        $level = $request->level;

        if ($level == "project") {
            $view = 'posts-project.index';
            $img_path = 'img/portafolio/';
        }
        if ($level == "blog") {
            $view = 'posts.index';
            $img_path = 'images/front/blog/';
        }


        $post = Post::where('level', $level)->find($id);
        $this->authorize('pass', $post);
        $post->fill($request->all())->save();

        if ($request->hasFile('img')) {

            $file = $request->file('img');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = public_path($img_path .  $filename);

            // dd($path);


            $this->imageManager->read($file)
                ->resize(1024, 768)
                ->save($path, quality: 60);

            $post->update(['img' => $filename]);
        }


        $post->tags()->sync($request->get('tags'));

        toastr()->info('Actualizada con exito');
        return redirect()->route($view, ['level' => $level, $post->id])->with('info', 'Actualizada con exito');
        //return view($view, compact('level'))->with('info', 'El post creada con exito');
//        return back()->with('info', 'El post creada con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($level, $id)
    {
        $post = Post::where('level', $level)->find($id);
        $this->authorize('pass', $post);
        $post->delete();
        DB::statement("ALTER TABLE `posts` AUTO_INCREMENT = 1;");

        toastr()->success('Eliminado correctamente');
        return back()->with('info', 'Eliminado correctamente');
    }



}

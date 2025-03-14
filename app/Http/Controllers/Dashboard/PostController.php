<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Post;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Psy\debug;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /* $post = Post::find(1);
        dd($post->category->title); */

        /* $category = Category::find(1);
        dd($category->posts[4]->title); */

        // Metodo para eliminar un registro
        /* $post = Post::find(3);
        $post->delete();
        dd($post); */


        // Metodo para actualizar un registro
        /* $post = Post::find(2);
        $post->update(
            ['title' => 'Test Title Bryan',
            'slug' => 'Test Slug Bryan',
            'description' => 'Test Description Bryan',
            'content' => 'Test Content Bryan',
            'image' => 'Test Image Bryan',
            'posted' => 'Not',
            'category_id' => 1,
            ]
        ); */


        // Metodo para crear o agregar un campo de la tabla posts
        /* Schema::table('posts', function (Blueprint $table) {
            $table->string('email')->nullable();
        }); */


        //  Metodo para eliminar un campo de la tabla posts
        /* Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('email');
        }); */

        return 'Index';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $category = Category::pluck('id', 'title');
        $category = Category::get();
        return view('dashboard.posts.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        // dd($request->all());
        // dd(request()->all());


        // Metodo para validar el nuevo post
        /* $request->validate([
            'title' => 'required|min:5|max:500',
            'slug' => 'required|min:5|max:500',
            'description' => 'required|min:5',
            'content' => 'required|min:5',
            // 'image' => 'required|mimes:jpg,jpeg,png,gif',
            'posted' => 'required',
            'category_id' => 'required',
        ]); */


        // Metodo para crear un nuevo post
        /* Post::create(
            ['title' => $request->title,
            'slug' => $request->slug,
            'description' => $request->description,
            'content' => $request->content,
            'image' => $request->image,
            'posted' => $request->posted,
            'category_id' => $request->category_id,
            'movie' => $request->movie,
            ]
        ); */

        /* $request->validate([
            ''
        ]); */

        // Segundo metodo para crear un nuevo post
        /* Post::create($request->all()); */

        Post::create($request->validated());

        // retornar a la vista de crear posts
        return to_route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}

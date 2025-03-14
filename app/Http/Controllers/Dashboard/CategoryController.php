<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'Index category';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {

        /* $validated = Validator::make($request->all(), [
            'title' => 'required|min:5',
            'slug' => 'required|min:5',
        ]); */

        /* $request->validate([
            'title' => 'required|min:5',
            'slug' => 'required|min:5',
            ]); */

            // Category::create([
                //     'title' => $request->title,
                //     'slug' => $request->slug,
                // ]);

        Category::create($request->validated());
        /* $validated = $request;
        dd($validated->errors()); */

        return "store";
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}

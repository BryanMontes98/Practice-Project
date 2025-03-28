<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateResquest;
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
        // session(['key' => 'value']);
        // session()->forget('key');
        // session()->flush();
        // dd($value);

        $categories = Category::paginate(3);
        return view('dashboard.categories.index', compact('categories'));
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
        $categories = Category::paginate(3);
        return to_route('category.index', compact('categories'))->with('success', '¡Category created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('dashboard.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('dashboard.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateResquest $request, Category $category)
    {
        $data = $request->validated();

        if(isset($data['image'])) {
            $data['image'] == $fileName = time() . '.' . $data['image']->getClientOriginalExtension();
            $request->image->move(base_path('updates/categories', $fileName));
        }

        $category->update($data);
        return redirect()->route('category.index')->with('success', '¡Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index');
    }
}

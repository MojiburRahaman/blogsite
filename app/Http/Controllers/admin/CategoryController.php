<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorys = Category::latest('id')->paginate(20);
        return view('backend.category.index', ['categorys' => $categorys]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'unique:categories,title'],
            'thumbnail' => ['required', 'image'],
        ]);
        $Category = new Category;
        $Category->title = $request->title;
        $Category->slug = Str::slug($request->title);

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $image_extension = Str::slug($request->title) . '.' . 'webp';
            $url = public_path('category/thumbnail/' . $image_extension);
            Image::make($image)->save($url, 100);
            $Category->thumbnail = $image_extension;
        }
        $Category->save();
        return redirect()->route('category.index')->with('success', 'Category Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        if ($category->active == 1) {
            $category->active = 2;
            $category->save();
            return back()->with('warning', 'Category Inactivated');
        } else {
            $category->active = 1;
            $category->save();
            return back()->with('success', 'Category Actived ');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('backend.category.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'title' => ['required', 'unique:categories,title,' . $category->id],
            'thumbnail' => ['image'],
        ]);

        $category->title = $request->title;
        $category->slug = Str::slug($request->title);

        if ($request->hasFile('thumbnail')) {

            $old_thumbnail = public_path('categroy/thumbnail/' . $category->thumbnail);
            if (file_exists($old_thumbnail)) {
                unlink($old_thumbnail);
            }

            $image = $request->file('thumbnail');
            $image_extension = Str::slug($request->title) . '.' . 'webp';
            $url = public_path('category/thumbnail/' . $image_extension);
            Image::make($image)->save($url, 100);
            $category->thumbnail = $image_extension;
        }
        $category->save();
        return redirect()->route('category.index')->with('success', 'Category Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if ($category->Blog->count() > 0) {
            return back()->with('warning', "Can't delete.There's a Blog in this category related");
        }

        $old_thumbnail = public_path('categroy/thumbnail/' . $category->thumbnail);
        if (file_exists($old_thumbnail)) {
            unlink($old_thumbnail);
        }
        $category->delete();
        return back()->with('danger', 'Category Deleted');
    }
}

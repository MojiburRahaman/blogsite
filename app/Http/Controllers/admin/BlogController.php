<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Blog;
use App\Models\Category;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.project.index', [
            'projects' => Blog::latest()->paginate(15),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::where('active', 1)->latest('id')->get();
        return view('backend.project.create', compact('category'));
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
            'title' => ['required', 'unique:blogs,title'],
            'meta_description' => ['required',],
            'meta_keyword' => ['required',],
            'category_id' => ['required',],
            'thumbnail' => ['required', 'mimes:png,jpg,webp'],
            'description' => ['required',],
        ]);

        $project = new Blog;
        $project->title = $request->title;
        $project->slug = Str::slug($request->title);
        $project->meta_description = $request->meta_description;
        $project->category_id = $request->category_id;
        $project->meta_keyword = $request->meta_keyword;
        $project->description = $request->description;

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $image_extension = Str::slug($request->title) . '.' . $image->getClientOriginalExtension();
            // $image_extension = Str::slug($request->title) . '.' . 'WebP';
            $url = public_path('projects/' . $image_extension);
            Image::make($image)->save($url, 100);
            $project->thumbnail = $image_extension;
        }
        $project->save();
        return redirect()->route('blog.index')->with('success','Blog Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Blog = Blog::findorfail($id);
        if ($Blog->active == 1) {
            $Blog->active = 2;
            $Blog->save();
            return back()->with('warning', 'Blog Inactivated');
        } else {
            $Blog->active = 1;
            $Blog->save();
            return back()->with('success', 'Blog Actived ');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.project.edit', [
            'project' => Blog::findorfail($id),
            'category'  => Category::where('active', 1)->latest('id')->get(),
        ]);
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
        
        $request->validate([
            'title' => ['required', 'unique:blogs,title,' . $id],
            'meta_description' => ['required',],
            'meta_keyword' => ['required',],
            'category_id' => ['required',],
            'thumbnail' => ['mimes:png,jpg,webp'],
            'description' => ['required',],
        ]);
        $project = Blog::findorfail($id);
        $project->title = $request->title;
        $project->slug = Str::slug($request->title);
        $project->meta_description = $request->meta_description;
        $project->meta_keyword = $request->meta_keyword;
        $project->category_id = $request->category_id;
        $project->description = $request->description;

        if ($request->hasFile('thumbnail')) {

            $old_thumbnail = public_path('projects/' . $project->thumbnail);
            if (file_exists($old_thumbnail)) {
                unlink($old_thumbnail);
            }

            $image = $request->file('thumbnail');
            $image_extension = Str::slug($request->title) . '.' . $image->getClientOriginalExtension();
            // $image_extension = Str::slug($request->title) . '.' . 'WebP';
            $url = public_path('projects/' . $image_extension);
            Image::make($image)->save($url, 100);
            $project->thumbnail = $image_extension;
        }
        $project->save();
        return redirect()->route('blog.index')->with('success','Blog Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Blog::findorfail($id);
        $old_thumbnail = public_path('projects/' . $project->thumbnail);
        if (file_exists($old_thumbnail)) {
            unlink($old_thumbnail);
        }
        $project->delete();
        return back();
    }
}

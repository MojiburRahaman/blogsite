<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Subscribe;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function FrontendHome()
    {
        $blogs = Blog::latest('id')->whereActive('1')->with('Category:id,title,slug')->take('10')->get();
        return view('frontend.main', [
            'blogs' => $blogs,
        ]);
    }
    public function FrontendPostAll()
    {
        return view(
            'frontend.pages.post',
            [
                'posts' => Blog::latest('id')->with('Category:id,slug,title')->simplepaginate('10'),
                'Random_posts' => Blog::inRandomOrder()->take(10)->get(),
                'categories' => Category::where('active', 1)->select('id', 'slug', 'title')->inRandomOrder()->get(),
            ]
        );
    }
    public function FrontendPostView(Blog $Blog)
    {
        $Blog->increment('views');
        return view('frontend.pages.post-detail', compact('Blog'));
    }
    public function FrontendAllCategory()
    {
        $blogs = Blog::latest('views')->limit(10)->get();
        $categories = Category::where('active', 1)->withCount('Blog')->inRandomOrder()->get();
        return view('frontend.pages.category', compact('categories', 'blogs'));
    }
    public function FrontendCategoryWisePost(Category $category)
    {
        $Blogs =  Blog::where('category_id', $category->id)->latest('id')->with('Category:id,slug,title')->simplepaginate('10');
        return view(
            'frontend.pages.category-view',
            [
                'posts' => $Blogs,
                'title' => $category->title,
                'latest_post' => Blog::latest('id')->take(10)->get(),
            ]
        );
    }
    public function FrontendSearch(Request $request)
    {
        $search = strip_tags($request->keyword);
        $blogs = Blog::where('title', 'like', '%' . $search . '%')->latest('id')->with('Category:id,title,slug')->simplepaginate(10);
        $pagination = $blogs->appends(array(
            'keyword' => $request->keyword
        ));
        session()->put('keyword', $search);

        return view('frontend.pages.search-view', [
            'blogs' => $blogs,
            'Random_posts' => Blog::inRandomOrder()->select('id', 'title', 'slug', 'thumbnail')->take(10)->get(),
            'categories' => Category::where('active', 1)->select('id', 'slug', 'title')->inRandomOrder()->get(),
        ]);
    }
    public function Subscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'unique:subscribes,email'],
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }
        $email = $request->email;
        $subs = new Subscribe;
        $subs->email = $email;
        $subs->save();
        return response()->json(['done' => 'Thanks for the subscribe']);
    }
}

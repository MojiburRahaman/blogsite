<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function FrontendHome()
    {
        $blogs = Blog::latest('id')->whereActive('1')->with('Category:id,title,slug')->get();
        return view('frontend.main', [
            'blogs' => $blogs,
        ]);
    }
    public function FrontendPostAll()
    {
        return view(
            'frontend.pages.post',
            [
                'posts' => Blog::latest('id')->with('Category:id,slug')->simplepaginate('10'),
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
        //  $category;
        $Blogs =  Blog::where('category_id', $category->id)->latest('id')->with('Category:id,slug')->simplepaginate('10');
        return view(
            'frontend.pages.category-view',
            [
                'posts' => $Blogs,
                'title' => $category->title,
            ]
        );
    }
}

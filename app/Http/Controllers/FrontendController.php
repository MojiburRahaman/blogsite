<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function FrontendHome()
    {
        $blogs = Blog::latest('id')->whereActive('1')->get();
        return view('frontend.main', [
            'blogs' => $blogs,
        ]);
    }
    public function FrontendPostView(Blog $Blog)
    {
        $Blog->increment('views');
        return view('frontend.pages.post-detail', compact('Blog'));
    //    return $Blog;
    }
}

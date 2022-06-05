<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function BlogView(Request $request)
    {
        //    abort_if(!$request->ajax(), 404);
      $blogs =   Blog::latest('id')->select('title','id','thumbnail','description','slug')->limit(4)->get();
  
        return response()->json($blogs);
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use App\Models\CkeditorFileUpload;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }
       
    public function CkfileUpload(Request $request)
    {

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            // $image_extension = Str::random(5) . '.' . 'WebP';
            $image_extension = Str::random(5) . '.' . $image->getClientOriginalExtension();
            $url = public_path('projects/ckeditor/' . $image_extension);
            Image::make($image)->save($url, 100);

            $ckeditor = new CkeditorFileUpload;
            $ckeditor->ckeditor_img = $image_extension;
            $ckeditor->save();
            $image_url = asset('projects/ckeditor/' . $image_extension);
            return response()->json([$image_url]);
        }
    }
}

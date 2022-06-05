<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.profile.index', [
            'settting' => Setting::first(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' => ['required'],
            'meta_description' => ['required'],
            'meta_title' => ['required'],
            'meta_keyword' => ['required'],
            'logo' => ['image'],
        ]);
        $profile = new Setting;
        $profile->name = $request->name;
        $profile->meta_description = $request->meta_description;
        $profile->meta_title = $request->meta_title;
        $profile->meta_keyword = $request->meta_keyword;
        if ($request->hasFile('logo')) {
            $skill_logo = $request->file('logo');
            $extension = Str::slug($request->name) .  '.' .  $skill_logo->getClientOriginalExtension();;
            Image::make($skill_logo)->save(public_path('logo/' . $extension), 100);
            $profile->logo  = $extension;
        }
        $profile->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $request->validate([
            'name' => ['required'],
            'meta_description' => ['required'],
            'meta_title' => ['required'],
            'meta_keyword' => ['required'],
            'logo' => ['mimes:png'],
            ]);

        $setting->name = $request->name;
        $setting->meta_description = $request->meta_description;
        $setting->meta_title = $request->meta_title;
        $setting->meta_keyword = $request->meta_keyword;
        if ($request->hasFile('logo')) {
            $skill_logo = $request->file('logo');
            // $extension = Str::slug($request->name) .  '.' . 'webp';
            $extension = Str::slug($request->name) .  '.' .  $skill_logo->getClientOriginalExtension();;
            Image::make($skill_logo)->save(public_path('logo/' . $extension), 100);
            $setting->logo  = $extension;
        }
        $setting->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $profile)
    {
        //
    }
}

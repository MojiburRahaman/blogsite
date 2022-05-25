<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

// frontend route
Route::get('/', [FrontendController::class, 'FrontendHome'])->name('FrontendHome');
Route::post('/subscribe', [FrontendController::class, 'Subscribe'])->name('Subscribe');
Route::get('/search', [FrontendController::class, 'FrontendSearch'])->name('FrontendSearch');
Route::get('/post', [FrontendController::class, 'FrontendPostAll'])->name('FrontendPostAll');
Route::get('/post/{ActivePost:slug}', [FrontendController::class, 'FrontendPostView'])->name('FrontendPostView');
Route::get('/category', [FrontendController::class, 'FrontendAllCategory'])->name('FrontendAllCategory');
Route::get('/category/{Category:slug}', [FrontendController::class, 'FrontendCategoryWisePost'])->name('FrontendCategoryWisePost');


// backend route

Route::group(['middleware' => ['auth:sanctum', 'verified'], 'prefix' => 'admin'], function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('blog', BlogController::class);
    Route::resource('category', CategoryController::class);
    Route::post('/ckeditor/upload', [DashboardController::class, 'CkfileUpload'])->name('CkfileUpload');
    Route::resource('setting', SettingController::class)->except('edit,show,update');
});

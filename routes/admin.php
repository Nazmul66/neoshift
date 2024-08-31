<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\BasicInfoController;
use App\Http\Controllers\Backend\BlogController;


Route::group(["prefix" => "admin"], function(){
    Route::view('/dashboard', "backend.pages.dashboard")->name('dashboard');;
    
    //____ Blog  ____//
    Route::resource('blog', BlogController::class)->names('admin.blog');
    Route::get('/get-blog',[BlogController::class,'getData'])->name('admin.get-blog');
    Route::post('/blog/status',[BlogController::class,'adminBlogStatus'])->name('admin.blog.status');

    //____ About  ____//
    Route::resource('about', AboutController::class)->names('admin.about');

    //____ BasicInfo  ____//
    Route::resource('basic-info', BasicInfoController::class)->names('admin.basic-info');

});

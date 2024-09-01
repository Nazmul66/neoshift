<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\BasicInfoController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\CounterController;
use App\Http\Controllers\Backend\PortfolioCategoryController;


Route::group(["prefix" => "admin"], function(){
    Route::view('/dashboard', "backend.pages.dashboard")->name('dashboard');
    
    //____ Portfolio Category ____//
    Route::resource('portfolio-category', PortfolioCategoryController::class)->names('admin.portfolio-category');
    Route::get('/get-portfolio-category',[PortfolioCategoryController::class,'getData'])->name('admin.get-portfolio-category');
    Route::post('/portfolio-category/status',[PortfolioCategoryController::class,'adminPortfolioCategoryStatus'])->name('admin.portfolio-category.status');

    //____ Testimonial ____//
    Route::resource('testimonial', TestimonialController::class)->names('admin.testimonial');
    Route::get('/get-testimonial',[TestimonialController::class,'getData'])->name('admin.get-testimonial');
    Route::post('/testimonial/status',[TestimonialController::class,'adminTestimonialStatus'])->name('admin.testimonial.status');

    //____ Team ____//
    Route::resource('team', TeamController::class)->names('admin.team');
    Route::get('/get-team',[TeamController::class,'getData'])->name('admin.get-team');
    Route::post('/team/status',[TeamController::class,'adminTeamStatus'])->name('admin.team.status');

    //____ Blog ____//
    Route::resource('blog', BlogController::class)->names('admin.blog');
    Route::get('/get-blog',[BlogController::class,'getData'])->name('admin.get-blog');
    Route::post('/blog/status',[BlogController::class,'adminBlogStatus'])->name('admin.blog.status');

    //____ Banner ____//
    Route::resource('banner', BannerController::class)->names('admin.banner');

    //____ Counter ____//
    Route::resource('counter', CounterController::class)->names('admin.counter');

    //____ About ____//
    Route::resource('about', AboutController::class)->names('admin.about');

    //____ BasicInfo ____//
    Route::resource('basic-info', BasicInfoController::class)->names('admin.basic-info');

});

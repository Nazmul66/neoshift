<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::view('/', "frontend.pages.index")->name('home');
Route::view('/about', "frontend.pages.static_pages.about-us")->name('about');
Route::view('/blog', "frontend.pages.static_pages.blog")->name('blog');
Route::view('/contact', "frontend.pages.static_pages.contact")->name('contact');
Route::view('/faq', "frontend.pages.static_pages.faq")->name('faq');
Route::view('/portfolio', "frontend.pages.static_pages.portfolio")->name('portfolio');
Route::view('/service', "frontend.pages.static_pages.service")->name('service');

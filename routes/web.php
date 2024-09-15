<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;


Route::get('/browser', function(Request $request){
     $userIp = $request->ip();
     echo  $userIp;

     $position = Location::get('66.102.0.0');

     print_r($position);
});

//__ All Pages __//
Route::view('/', "frontend.pages.index")->name('home');
Route::view('/about', "frontend.pages.static_pages.about-us")->name('about');
Route::view('/blog', "frontend.pages.static_pages.blog")->name('blog');
// Route::view('/contact', "frontend.pages.static_pages.contact")->name('contact');
Route::view('/faq', "frontend.pages.static_pages.faq")->name('faq');
Route::view('/schedule-meeting', "frontend.pages.static_pages.schedule-meeting")->name('schedule-meeting');
Route::view('/portfolio', "frontend.pages.static_pages.portfolio")->name('portfolio');
Route::view('/service', "frontend.pages.static_pages.service")->name('service');



//__ Laravel Breeze package __//
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });



require __DIR__.'/auth.php';
require __DIR__.'/admin.php';

<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\WebViewController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;


Route::get('/browser', function(Request $request){
     $userIp = $request->ip();
     echo  $userIp;

     $position = Location::get($userIp);

     print_r($position);
});


//__ All Pages __//
Route::controller(WebViewController::class)->group(function () {
     Route::get('/', "home")->name('home');
     Route::get('/about', "about")->name('about');
     Route::get('/blog', "blog")->name('blog');
     // Route::get('/contact', "frontend.pages.static_pages.contact")->name('contact');
     Route::get('/faq', "faq")->name('faq');
     Route::get('/schedule-meeting', "schedule_meeting")->name('schedule-meeting');
     Route::get('/service', "service")->name('service');
     Route::post('/contact-information', "info_store")->name('info_store');
     
     Route::get('/portfolio', "portfolio")->name('portfolio');
     Route::get('/portfolio-category-home/{id}','home_tabData');
     Route::get('/portfolio-category-all/{id}','all_tabData');
});






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

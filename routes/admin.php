<?php

use Illuminate\Support\Facades\Route;


Route::view('/dashboard', "backend.pages.dashboard")->name('dashboard');

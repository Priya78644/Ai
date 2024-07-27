<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/about',[HomeController::class,'about'])->name('about');

Route::get('/services',[HomeController::class,'services'])->name('services');

Route::get('/team',[HomeController::class,'team'])->name('team');
Route::get('/testimonial',[HomeController::class,'testimonial'])->name('testimonial');
Route::get('/projects',[HomeController::class,'projects'])->name('projects');

Route::get('/features',[HomeController::class,'features'])->name('features');

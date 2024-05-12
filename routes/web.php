<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', App\Http\Livewire\Dashboard::class)->name('dashboard');
Route::get('/courses', App\Http\Livewire\Courses::class)->name('courses');
Route::get('/news', App\Http\Livewire\News::class)->name('news');
Route::get('/contact', App\Http\Livewire\Contact::class)->name('contact');

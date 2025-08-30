<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang-kami', [HomeController::class, 'about'])->name('about');
Route::get('/kegiatan', [HomeController::class, 'activities'])->name('activities');
Route::get('/kegiatan/{id}', [HomeController::class, 'activityDetail'])->name('activities.detail');
Route::get('/berita', [HomeController::class, 'news'])->name('news');
Route::get('/berita/{id}', [HomeController::class, 'newsDetail'])->name('news.detail');
Route::get('/kontak', [HomeController::class, 'contact'])->name('contact');
Route::post('/kontak', [HomeController::class, 'submitContact'])->name('contact.submit');


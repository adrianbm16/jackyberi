<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ContactController;

Route::get('/', HomeController::class)->name('home');
Route::get('/gallery', GalleryController::class)->name('gallery');
Route::get('/shop', ShopController::class)->name('shop');
Route::get('/contact', ContactController::class)->name('contact');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ContactController;

Route::get('/', HomeController::class)->name('home'); // Enrutamiento para la vista de inicio
Route::get('/gallery', GalleryController::class)->name('gallery'); // Enrutamiento para la vista de galería
Route::get('/shop', ShopController::class)->name('shop'); // Enrutamiento para la vista de tienda

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index'); // Enrutamiento para la vista de contacto
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store'); // Enrutamiento para el formulario de contacto
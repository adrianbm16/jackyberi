<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ContactController;

Route::get('/', HomeController::class)->name('home'); // Enrutamiento para la vista de inicio

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery'); // Enrutamiento para la vista de galería
Route::post('/gallery', [GalleryController::class, 'store'])->name('gallery.store'); // Enrutamiento para el formulario de galería
Route::delete('/gallery/{image}', [GalleryController::class, 'destroy'])->name('gallery.destroy'); // Enrutamiento para eliminar una imagen de la galería

Route::get('/shop', [ShopController::class, 'index'])->name('shop'); // Enrutamiento para la vista de tienda
Route::get('shop/{id}/comprar', [ShopController::class, 'comprar'])->name('shop.comprar'); // Enrutamiento para la compra de un artículo
Route::post('shop/{id}/comprar', [ShopController::class, 'enviarPedido'])->name('shop.enviarPedido'); // Enrutamiento para enviar el pedido de compra
Route::get('/shop/gracias', function () {
    return view('shop.gracias'); // Vista de agradecimiento después de la compra
});

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index'); // Enrutamiento para la vista de contacto
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store'); // Enrutamiento para el formulario de contacto

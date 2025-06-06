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

Route::get('/shop', [ShopController::class, 'index'])->name('shop.index'); // Enrutamiento para la vista de tienda
Route::get('/shop/create', [ShopController::class, 'create'])->name('shop.create'); // Enrutamiento para la vista de creación de un artículo
Route::post('/shop', [ShopController::class, 'store'])->name('shop.store'); // Enrutamiento para agregar un artículo a la tienda
Route::get('/shop/{id}', [ShopController::class, 'show'])->name('shop.show'); // Enrutamiento para ver un artículo
Route::get('/shop/{id}/edit', [ShopController::class, 'edit'])->name('shop.edit'); // Enrutamiento para editar un artículo
Route::put('/shop/{id}', [ShopController::class, 'update'])->name('shop.update'); // Enrutamiento para actualizar un artículo
Route::delete('/shop/{id}', [ShopController::class, 'destroy'])->name('shop.destroy'); // Enrutamiento para eliminar un artículo

Route::get('/shop/{id}/buy', [ShopController::class, 'buy'])->name('shop.buy'); // Enrutamiento para enviar el pedido de compra
Route::post('/shop/{id}/buy', [ShopController::class, 'send'])->name('shop.send'); // Enrutamiento para enviar el pedido de compra
Route::get('/shop/thanks/you', [ShopController::class, 'thanks'])->name('shop.thanks'); // Enrutamiento para la vista de agradecimiento después de la compra

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index'); // Enrutamiento para la vista de contacto
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store'); // Enrutamiento para el formulario de contacto

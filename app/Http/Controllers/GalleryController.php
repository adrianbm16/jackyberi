<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $images = Image::orderBy('column')->orderBy('created_at', 'desc')->get(); // Obtener imágenes ordenadas por columna
        return view('gallery', compact('images'));
    }

    public function store(Request $request)
    {
        // Fecha y hora actual
        $timestamp = now()->format('YmdHis'); // Formato: AñoMesDíaHoraMinutoSegundo

        // Nombre completo de la imagen con extension
        $imageUrl = "{$request->column}_{$request->name}_{$timestamp}." . $request->image->extension();

        // Mover la imagen a la carpeta 'images/gallery' con el nuevo nombre
        $request->image->move(public_path('images/gallery'), $imageUrl);

        // Crear una nueva entrada en la base de datos
        Image::create([
            'name' => $request->name,
            'path' => 'images/gallery/' . $imageUrl,
            'column' => $request->column,
        ]);

        return redirect()->back()->with('success', 'Imagen añadida correctamente.');
    }

    public function destroy(Image $image)
    {
        if (file_exists(public_path($image->path))) {
            unlink(public_path($image->path)); // Eliminar archivo físico
        }
        $image->delete(); // Eliminar de la base de datos

        return redirect()->back()->with('success', 'Imagen eliminada correctamente.');
    }
}

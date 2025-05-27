<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $images = Image::orderBy('column')->get(); // Obtener imágenes ordenadas por columna
        return view('gallery', compact('images'));
    }

    public function store(Request $request)
    {
        $imageUrl = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/gallery'), $imageUrl);
        // *** Cambiar la ruta de donde se guarda la imagen a su respectiva columna y cambiar el nomobre de la imagen por el nombre mas la fecha y hora actual ***
        

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

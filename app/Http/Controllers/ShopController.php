<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $items = Item::all();
        return view('shop.index', compact('items'));
    }

    public function show($id)
    {
        $item = Item::findOrFail($id);
        return view('shop.show', compact('item'));
    }

    public function create()
    {
        return view('shop.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a valid string.',
            'price.required' => 'The price field is required.',
            'price.numeric' => 'The price must be a valid number.',
            'description.required' => 'The description field is required.',
            'image.required' => 'The image field is required.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg.',
            'image.max' => 'The image must not be larger than 2MB.',
        ]);

        $timestamp = now()->format('YmdHis'); // Formato: AñoMesDíaHoraMinutoSegundo

        // Nombre completo de la imagen con extension
        $imageUrl = "{$request->name}_{$timestamp}." . $request->image->extension();

        // Mover la imagen a la carpeta 'images/shop' con el nuevo nombre
        $request->image->move(public_path('images/shop'), $imageUrl);

        Item::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => 'images/shop/' . $imageUrl,
        ]);

        return redirect()->route('shop.index')->with('success', 'Artículo creado correctamente.');
    }
}

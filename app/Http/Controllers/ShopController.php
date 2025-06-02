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

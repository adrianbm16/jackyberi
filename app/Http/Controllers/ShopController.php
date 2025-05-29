<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $items = Item::all();
        return view('shop', compact('items'));
    }

    public function comprar($id)
    {
        $item = Item::findOrFail($id);
        return view('shop.comprar', compact('item'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ShopController extends Controller
{
    public function __invoke(Request $request)
    {
        $items = Item::all();
        return view('shop', compact('items'));
    }
}

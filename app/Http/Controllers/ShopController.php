<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('shop');
    }
}

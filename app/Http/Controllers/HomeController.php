<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $images = Image::orderBy('created_at', 'desc')->take(5)->get();
        return view('home', compact('images')); // Retorna la vista de inicio
    }
}

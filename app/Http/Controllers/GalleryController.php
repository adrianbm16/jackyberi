<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('gallery'); // Retorna la vista de galería
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    // Index
    public function index()
    {
        $get_artikel = Artikel::select('id', 'judul', 'kategori_id', 'gambar', 'penulis_id')->get();

        return view('home', compact(
            'get_artikel'
        ));
    }
}

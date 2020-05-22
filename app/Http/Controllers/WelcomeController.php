<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    // Index
    public function index()
    {
        $get_artikel = Artikel::select('id', 'judul', 'kategori_id', 'gambar', 'penulis_id', 'created_at')->get();

        $trending_top = Artikel::select('id', 'judul', 'kategori_id', 'gambar', 'penulis_id', 'created_at')->orderBy('created_at', 'desc')->first();

        return view('home', compact(
            'get_artikel',
            'trending_top'
        ));
    }
}

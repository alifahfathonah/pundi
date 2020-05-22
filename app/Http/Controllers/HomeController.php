<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Artikel;

class HomeController extends Controller
{
    // Middleware
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Index
    public function index()
    {
        $get_artikel = Artikel::select('id', 'judul', 'kategori_id', 'gambar', 'penulis_id')->get();

        $trending_top = Artikel::select('id', 'judul', 'kategori_id', 'gambar', 'penulis_id', 'created_at')->orderBy('created_at', 'asc')->first();

        return view('home', compact(
            'get_artikel',
            'trending_top'
        ));
    }
}

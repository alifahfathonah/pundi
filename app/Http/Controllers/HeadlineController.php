<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\Artikel;
use App\Models\Sub_Kategori;

class HeadlineController extends Controller
{
    // Headline index
    public function index()
    {
        $sub_kategori = Sub_Kategori::select('id', 'kategori_id', 'n_sub_kategori')->where('kategori_id', 1)->get();

        $artikel = Artikel::select('id', 'judul', 'kategori_id', 'sub_kategori_id', 'penulis_id', 'gambar', 'isi', 'tag', 'artikel_view', 'created_at')
            ->where('kategori_id', 1)->paginate(10);

        return view('kategori.headline.headline', compact(
            'sub_kategori',
            'artikel'
        ));
    }
}

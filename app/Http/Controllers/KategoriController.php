<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\Sub_Kategori;

class KategoriController extends Controller
{
    // Kategori
    public function kategori(Request $request)
    {
        // Kategori
        $kategori = Kategori::whereid($request->kategori)->first();

        // Sub Kategori
        $sub_kategori = Sub_Kategori::wherekategori_id($request->kategori)->get();

        // Sub Kategori
        $artikel = Artikel::select('id', 'judul', 'kategori_id', 'sub_kategori_id', 'penulis_id', 'gambar', 'isi', 'tag', 'artikel_view', 'created_at')
            ->where('kategori_id', $request->kategori)->paginate(10);

        return view('kategori.kategori', compact(
            'kategori',
            'sub_kategori',
            'artikel'
        ));
    }
}

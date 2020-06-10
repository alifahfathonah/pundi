<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\Sub_Kategori;

// Store
use App\Store\index;

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
            ->where('kategori_id', $request->kategori)
            ->wherestatus(1)
            ->paginate(10);

        /**
         * Variabel for header
         */
        $sub_headline = index::subHeadline();
        $sub_indepth  = index::subIndepth();
        $sub_kebijakan = index::subKebijakan();
        $sub_serbaSerbi = index::subSerbaSerbi();
        $sub_konsultasi = index::subKebijakan();

        return view('pages.kategori.kategori', compact(
            'kategori',
            'sub_kategori',
            'artikel',
            'sub_headline',
            'sub_indepth',
            'sub_kebijakan',
            'sub_serbaSerbi',
            'sub_konsultasi'
        ));
    }

    public function sub_kategori(Request $request)
    {
        // Sub Kategori
        $sub_kategori = Sub_Kategori::whereid($request->sub_kategori)->first();

        // Sub Kategori
        $artikel = Artikel::select('id', 'judul', 'kategori_id', 'sub_kategori_id', 'penulis_id', 'gambar', 'isi', 'tag', 'artikel_view', 'created_at')
            ->where('sub_kategori_id', $request->sub_kategori)
            ->wherestatus(1)
            ->paginate(10);

        /**
         * Variabel for header
         */
        $sub_headline = index::subHeadline();
        $sub_indepth  = index::subIndepth();
        $sub_kebijakan = index::subKebijakan();
        $sub_serbaSerbi = index::subSerbaSerbi();
        $sub_konsultasi = index::subKebijakan();

        return view('pages.kategori.sub_kategori', compact(
            'sub_kategori',
            'artikel',
            'sub_headline',
            'sub_indepth',
            'sub_kebijakan',
            'sub_serbaSerbi',
            'sub_konsultasi'
        ));
    }
}

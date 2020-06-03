<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\UserRepository;

// Model
use App\Models\Artikel;
use App\Models\Sub_Kategori;

class UserComposer
{
    public function compose(View $view)
    {
        /**
         * View Header
         */
        // Get data post terbaru
        $header = Artikel::select('id', 'judul')->orderBy('created_at', 'desc')->get();
        // Sub Headline
        $sub_headline = Sub_Kategori::wherekategori_id(1)->get();
        // Sub Indepth 
        $sub_indept = Sub_Kategori::wherekategori_id(2)->get();
        // Sub Kebijakan
        $sub_kebijakan = Sub_Kategori::wherekategori_id(3)->get();
        // Sub Serba-Serbi
        $sub_serbaSerbi = Sub_Kategori::wherekategori_id(4)->get();
        // Sub Konsultasi 
        $sub_konsultasi = Sub_Kategori::wherekategori_id(5)->get();

        /**
         * View Riht Sidebar
         */
        // Get data artikel
        $right_sideBar = Artikel::select('id', 'judul', 'kategori_id', 'sub_kategori_id', 'gambar', 'penulis_id', 'created_at')
            ->orderBy('created_at', 'desc')
            ->get();

        $view->with('header', $header)
            ->with('sub_headline', $sub_headline)
            ->with('sub_indepth', $sub_indept)
            ->with('sub_kebijakan', $sub_kebijakan)
            ->with('sub_serbaSerbi', $sub_serbaSerbi)
            ->with('sub_konsultasi', $sub_konsultasi)
            ->with('right_sideBar', $right_sideBar);
    }
}

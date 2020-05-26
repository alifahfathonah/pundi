<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    protected $view = 'pages.';


    public function ketentuanTulisan()
    {
        // Header
        $header = Artikel::select('id', 'judul', 'kategori_id', 'sub_kategori_id', 'gambar', 'penulis_id', 'created_at')->get();

        // Right Sidebar
        $right_sideBar = Artikel::select('id', 'judul', 'kategori_id', 'sub_kategori_id', 'gambar', 'penulis_id', 'created_at')
            ->orderBy('created_at', 'desc')
            ->get();

        return view($this->view . 'ketentuan-tulisan', compact('right_sideBar'));
    }
}

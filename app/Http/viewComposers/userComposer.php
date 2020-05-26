<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

// Model
use App\Models\Artikel;

class UserComposer
{
    public function compose(View $view)
    {
        // Get data for header
        $header = Artikel::select('id', 'judul')->orderBy('created_at', 'desc')->get();

        // Get data for right sidebar
        $right_sideBar = Artikel::select('id', 'judul', 'kategori_id', 'sub_kategori_id', 'gambar', 'penulis_id', 'created_at')
            ->orderBy('created_at', 'desc')
            ->get();

        $view->with('header', $header)->with('right_sideBar', $right_sideBar);
    }
}

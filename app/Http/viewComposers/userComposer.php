<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

// Model
use App\Models\Artikel;

class UserComposer
{
    public function compose(View $view)
    {
        /**
         * View Header
         */
        // Get data post terbaru
        $header = Artikel::select('id', 'judul')->wherestatus(1)->orderBy('created_at', 'desc')->get();

        /**
         * View Riht Sidebar
         */
        // Get data artikel
        $right_sideBar = Artikel::select('id', 'judul', 'kategori_id', 'sub_kategori_id', 'gambar', 'penulis_id', 'created_at')
            ->wherestatus(1)
            ->orderBy('created_at', 'desc')
            ->get();

        // Return
        $view->with('header', $header)
            ->with('right_sideBar', $right_sideBar);
    }
}

<?php

namespace App\Store;

// Models
use App\Models\Artikel;

class index
{
    public static function header()
    {
        $var = Artikel::select('id', 'judul')->orderBy('created_at', 'desc')->get();

        return $var;
    }

    public function rightSideBar()
    {
        $var = Artikel::select('id', '');
    }
}

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
        $header = Artikel::select('id', 'judul')->orderBy('created_at', 'desc')->get()->toArray();

        $view->with([
            'judul' => $header,
            'id' => $header
        ]);
    }
}

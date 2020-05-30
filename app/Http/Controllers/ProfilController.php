<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

// Model
use App\Models\Artikel;

class ProfilController extends Controller
{
    public function index()
    {
        $post = Artikel::where('penulis_id', Auth::user()->id)->get();

        return view('pages.profil', compact(
            'post'
        ));
    }
}

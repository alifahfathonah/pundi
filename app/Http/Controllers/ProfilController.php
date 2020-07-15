<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

// Model
use App\Models\Artikel;

// Store
use App\Store\index;

class ProfilController extends Controller
{
    protected $view = 'pages.profil.';

    public function index()
    {
        $post = Artikel::where('penulis_id', Auth::user()->id)->get();

        /**
         * Variabel for header
         */
        $sub_headline = index::subHeadline();
        $sub_indepth  = index::subIndepth();
        $sub_kebijakan = index::subKebijakan();
        $sub_serbaSerbi = index::subSerbaSerbi();
        $sub_konsultasi = index::subKebijakan();

        return view($this->view . 'index', compact(
            'post',
            'sub_headline',
            'sub_indepth',
            'sub_kebijakan',
            'sub_serbaSerbi',
            'sub_konsultasi'
        ));
    }

    public function edit_profil()
    {
        /**
         * Variabel for header
         */
        $sub_headline = index::subHeadline();
        $sub_indepth  = index::subIndepth();
        $sub_kebijakan = index::subKebijakan();
        $sub_serbaSerbi = index::subSerbaSerbi();
        $sub_konsultasi = index::subKebijakan();

        return view($this->view . 'edit-profil', compact(
            'sub_headline',
            'sub_indepth',
            'sub_kebijakan',
            'sub_serbaSerbi',
            'sub_konsultasi'
        ));
    }
}

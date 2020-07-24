<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of welcome
 *
 * @author Asip Hamdi
 * Github : axxpxmd
 */


namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Model
use App\Models\Artikel;

// Store
use App\Store\index;

class PencarianController extends Controller
{
    public function hasilPencarian(Request $request)
    {
        /**
         * Variabel for header
         */
        $sub_headline   = index::subHeadline();
        $sub_indepth    = index::subIndepth();
        $sub_kebijakan  = index::subKebijakan();
        $sub_serbaSerbi = index::subSerbaSerbi();
        $sub_konsultasi = index::subKebijakan();

        // Get ambil hasil pencarian
        $hasil_search = $request->hasil_search;

        $artikel = Artikel::where('judul', 'like', '%' . $hasil_search . '%')
            ->wherestatus(1)
            ->paginate(5);

        return view('pages.hasil-pencarian', compact(
            'sub_headline',
            'sub_indepth',
            'sub_kebijakan',
            'sub_serbaSerbi',
            'sub_konsultasi',
            'artikel',
            'hasil_search'
        ));
    }
}

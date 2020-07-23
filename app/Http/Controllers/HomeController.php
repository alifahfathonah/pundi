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

// Models
use App\Models\Artikel;
use App\Models\Kategori;

// Store
use App\Store\index;

class HomeController extends Controller
{
    // Middleware
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Index
    public function index()
    {
        /**
         * Section 1 : Trending
         */
        $trending_top    = Artikel::wherestatus(1)->orderBy('created_at', 'desc')->take(5)->get();
        $trending_bottom = Artikel::wherestatus(1)->orderBy('created_at', 'desc')->take(3)->get();
        $trending_right  = Artikel::wherestatus(1)->orderBy('created_at', 'desc')->take(5)->get();

        /**
         * Section 2 : Indepth Of Issues
         */
        $indepth_of_issues = Artikel::wherestatus(1)->take(5)->get();

        /**
         * Section 3 : Berita Terbaru
         */
        // Artikel
        $semua      = Artikel::orderBy('created_at', 'desc')->wherestatus(1)->take(4)->get();
        $headline   = Artikel::where('kategori_id', 1)->wherestatus(1)->take(4)->get();
        $indepth    = Artikel::where('kategori_id', 2)->wherestatus(1)->take(4)->get();
        $kebijakan  = Artikel::where('kategori_id', 3)->wherestatus(1)->take(4)->get();
        $serbaSerbi = Artikel::where('kategori_id', 4)->wherestatus(1)->take(4)->get();
        $konsultasi = Artikel::where('kategori_id', 5)->wherestatus(1)->take(4)->get();
        // Kategori
        $satu  = Kategori::whereid(1)->first();
        $dua   = Kategori::whereid(2)->first();
        $tiga  = Kategori::whereid(3)->first();
        $empat = Kategori::whereid(4)->first();

        /**
         * Section 4 : Report
         */
        $report = Artikel::orderBy('created_at', 'desc')->wherestatus(1)->take(6)->get();

        /**
         * Variabel for header
         */
        $sub_headline   = index::subHeadline();
        $sub_indepth    = index::subIndepth();
        $sub_kebijakan  = index::subKebijakan();
        $sub_serbaSerbi = index::subSerbaSerbi();
        $sub_konsultasi = index::subKebijakan();

        return view('home', compact(
            'trending_top',
            'trending_bottom',
            'trending_right',
            'indepth_of_issues',
            'semua',
            'headline',
            'indepth',
            'kebijakan',
            'serbaSerbi',
            'konsultasi',
            'report',
            'sub_headline',
            'sub_indepth',
            'sub_kebijakan',
            'sub_serbaSerbi',
            'sub_konsultasi',
            'satu',
            'dua',
            'tiga',
            'empat'
        ));
    }
}

<?php

namespace App\Http\Controllers;

// Models
use App\Models\Artikel;

// Store
use App\Store\index;

class WelcomeController extends Controller
{
    // Index
    public function index()
    {
        /**
         * Section 1 : Trending
         */
        // Trending Top
        $trending_top = Artikel::wherestatus(1)->orderBy('created_at', 'desc')->take(3)->get();
        // Trending Bottom
        $trending_bottom  = Artikel::wherestatus(1)->orderBy('created_at', 'desc')->take(3)->get();
        // Trending Right
        $trending_right = Artikel::wherestatus(1)->orderBy('created_at', 'desc')->take(5)->get();

        /**
         * Section 2 : Indepth Of Issues
         */
        $indepth_of_issues = Artikel::wherestatus(1)->take(5)->get();

        /**
         * Section 3 : Berita Terbaru
         */
        // All
        $all = Artikel::orderBy('created_at', 'desc')->wherestatus(1)->take(4)->get();
        // Headline
        $headline = Artikel::where('kategori_id', 1)->wherestatus(1)->take(4)->get();
        // Indepth
        $indepth = Artikel::where('kategori_id', 2)->wherestatus(1)->take(4)->get();
        // Kebijakan
        $kebijakan = Artikel::where('kategori_id', 3)->wherestatus(1)->take(4)->get();
        // Serba - Serbi
        $serbaSerbi = Artikel::where('kategori_id', 4)->wherestatus(1)->take(4)->get();
        // Konsultasi
        $konsultasi = Artikel::where('kategori_id', 5)->wherestatus(1)->take(4)->get();

        /**
         * Section 4 : Report
         */
        $report = Artikel::orderBy('created_at', 'desc')->wherestatus(1)->take(6)->get();

        /**
         * Variabel for header
         */
        $sub_headline = index::subHeadline();
        $sub_indepth  = index::subIndepth();
        $sub_kebijakan = index::subKebijakan();
        $sub_serbaSerbi = index::subSerbaSerbi();
        $sub_konsultasi = index::subKebijakan();

        return view('home', compact(
            'trending_top',
            'trending_bottom',
            'trending_right',
            'indepth_of_issues',
            'all',
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
            'sub_konsultasi'
        ));
    }
}

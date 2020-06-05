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
        /* Trending */
        // Trending Top
        $trending_top = Artikel::select('id', 'judul', 'kategori_id', 'sub_kategori_id', 'gambar', 'penulis_id', 'created_at')->orderBy('created_at', 'desc')->first();
        // Trending Bottom
        $trending_bottom  = Artikel::select('id', 'judul', 'kategori_id', 'sub_kategori_id', 'gambar', 'penulis_id', 'created_at')
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();
        // Trending Right
        $trending_right = Artikel::select('id', 'judul', 'kategori_id', 'sub_kategori_id', 'gambar', 'penulis_id', 'created_at')
            ->orderBy('created_at', 'desc')
            ->get();

        /* Indept Of Issues */
        $berita_mingguan = Artikel::select('id', 'judul', 'kategori_id', 'sub_kategori_id', 'gambar', 'penulis_id', 'created_at')->get();

        /* Berita Terbaru */
        // All
        $all = Artikel::orderBy('created_at', 'desc')->get();
        // Headline
        $headline = Artikel::where('kategori_id', 1)->get();
        // Indepth
        $indepth = Artikel::where('kategori_id', 2)->get();
        // Kebijakan
        $kebijakan = Artikel::where('kategori_id', 3)->get();
        // Serba - Serbi
        $serbaSerbi = Artikel::where('kategori_id', 4)->get();
        // Konsultasi
        $konsultasi = Artikel::where('kategori_id', 5)->get();

        /* Report */
        $report = Artikel::orderBy('created_at', 'desc')->get();
        /**
         * Section 1
         */
        // Trending Top
        $trending_top = Artikel::select('id', 'judul', 'kategori_id', 'sub_kategori_id', 'gambar', 'penulis_id', 'created_at')->orderBy('created_at', 'desc')->first();
        // Trending Bottom
        $trending_bottom  = Artikel::select('id', 'judul', 'kategori_id', 'sub_kategori_id', 'gambar', 'penulis_id', 'created_at')
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();
        // Trending Right
        $trending_right = Artikel::select('id', 'judul', 'kategori_id', 'sub_kategori_id', 'gambar', 'penulis_id', 'created_at')
            ->orderBy('created_at', 'desc')
            ->get();

        /**
         * Section 2
         */
        $berita_mingguan = Artikel::select('id', 'judul', 'kategori_id', 'sub_kategori_id', 'gambar', 'penulis_id', 'created_at')->get();

        /**
         * Section 3
         */
        // All
        $all = Artikel::orderBy('created_at', 'desc')->get();
        // Headline
        $headline = Artikel::where('kategori_id', 1)->get();
        // Indepth
        $indepth = Artikel::where('kategori_id', 2)->get();
        // Kebijakan
        $kebijakan = Artikel::where('kategori_id', 3)->get();
        // Serba - Serbi
        $serbaSerbi = Artikel::where('kategori_id', 4)->get();
        // Konsultasi
        $konsultasi = Artikel::where('kategori_id', 5)->get();

        /**
         * Section 4
         */
        // Report
        $report = Artikel::orderBy('created_at', 'desc')->get();

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
            'berita_mingguan',
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

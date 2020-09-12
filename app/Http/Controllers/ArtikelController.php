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

use App\Models\AdminDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

// Models
use App\Models\Komen;
use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\Sub_Kategori;

// Store
use App\Store\index;

class ArtikelController extends Controller
{
    protected $view = 'pages.artikel.';

    public function tambah_artikel(Request $request)
    {
        // Kategori
        $kategori = Kategori::select('id', 'n_kategori')->whereNotIn('id', [5])->get();
        $kategori_id = ($request->kategori_id == '' ? '0' : $request->kategori_id);

        /**
         * Variabel for header
         */
        $sub_headline   = index::subHeadline();
        $sub_indepth    = index::subIndepth();
        $sub_kebijakan  = index::subKebijakan();
        $sub_serbaSerbi = index::subSerbaSerbi();
        $sub_konsultasi = index::subKebijakan();

        return view($this->view . 'post-artikel', compact(
            'kategori',
            'kategori_id',
            'sub_headline',
            'sub_indepth',
            'sub_kebijakan',
            'sub_serbaSerbi',
            'sub_konsultasi'
        ));
    }

    public function subKegiatanByKegiatan($kategori_id)
    {
        return Sub_Kategori::select('id', 'n_sub_kategori')->wherekategori_id($kategori_id)->get();
    }

    public function tambahArtikel_store(Request $request)
    {
        // Validasi
        $request->validate([
            'judul'       => 'required',
            'kategori_id' => 'required',
            'gambar'      => 'required',
            'isi'         => 'required|min:700',
        ]);

        // Get data
        $artikel = new Artikel();
        $artikel->judul           = $request->judul;
        $artikel->kategori_id     = $request->kategori_id;
        $artikel->sub_kategori_id = $request->sub_kategori_id;
        $artikel->isi             = $request->isi;
        $artikel->tag             = $request->tag;

        $file     = $request->file('gambar');
        $fileName = time() . "." . $file->getClientOriginalName();
        $request->file('gambar')->move(config('app.path_local') . 'artikel/', $fileName);

        $artikel->gambar      = $fileName;
        $artikel->penulis_id  = Auth::user()->id;
        $artikel->save();

        return redirect()
            ->route('kirim-tulisan', Auth::user()->id)
            ->withSuccess('Selamat! Tulisan berhasil terkirim');
    }

    public function artikel(Request $request)
    {
        // Artikel
        $artikel = Artikel::whereid($request->post)->first();
        $editor  = AdminDetails::select('id', 'nama')->where('admin_id', $artikel->editor_id)->first();

        // Counter Views
        DB::update('UPDATE artikel SET artikel_view = artikel_view + 10 WHERE id = "' . $request->post . '"');

        // Comments
        $komen = Komen::where('artikel_id', $request->post)->get();

        /**
         * Variabel for header
         */
        $sub_headline   = index::subHeadline();
        $sub_indepth    = index::subIndepth();
        $sub_kebijakan  = index::subKebijakan();
        $sub_serbaSerbi = index::subSerbaSerbi();
        $sub_konsultasi = index::subKebijakan();

        return view($this->view . 'artikel', compact(
            'artikel',
            'komen',
            'sub_headline',
            'sub_indepth',
            'sub_kebijakan',
            'sub_serbaSerbi',
            'sub_konsultasi',
            'editor'
        ));
    }
}

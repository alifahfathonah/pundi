<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\Sub_Kategori;

class ArtikelController extends Controller
{
    public function index(Request $request)
    {
        // Kategori
        $kategori = Kategori::select('id', 'n_kategori')->get();
        $kategori_id = ($request->kategori_id == '' ? '0' : $request->kategori_id);

        // Sub Kategori
        $sub_kategori = Sub_Kategori::select('id', 'kategori_id', 'n_sub_kategori')->where('kategori_id', $kategori_id)->get();

        $right_sideBar = Artikel::select('id', 'judul', 'kategori_id', 'sub_kategori_id', 'gambar', 'penulis_id', 'created_at')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.post-artikel', compact(
            'kategori',
            'kategori_id',
            'sub_kategori',
            'right_sideBar'
        ));
    }

    public function tambah_artikel(Request $request)
    {
        $request->validate([
            'judul'       => 'required',
            'kategori_id' => 'required',
            'gambar'      => 'required',
            'isi'         => 'required',
        ]);

        $artikel = new Artikel();
        $artikel->judul           = $request->judul;
        $artikel->kategori_id     = $request->kategori_id;
        $artikel->sub_kategori_id = $request->sub_kategori_id;
        $artikel->isi             = $request->isi;
        $artikel->tag             = $request->tag;

        $file     = $request->file('gambar');
        $fileName = time() . "." . $file->getClientOriginalName();
        $request->file('gambar')->move("post/", $fileName);

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
        $artikel = Artikel::select('id', 'judul', 'kategori_id', 'sub_kategori_id', 'penulis_id', 'gambar', 'isi', 'tag', 'artikel_view', 'created_at')->whereid($request->post)->first();

        // Counter pengungjung
        DB::update('UPDATE artikel SET artikel_view = artikel_view + 1 WHERE id = "' . $request->post . '"');

        // Right Sidebar
        $right_sideBar = Artikel::select('id', 'judul', 'kategori_id', 'sub_kategori_id', 'gambar', 'penulis_id', 'created_at')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.artikel', compact(
            'artikel',
            'right_sideBar'
        ));
    }
}

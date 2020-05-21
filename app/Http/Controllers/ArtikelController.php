<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

        return view('pages.post-artikel', compact(
            'kategori',
            'kategori_id',
            'sub_kategori'
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
            ->route('artikel', Auth::user()->id)
            ->withSuccess('Selamat! Tulisan berhasil terkirim');
    }
}

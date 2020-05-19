<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Artikel;

use Illuminate\Support\Facades\Auth;

class ArtikelController extends Controller
{
    public function index()
    {
        return view('pages.post-artikel');
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
        $artikel->judul       = $request->judul;
        $artikel->kategori_id = $request->kategori_id;
        $artikel->isi         = $request->isi;

        $file     = $request->file('gambar');
        $fileName = time() . "." . $file->getClientOriginalName();
        $request->file('gambar')->move("post/", $fileName);

        $artikel->gambar      = $fileName;
        $artikel->penulis_id  = Auth::user()->id;
        $artikel->save();

        return redirect()
            ->route('home', Auth::user()->id);
    }
}

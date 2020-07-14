<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;

// Store
use App\Store\index;

// Models
use App\Models\Konsultasi;
use App\Models\Pertanyaan;

class KonsultasiController extends Controller
{
    protected $view = 'pages.konsultasi.';

    public function index()
    {
        /**
         * Variabel for header
         */
        $sub_headline   = index::subHeadline();
        $sub_indepth    = index::subIndepth();
        $sub_kebijakan  = index::subKebijakan();
        $sub_serbaSerbi = index::subSerbaSerbi();
        $sub_konsultasi = index::subKebijakan();

        return view($this->view . 'index', compact(
            'sub_headline',
            'sub_indepth',
            'sub_kebijakan',
            'sub_serbaSerbi',
            'sub_konsultasi'
        ));
    }

    public function konsultasi_store(Request $request)
    {
        // Validasi
        $request->validate([
            'nama'       => 'required',
            'email'      => 'required|email',
            'konsultasi' => 'required|max:500'
        ]);

        if (Auth::user() != null) {
            $konsultasi = new Konsultasi();
            $konsultasi->nama  = $request->nama;
            $konsultasi->email = $request->email;
            $konsultasi->konsultasi = $request->konsultasi;
            $konsultasi->created_by = $request->nama;
            $konsultasi->save();
        } else {
            $konsultasi = new Konsultasi();
            $konsultasi->nama  = $request->nama;
            $konsultasi->email = $request->email;
            $konsultasi->konsultasi = $request->konsultasi;
            $konsultasi->created_by = $request->nama;
            $konsultasi->save();
        }

        return redirect()
            ->route('konsultasi')
            ->withSuccess('Selamat! Konsultasi Berhasil terkirim');
    }

    public function pertanyaan_store(Request $request)
    {
        // Validasi
        $request->validate([
            'nama'       => 'required',
            'email'      => 'required|email',
            'pertanyaan' => 'required|max:500'
        ]);

        if (Auth::user() != null) {
            $konsultasi = new Pertanyaan();
            $konsultasi->nama  = $request->nama;
            $konsultasi->email = $request->email;
            $konsultasi->pertanyaan = $request->pertanyaan;
            $konsultasi->created_by = $request->nama;
            $konsultasi->save();
        } else {
            $konsultasi = new Pertanyaan();
            $konsultasi->nama  = $request->nama;
            $konsultasi->email = $request->email;
            $konsultasi->pertanyaan = $request->pertanyaan;
            $konsultasi->created_by = $request->nama;
            $konsultasi->save();
        }

        return redirect()
            ->route('konsultasi')
            ->withSuccess('Selamat! Pertanyaan Berhasil terkirim');
    }
}

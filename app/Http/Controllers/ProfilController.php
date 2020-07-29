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
use Illuminate\Support\Facades\Auth;

// Model
use App\User;
use App\Models\Artikel;

// Store
use App\Store\index;

class ProfilController extends Controller
{
    protected $view = 'pages.profil.';

    public function index()
    {
        $post = Artikel::where('penulis_id', Auth::user()->id)->with('user')->get();

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

    public function update_profil(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|unique:users,email,' . Auth::user()->id,
            'name'  => 'required',
            'nama_depan'    => 'required',
            'nama_belakang' => 'required',
            'username' => 'required',
            'bio'      => 'required',
            'nomor_hp' => 'required'
        ]);

        $id   = $request->id;
        $data = $request->all();
        $user = User::findOrFail($id);
        $user->update($data);

        return redirect()
            ->route('edit-profil', Auth::user()->id)
            ->withSuccess('Selamat! Data berhasil diperbaharui.');
    }

    public function update_photo(Request $request)
    {
        $request->validate([
            'photo' => 'required | image | mimes:jpeg,png,jpg|max:2048',
        ]);

        // save to storage
        $id       = $request->id;
        $file     = $request->file('photo');
        $fileName = time() . "." . $file->getClientOriginalName();
        $request->file('photo')->move(config('app.path_local') . 'ava/', $fileName);

        // delete from storage
        $data = User::findOrFail($id);
        $file1 = $data->photo;
        $filename1 = config('app.path_local') . 'ava/' . $file1;
        \File::delete($filename1);

        $updatePhoto = User::findOrFail($id);
        $updatePhoto->update([
            'photo' => $fileName
        ]);

        return redirect()
            ->route('profil', Auth::user()->id)
            ->withSuccess('Selamat! Foto Profil berhasil diperbaharui.');
    }
}

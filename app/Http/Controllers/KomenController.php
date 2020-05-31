<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// Models
use App\Models\Komen;

class KomenController extends Controller
{
    public function store(Request $request)
    {
        $nama       = $request->nama;
        $email      = $request->email;
        $comment    = $request->comment;
        $website    = $request->website;
        $artikel_id = $request->artikel_id;

        $store             = new Komen();
        $store->nama       = $nama;
        $store->email      = $email;
        $store->comment    = $comment;
        $store->website    = $website;
        if (Auth::user() != null) {
            $store->user_id = Auth::user()->id;
        }
        $store->artikel_id = $artikel_id;
        $store->save();

        return redirect()
            ->route('artikel', 'post=' . $artikel_id);
    }
}

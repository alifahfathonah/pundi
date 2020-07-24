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

// Store
use App\Store\index;

class DisclaimerController extends Controller
{
    public function index()
    {
        /**
         * Variabel for header
         */
        $sub_headline = index::subHeadline();
        $sub_indepth  = index::subIndepth();
        $sub_kebijakan = index::subKebijakan();
        $sub_serbaSerbi = index::subSerbaSerbi();
        $sub_konsultasi = index::subKebijakan();

        return view('pages.disclaimer', compact(
            'sub_headline',
            'sub_indepth',
            'sub_kebijakan',
            'sub_serbaSerbi',
            'sub_konsultasi'
        ));
    }
}

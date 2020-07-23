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

namespace App\Store;

// Models
use App\Models\Sub_Kategori;

class index
{
    /**
     * Passing for view header
     */
    public static function subHeadline()
    {
        $sub_headline = Sub_Kategori::wherekategori_id(1)->get();
        return $sub_headline;
    }

    public static function subIndepth()
    {
        $sub_indept = Sub_Kategori::wherekategori_id(2)->get();
        return $sub_indept;
    }

    public static function subKebijakan()
    {
        $sub_kebijakan = Sub_Kategori::wherekategori_id(3)->get();
        return $sub_kebijakan;
    }

    public static function subSerbaSerbi()
    {
        $sub_serbaSerbi = Sub_Kategori::wherekategori_id(4)->get();
        return $sub_serbaSerbi;
    }

    public static function subKonsultasi()
    {
        $sub_konsultasi = Sub_Kategori::wherekategori_id(5)->get();
        return $sub_konsultasi;
    }
}

<?php

namespace App\Store;

// Models
use App\Models\Artikel;

class index
{
    /**
     * Passing for view header
     */
    public function subHeadline()
    {
        $sub_headline = Sub_Kategori::wherekategori_id(1)->get();
        return $sub_headline;
    }

    public function subIndepth()
    {
        $sub_indept = Sub_Kategori::wherekategori_id(2)->get();
        return $sub_indept;
    }

    public function subKebijakan()
    {
        $sub_kebijakan = Sub_Kategori::wherekategori_id(3)->get();
        return $sub_kebijakan;
    }

    public function subSerbaSerbi()
    {
        $sub_serbaSerbi = Sub_Kategori::wherekategori_id(4)->get();
        return $sub_serbaSerbi;
    }

    public function subKonsultasi()
    {
        $sub_konsultasi = Sub_Kategori::wherekategori_id(5)->get();
        return $sub_konsultasi;
    }
}

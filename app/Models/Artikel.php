<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table    = 'artikel';
    protected $fillable = ['judul', 'kategori_id', 'sub_kategori_id', 'penulis_id', 'gambar', 'isi', 'created_at', 'updated_at', 'created_by', 'updated_by'];
}

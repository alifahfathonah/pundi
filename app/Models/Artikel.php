<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikel';
    protected $fillable = ['judul', 'kategori_id', 'gambar', 'isi', 'penulis_id', 'created_at', 'updated_at'];
}

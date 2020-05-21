<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table    = 'artikel';
    protected $fillable = ['id', 'judul', 'kategori_id', 'sub_kategori_id', 'penulis_id', 'gambar', 'isi', 'tag', 'created_at', 'updated_at', 'created_by', 'updated_by'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function sub_kategori()
    {
        return $this->belongsTo(Sub_Kategori::class, 'sub_kategori_id');
    }
}

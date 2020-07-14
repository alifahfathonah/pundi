<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    protected $table = 'konsultasi';
    protected $fillable = ['id', 'nama', 'email', 'konsultasi', 'created_at', 'created_by', 'updated_at', 'updated_by'];
}

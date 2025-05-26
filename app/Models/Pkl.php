<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pkl extends Model
{
    protected $table = 'pkl';
    protected $fillable = ['judul', 'deskripsi', 'gambar', 'link'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'jabatan';
    protected $fillable = [
        'nama_lengkap',
        'nama_jabatan',
        'kategori',
    ];
}

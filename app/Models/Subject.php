<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subject';  // ini yang wajib kamu tambahkan

    protected $fillable = [
        'nama',
        'kode',
        'deskripsi',
    ];
}

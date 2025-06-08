<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $table = 'courses';  // ini yang wajib kamu tambahkan

    protected $fillable = [
        'kelas',
        'semester',
        'judul_materi',
        'judul_materi',
        'uraian_singkat',
        'nama_ketua_jurusan',
        'gambar',
    ];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id');
    }
}

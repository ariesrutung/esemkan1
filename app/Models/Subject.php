<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'mapel';  // ini yang wajib kamu tambahkan

    protected $fillable = [
        'nama',
        'kode',
        'deskripsi',
        'gtk_id',
        'gambar',  // kalau kamu simpan gambar juga
    ];

    public function gtk()
    {
        return $this->belongsTo(Gtk::class, 'gtk_id');
    }
}

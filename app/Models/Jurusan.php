<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'jurusan';
    protected $fillable = ['nama', 'slug', 'kode', 'deskripsi', 'gambar'];

    public function ketuaJurusan()
    {
        return $this->belongsTo(Gtk::class, 'gtk_id');
    }
}

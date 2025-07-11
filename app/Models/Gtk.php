<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gtk extends Model
{
    protected $table = 'gtk';
    protected $fillable = [
        'nama_lengkap',
        'jabatan',
        'jurusan',
        'jenis_kelamin',
        'nip',
        'nuptk',
        'no_hp',
        'alamat',
        'foto',
        'gtk_id',
    ];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan', 'nama');
    }
}

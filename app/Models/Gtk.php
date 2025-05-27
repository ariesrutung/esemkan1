<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gtk extends Model
{
    protected $table = 'gtk';
    protected $fillable = [
        'nama_lengkap',
        'jabatan',
        'nip',
        'nuptk',
        'no_hp',
        'alamat',
        'foto',
        'deskripsi',
    ];

    public function mapel()
    {
        return $this->hasMany(Subject::class, 'gtk_id');
    }
}

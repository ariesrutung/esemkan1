<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gtk extends Model
{
    protected $table = 'gtk';
    protected $fillable = [
        'nama_lengkap',
        'jabatan',
        'jenis_kelamin',
        'nip',
        'nuptk',
        'no_hp',
        'alamat',
        'foto',
    ];

    public function mapel()
    {
        return $this->hasMany(Subject::class, 'gtk_id');
    }
}

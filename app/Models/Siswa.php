<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa'; // Jika tidak sesuai default

    protected $fillable = [
        'nama_lengkap',
        'nisn',
        'kelas',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'no_hp',
        'foto',
    ];
}

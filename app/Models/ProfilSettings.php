<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfilSettings extends Model
{
    protected $table = 'profil_settings';
    protected $fillable = ['key', 'value'];
    public $timestamps = true;
}

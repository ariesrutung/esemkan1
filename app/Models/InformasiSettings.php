<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformasiSettings extends Model
{
    protected $table = 'informasi_settings';
    protected $fillable = ['key', 'value'];
    public $timestamps = true;
}

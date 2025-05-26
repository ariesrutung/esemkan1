<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FasilitasSettings extends Model
{
    protected $table = 'fasilitas_settings';
    protected $fillable = ['key', 'value'];
    public $timestamps = true;
}

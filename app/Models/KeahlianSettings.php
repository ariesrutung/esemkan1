<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeahlianSettings extends Model
{
    protected $table = 'keahlian_settings';
    protected $fillable = ['key', 'value'];
    public $timestamps = true;
}

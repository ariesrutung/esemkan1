<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PklSettings extends Model
{
    protected $table = 'pkl_settings';
    protected $fillable = ['key', 'value'];
    public $timestamps = true;
}

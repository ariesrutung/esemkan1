<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageSettings extends Model
{
    protected $table = 'pages_settings';
    protected $fillable = ['key', 'value'];
    public $timestamps = true;
}

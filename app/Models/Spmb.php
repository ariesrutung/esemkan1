<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spmb extends Model
{
    protected $table = 'spmb_settings';
    protected $fillable = ['key', 'value'];
    public $timestamps = true;
}

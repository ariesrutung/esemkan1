<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeSection1 extends Model
{
    protected $table = 'home_section1';
    protected $fillable = ['key', 'value'];
    public $timestamps = true;
}

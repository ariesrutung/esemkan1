<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeSection2 extends Model
{
    protected $table = 'home_section2';
    protected $fillable = ['key', 'value'];
    public $timestamps = true;
}

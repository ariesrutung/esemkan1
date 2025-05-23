<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchIdentity extends Model
{
    protected $table = 'sch_identity';

    protected $fillable = ['key', 'value'];

    public $timestamps = true;
}

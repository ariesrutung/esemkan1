<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $table = 'submission_req';
    protected $fillable = ['key', 'value'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GtkSettings extends Model
{
    protected $table = 'gtk_settings';
    protected $fillable = ['key', 'value'];
    public $timestamps = true;
}

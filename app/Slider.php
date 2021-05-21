<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'wp_sliders';
    protected $fillable = [
        'gambar'
    ];
}

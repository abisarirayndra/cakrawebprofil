<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deskripsi extends Model
{
    protected $table = 'wp_deskripsis';
    protected $fillable = [
        'deskripsi'
    ];
}

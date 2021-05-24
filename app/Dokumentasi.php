<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
    protected $table = 'wp_dokumentasis';
    protected $fillable = [
        'foto','keterangan',
    ];
}

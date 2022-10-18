<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $table = 'wp_alumnis';
    protected $fillable = [
        'nama',
        'foto',
        'akademi',
        'fb',
        'twitter',
        'ig',
        'testi',
        'asal_sekolah',
    ];
}

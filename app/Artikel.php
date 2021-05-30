<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'wp_artikels';
    protected $fillable = [
        'judul',
        'foto',
        'artikel',
        'penulis',
    ];

    public function penulis(){
        return $this->belongsTo('App\User', 'penulis');
    }
}

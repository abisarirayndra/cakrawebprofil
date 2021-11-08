<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    protected $table = 'adm_pendaftars';
    protected $fillable = [
            'pendaftar',
            'tempat_lahir',
            'tanggal_lahir',
            'alamat',
            'sekolah',
            'wa',
            'wali',
            'foto',
            'markas',
            'nik',
            'nisn',
            'ibu',
            'wa_wali'
    ];
}

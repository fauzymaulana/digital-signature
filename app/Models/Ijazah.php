<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ijazah extends Model
{
    protected $table = 'ijazah';
    protected $primaryKey = 'id_penyakit';
    protected $fillable = [
        'nama_lengkap',
        'program_studi',
        'tahun_angkatan',
        'npm',
        'ipk',
        'digital_signature'
    ];
}

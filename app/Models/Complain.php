<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    use HasFactory;

    protected $table = 'complains';

    protected $fillable = [
        'nama_lengkap',
        'nama_kelompok',
        'no_hp',
        'provinsi',
        'kota',
        'kecamatan',
        'kelurahan',
        'keluhan',
    ]; 

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}

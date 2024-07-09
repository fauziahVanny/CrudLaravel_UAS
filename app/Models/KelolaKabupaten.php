<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelolaKabupaten extends Model
{
    use HasFactory;
    protected $table = 'kelola_kabupatens';
    protected $fillable = [
        'kode_pos',
        'nama_kabupaten',
        'nama_kecamatan',
        'nama_provinsi',
    ];
}

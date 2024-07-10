<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelolaKabupaten extends Model
{
    use HasFactory;
    protected $table = 'kelola_kabupatens';
    protected $fillable = [
        'nama',
        'nik',
        'kode_pos',
        'alamat',
        'no_telp',
    ];
}

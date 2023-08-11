<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawan';
    protected $primaryKey = 'no_karyawan';
    public $incrementing = false;
    protected $fillable = ['no_karyawan','nama', 'jabatan', 'pendidikan_terakhir'];
    protected $casts = [
        'no_karyawan' => 'integer', // Tambahkan tipe data integer
    ];
}

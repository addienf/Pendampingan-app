<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendampingan extends Model
{
    use HasFactory;
    protected $table = "pendampingan";
    protected $fillable = ['nama_aplikasi', 'perangkat_daerah', 'status_aplikasi', 'status_rekomendasi', 'pic', 'no_telp', 'spesifikasi'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerangkatDaerah extends Model
{
    use HasFactory;
    protected $table = "perangkat_daerah";
    protected $fillable = ['id_perangkat_daerah', 'nama_perangkat_daerah'];
}

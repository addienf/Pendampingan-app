<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPendampingan extends Model
{
    use HasFactory;
    protected $table = "detail_pendampingan";
    protected $fillable = ['id_pendampingan', 'tanggal', 'deskripsi', 'keterangan', 'upload_file'];
}

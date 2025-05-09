<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota';

    protected $fillable = [
        'nama', 'posisi', 'alamat', 'email', 'pendidikan', 'pengalaman_kerja', 'keahlian',
    ];
}

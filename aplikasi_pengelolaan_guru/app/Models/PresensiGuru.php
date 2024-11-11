<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresensiGuru extends Model
{
    use HasFactory;

    protected $table = 'presensi_gurus';

    protected $fillable = [
        'id_guru',
        'tgl_absen',
        'status_kehadiran',
        'keterangan',
    ];

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'id_guru', 'id');
    }
}

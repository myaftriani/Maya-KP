<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JadwalMengajar extends Model
{
    use HasFactory;
    protected $table = "jadwal_mengajar";

    protected $fillable = [
        'id_guru',
        'hari',
        'waktu',
        'kelas',
        'mata_pelajaran',
    ];

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'id_guru');
    }

}

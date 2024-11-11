<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Permission\Traits\HasRoles;

class Guru extends Model
{
    use HasFactory, HasRoles;

    protected $table = "guru";

    protected $fillable = [
        'nama',
        'nip',
        'mapel',
        'jenis_kelamin',
        'tgl_lahir',
        'alamat',
        'no_telp',
        'email'
    ];
    
    
}
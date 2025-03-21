<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrangBerzakat extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'alamat', 'no_telepon'];

    // Relasi dengan JenisZakat
    public function jenisZakats()
    {
        return $this->hasMany(JenisZakat::class, 'orang_berzakat_id');
    }
}
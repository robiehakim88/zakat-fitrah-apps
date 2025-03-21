<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisZakat extends Model
{
    use HasFactory;

    protected $fillable = ['orang_berzakat_id', 'jenis', 'jumlah'];

    // Relasi dengan OrangBerzakat
    public function orangBerzakat()
    {
        return $this->belongsTo(OrangBerzakat::class, 'orang_berzakat_id');
    }
}
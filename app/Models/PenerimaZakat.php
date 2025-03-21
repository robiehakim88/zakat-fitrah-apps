<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenerimaZakat extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'kriteria', 'alamat', 'no_telepon'];
}
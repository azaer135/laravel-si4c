<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
     protected $fillable = ['npm', 'nama', 'prodi_id', 'foto'];

    // relasi mahasiswa ke prodi
    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }
}

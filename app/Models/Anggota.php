<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    public function Keluarga()
    {
        return $this->belongsTo('App\Keluarga','id_keluarga','id_keluarga');
    }
    public function Antrian()
    {
        return $this->hasMany('App\Antrian','id_antrian','id_antrian');
    }
}

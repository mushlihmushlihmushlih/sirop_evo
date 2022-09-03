<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;

    public function Anggota()
    {
        return $this->belongsTo(Anggota::class, 'id_anggota', 'id_anggota');
    }

    public function Poli()
    {
        return $this->belongsTo(Poli::class, 'id_poli', 'id_poli');
    }

    public function Nomor()
    {
        return $this->belongsToMany(Nomor::class);
    }
}

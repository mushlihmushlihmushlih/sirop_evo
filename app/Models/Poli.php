<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    use HasFactory;

    protected $fillable = ['nama_poli', 'kuota'];

    public function Dokter()
    {
        return $this->hasMany(Dokter::class);
    }
    public function Antrian()
    {
        return $this->hasMany(Antrian::class,'id_antrian','id_antrian');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $fillable = ['nama_dokter','id_poli', 'alamat_dokter', 'email_dokter'];

    public function Poli()
    {
        return $this->belongsTo(Poli::class,'id_poli','id_poli');
    }
}

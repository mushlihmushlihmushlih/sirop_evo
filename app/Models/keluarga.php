<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keluarga extends Model
{
    use HasFactory;

    protected $fillable = ['nomor_kk','nama_kepala_kk','alamat'];

    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function Anggota()
    {
        return $this->hasMany('App\Anggota');
    }
}

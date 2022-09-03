<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Nomor extends Model
{
    use HasFactory;

    public function Antrian()
    {
        return $this->BelongsToMany(Antrian::class);
    }
}

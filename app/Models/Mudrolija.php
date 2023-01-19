<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use APp\Models\Korisnik;

class Mudrolija extends Model
{
    use HasFactory;

    public function korisnik()
    {
        return $this->belongsTo(Korisnik::class);
    }
}

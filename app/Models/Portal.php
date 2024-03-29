<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Korisnik;

class Portal extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'naziv',
        'brojClanova',
    ];


    public function korisnici()
    {
        return $this->hasMany(Korisnik::class);
    }
}

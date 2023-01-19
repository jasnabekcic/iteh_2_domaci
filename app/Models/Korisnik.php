<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Portal;
use App\Models\Mudrolija;

class Korisnik extends Model
{
    use HasFactory;

    public function portal()
    {
        return $this->belongsTo(Portal::class);
    }

    public function mudrolije()
    {
        return $this->hasMany(Mudrolija::class);
    }
}

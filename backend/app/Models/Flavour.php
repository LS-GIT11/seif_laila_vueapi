<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Flavour extends Model
{
    /** @use HasFactory<\Database\Factories\FlavourFactory> */
    use HasFactory;

    public function cakes(): HasMany
    {
        return $this->hasMany(Cake::class);
    }
}

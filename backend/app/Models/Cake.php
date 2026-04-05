<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cake extends Model
{
    /** @use HasFactory<\Database\Factories\CakeFactory> */
    use HasFactory;

    public function flavour(): BelongsTo
    {
        return $this->belongsTo(Flavour::class);
    }
}
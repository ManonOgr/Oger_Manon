<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function Size(): BelongsToMany
    {
        return $this->belongsToMany(Size::class);
    }

    public $timestamps = false;
}

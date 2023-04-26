<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    public function Product(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }

    public $timestamps = false;
}

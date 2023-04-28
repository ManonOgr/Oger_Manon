<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_name',
'product_category',
'product_price',
'product_picture',
'product_reference',
'product_state',
'product_description',
    ];

    public function Size(): BelongsToMany
    {
        return $this->belongsToMany(Size::class);
    }

    public $timestamps = false;
}

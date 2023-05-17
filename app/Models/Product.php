<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'brand_id',
        'images',
    ];
}

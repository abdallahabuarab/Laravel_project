<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
    function products(){
return $this->hasMany(Product::class);
    }
    use HasFactory;

    protected $fillable = [
        'name',
        'images',
    ];
}

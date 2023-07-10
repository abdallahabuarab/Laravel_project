<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    function users(){
        return $this->hasMany(User::class);
    }
    use HasFactory;

    protected $fillable = [
        'name',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actors extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'name',
        'city',
        'dni'

    ];

    public function getDescriptionAttribute($value){
        return substr($value, 1, 120);
    }
}

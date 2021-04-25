<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food_order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_cin',
        'food1Quantity',
        'food2Quantity',
        'food3Quantity',
        'food4Quantity'
    ];
}
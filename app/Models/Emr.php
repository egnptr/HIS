<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emr extends Model
{
    use HasFactory;

    protected $fillable = [
        'blood_pressure',
        'heart_rate',
        'blood_sugar'
    ];
}
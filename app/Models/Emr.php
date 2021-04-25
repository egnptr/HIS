<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emr extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_patient',
        'id_cin',
        'blood_pressure',
        'heart_rate',
        'blood_sugar',
        'height',
        'weight',
        'diagnosis',
        'updated_at'
    ];
}
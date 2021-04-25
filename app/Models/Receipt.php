<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'patient_name',
        'doctor_name',
        'room_cost',
        'service_cost',
        'medicine_cost',
        'consumption_cost',
        'lab_cost',
        'radiology_cost',
        'total_cost'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_name',
        'doctor_name',
        'date_in',
        'date_out',
        'room_type',
        'room_cost',
        'medicine_cost',
        'consumption_cost',
        'lab_cost',
        'radiology_cost',
        'maintenance_cost',
        'total_cost',
        'paid_off',
    ];
}

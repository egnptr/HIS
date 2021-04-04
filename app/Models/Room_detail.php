<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room_detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'ward',
        'type',
        'nurse_in_charge',
        'id_patient',
        'status'
    ];
}
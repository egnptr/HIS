<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cin extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_patient',
        'id_doctor',
        'date_in',
        'date_out',
        'group_case',
        'case_detail',
        'type',
        'status',
        'scanning_tool'
    ];
}

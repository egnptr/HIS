<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ot_room extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_name',
        'status',
        'updated_at',
    ];
}

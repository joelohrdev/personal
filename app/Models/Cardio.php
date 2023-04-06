<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cardio extends Model
{
    protected $fillable = [
        'type',
        'distance',
        'time',
        'date',
    ];

    protected $casts = [
        'date' => 'datetime',
    ];
}

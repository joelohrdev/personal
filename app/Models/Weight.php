<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    protected $fillable = [
        'weight',
        'date',
    ];

    protected $casts = [
        'date' => 'date',
    ];
}

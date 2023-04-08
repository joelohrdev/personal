<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $fillable = [
        'player_id',
        'name',
        'field_name',
        'address',
        'city',
        'state',
        'zip_code',
        'start_date',
        'end_date',
        'placed',
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}

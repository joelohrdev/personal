<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'name',
    ];

    public function tournaments()
    {
        return $this->hasMany(Tournament::class);
    }

    public function games()
    {
        return $this->hasMany(Game::class);
    }

    public function playerStats()
    {
        return $this->hasMany(PlayerStat::class);
    }
}

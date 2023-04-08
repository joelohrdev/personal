<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlayerStat extends Model
{
    protected $fillable = [
        'player_id',
        'game_id',
        'player_ab',
        'player_r',
        'player_h',
        'player_rbi',
        'player_bb',
        'player_so',
        'player_pitch_ip',
        'player_pitch_h',
        'player_pitch_r',
        'player_pitch_er',
        'player_pitch_bb',
        'player_pitch_so',
    ];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }

    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}

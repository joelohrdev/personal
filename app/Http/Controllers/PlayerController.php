<?php

namespace App\Http\Controllers;

use App\Models\Player;

class PlayerController extends Controller
{
    public function show(Player $player)
    {
        return view('player.show', compact('player'));
    }
}

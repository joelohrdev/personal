<?php

namespace App\Http\Livewire\Player;

use App\Models\Player;
use Livewire\Component;

class PreviousGameResults extends Component
{
    public Player $player;
    public function render()
    {
        return view('livewire.player.previous-game-results', [
            'games' => $this->player->games()->where('date', '<', now())->orderBy('date', 'desc')->get(),
        ]);
    }
}

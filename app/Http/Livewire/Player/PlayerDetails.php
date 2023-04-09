<?php

namespace App\Http\Livewire\Player;

use App\Models\Player;
use Livewire\Component;

class PlayerDetails extends Component
{
    public Player $player;
    public $hits;
    public $atBats;

    public function mount()
    {
        $this->hits = $this->player->playerStats->sum('player_h') ?? 0;
        $this->atBats = $this->player->playerStats->sum('player_ab') ?? 0;
    }
    public function render()
    {
        return view('livewire.player.player-details', [
            'battingAvg' => number_format($this->hits / $this->atBats, 3),
        ]);
    }
}

<?php

namespace App\Http\Livewire\Player;

use App\Models\Player;
use Livewire\Component;

class PlayerDetails extends Component
{
    public Player $player;
    public $hits;
    public $atBats;
    public $battingAvg;

    public function mount()
    {
        $this->hits = $this->player->playerStats->sum('player_h') ?? 0;
        $this->atBats = $this->player->playerStats->sum('player_ab') ?? 0;
        if ($this->hits == 0 && $this->atBats == 0) {
            $this->battingAvg = 0;
        } else {
            $this->battingAvg = number_format($this->hits / $this->atBats, 3);
        }
    }
    public function render()
    {
        return view('livewire.player.player-details');
    }
}

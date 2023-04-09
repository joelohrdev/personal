<?php

namespace App\Http\Livewire;

use App\Models\Player;
use Livewire\Component;

class HittingStatsTable extends Component
{
    public Player $player;
    public function render()
    {
        return view('livewire.hitting-stats-table', [
            'hittingStats' => $this->player->playerStats()->orderBy('game_id', 'desc')->get(),
        ]);
    }
}

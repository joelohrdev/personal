<?php

namespace App\Http\Livewire\Player;

use App\Models\Player;
use Livewire\Component;

class PitchingStatsTable extends Component
{
    public Player $player;
    public $ab;

    public function mount()
    {
        $this->ab = $this->player->playerStats()->sum('player_ab');
    }
    public function render()
    {
        return view('livewire.player.pitching-stats-table', [
            'pitchingStats' => $this->player->playerStats()->where('player_pitch_ip', '!=', '')->orderBy('game_id', 'desc')->get(),
        ]);
    }
}

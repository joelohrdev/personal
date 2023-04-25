<?php

namespace App\Http\Livewire\Player;

use App\Models\Player;
use Livewire\Component;

class UpcomingGames extends Component
{
    public Player $player;
    public function render()
    {
        return view('livewire.player.upcoming-games', [
            'games' => $this->player
                ->games()
                ->where('date', '>', now())
                ->orderBy('date', 'asc')
                ->orderBy('time', 'asc')
                ->get(),
        ]);
    }
}

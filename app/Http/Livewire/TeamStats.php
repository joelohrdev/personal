<?php

namespace App\Http\Livewire;

use App\Models\Game;
use App\Models\Player;
use Livewire\Component;

class TeamStats extends Component
{
    public Player $player;
    public $avg;
    public $gameTotalCount;
    public $gamesWonCount;
    public $runsScored;

    public function mount()
    {
        $this->runsScored = Game::where('player_id', $this->player->id)
            ->where('date', '<', now())
            ->sum('team_score');
        $this->gameTotalCount = Game::where('player_id', $this->player->id)
            ->where('date', '<', now())
            ->count();
        $this->gamesWonCount = Game::where('player_id', $this->player->id)
            ->where('date', '<', now())
            ->whereColumn('team_score', '>', 'opponent_score')
            ->count();
        $this->avg = number_format($this->gamesWonCount / $this->gameTotalCount, 3);

    }
    public function render()
    {
        return view('livewire.team-stats');
    }
}

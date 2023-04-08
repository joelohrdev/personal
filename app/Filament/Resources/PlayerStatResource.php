<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlayerStatResource\Pages;
use App\Models\PlayerStat;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Columns\TextColumn;

class PlayerStatResource extends Resource
{
    protected static ?string $model = PlayerStat::class;

    protected static ?string $slug = 'player-stats';

    protected static ?string $recordTitleAttribute = 'id';

    protected static ?string $navigationGroup = 'Sports';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('player_id')
                    ->options(function () {
                        return \App\Models\Player::all()->pluck('name', 'id');
                    })->label('Player'),

                Select::make('game_id')
                    ->options(function () {
                        return \App\Models\Game::all()->pluck('date', 'id');
                    })->label('Game'),

                TextInput::make('player_ab')
                    ->numeric()
                    ->label('At Bats'),

                TextInput::make('player_r')
                    ->numeric()
                    ->label('Runs'),

                TextInput::make('player_h')
                    ->numeric()
                    ->label('Hits'),

                TextInput::make('player_rbi')
                    ->numeric()
                    ->label('Runs Batted In'),

                TextInput::make('player_bb')
                    ->numeric()
                    ->label('Walks'),

                TextInput::make('player_so')
                    ->numeric()
                    ->label('Strike Outs'),

                TextInput::make('player_pitch_ip')
                    ->numeric()
                    ->label('Innings Pitched'),

                TextInput::make('player_pitch_h')
                    ->numeric()
                    ->label('Hits Allowed'),

                TextInput::make('player_pitch_r')
                    ->numeric()
                    ->label('Runs Allowed'),

                TextInput::make('player_pitch_er')
                    ->numeric()
                    ->label('Earned Runs Allowed'),

                TextInput::make('player_pitch_bb')
                    ->numeric()
                    ->label('Walks Allowed'),

                TextInput::make('player_pitch_so')
                    ->numeric()
                    ->label('Strike Outs Allowed'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('player.name')
                    ->label('Player')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('game.date')
                    ->date()
                    ->label('Game')
                    ->sortable()
                    ->searchable(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPlayerStats::route('/'),
            'create' => Pages\CreatePlayerStat::route('/create'),
            'edit' => Pages\EditPlayerStat::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return [];
    }
}

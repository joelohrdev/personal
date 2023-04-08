<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GameResource\Pages;
use App\Models\Game;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Columns\TextColumn;

class GameResource extends Resource
{
    protected static ?string $model = Game::class;

    protected static ?string $slug = 'games';

    protected static ?string $recordTitleAttribute = 'id';

    protected static ?string $navigationGroup = 'Sports';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('player_id')
                    ->options(function () {
                        return \App\Models\Player::all()->pluck('name', 'id');
                    }),

                Select::make('tournament_id')
                    ->options(function () {
                        return \App\Models\Tournament::all()->pluck('name', 'id');
                    }),

                DatePicker::make('date')->weekStartsOnSunday(),

                TimePicker::make('time')->withoutSeconds(),

                TextInput::make('address'),

                TextInput::make('city'),

                TextInput::make('state'),

                TextInput::make('zip_code'),

                TextInput::make('opponent_name'),

                TextInput::make('team_score')
                    ->integer(),

                TextInput::make('opponent_score'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('player.name')
                    ->label('Player')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('tournament.name')
                    ->label('Tournament')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('date')
                    ->date(),

                TextColumn::make('time')
                    ->time('g:i A'),

                TextColumn::make('city'),

                TextColumn::make('state'),

                TextColumn::make('opponent_name'),

                TextColumn::make('team_score'),

                TextColumn::make('opponent_score'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGames::route('/'),
            'create' => Pages\CreateGame::route('/create'),
            'edit' => Pages\EditGame::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return [];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TournamentResource\Pages;
use App\Models\Player;
use App\Models\Tournament;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Columns\TextColumn;

class TournamentResource extends Resource
{
    protected static ?string $model = Tournament::class;

    protected static ?string $slug = 'tournaments';

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationGroup = 'Sports';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('player_id')
                    ->options(fn () => Player::all()->pluck('name', 'id'))
                    ->label('Player')
                    ->placeholder('Select a player...'),

                TextInput::make('name'),

                TextInput::make('field_name'),

                TextInput::make('address'),

                TextInput::make('city'),

                TextInput::make('state'),

                TextInput::make('zip_code'),

                DatePicker::make('start_date'),

                DatePicker::make('end_date'),

                TextInput::make('placed'),
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

                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('city'),

                TextColumn::make('state'),

                TextColumn::make('start_date')
                    ->date(),

                TextColumn::make('end_date')
                    ->date(),

                TextColumn::make('placed'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTournaments::route('/'),
            'create' => Pages\CreateTournament::route('/create'),
            'edit' => Pages\EditTournament::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name'];
    }
}

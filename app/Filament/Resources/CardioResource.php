<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CardioResource\Pages;
use App\Models\Cardio;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CardioResource extends Resource
{
    protected static ?string $model = Cardio::class;

    protected static ?string $navigationIcon = 'heroicon-o-heart';

    protected static ?string $navigationLabel = 'Cardio';

    protected static ?string $navigationGroup = 'Health';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('type')
                    ->options([
                        'Treadmill Walk' => 'Treadmill Walk',
                        'Treadmill Run' => 'Treadmill Run',
                        'Outdoor Walk' => 'Outdoor Walk',
                        'Outdoor Run' => 'Outdoor Run',
                        'Bike' => 'Bike',
                    ]),
                Forms\Components\TextInput::make('distance')->numeric(),
                Forms\Components\TextInput::make('time')->numeric(),
                Forms\Components\DatePicker::make('date'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('distance')->label('Distance (miles)'),
                Tables\Columns\TextColumn::make('time')->label('Time (minutes)'),
                Tables\Columns\TextColumn::make('date')->date(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCardios::route('/'),
            'create' => Pages\CreateCardio::route('/create'),
            'edit' => Pages\EditCardio::route('/{record}/edit'),
        ];
    }
}

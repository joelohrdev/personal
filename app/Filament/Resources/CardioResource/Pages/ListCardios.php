<?php

namespace App\Filament\Resources\CardioResource\Pages;

use App\Filament\Resources\CardioResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCardios extends ListRecords
{
    protected static string $resource = CardioResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\PlayerStatResource\Pages;

use App\Filament\Resources\PlayerStatResource;
use Filament\Pages\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPlayerStats extends ListRecords
{
    protected static string $resource = PlayerStatResource::class;

    protected function getActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

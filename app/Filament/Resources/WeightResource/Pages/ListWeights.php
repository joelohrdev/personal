<?php

namespace App\Filament\Resources\WeightResource\Pages;

use App\Filament\Resources\WeightResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWeights extends ListRecords
{
    protected static string $resource = WeightResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

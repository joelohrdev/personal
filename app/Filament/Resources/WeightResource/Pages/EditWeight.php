<?php

namespace App\Filament\Resources\WeightResource\Pages;

use App\Filament\Resources\WeightResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWeight extends EditRecord
{
    protected static string $resource = WeightResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

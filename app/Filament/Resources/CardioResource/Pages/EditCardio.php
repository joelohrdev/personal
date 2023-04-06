<?php

namespace App\Filament\Resources\CardioResource\Pages;

use App\Filament\Resources\CardioResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCardio extends EditRecord
{
    protected static string $resource = CardioResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

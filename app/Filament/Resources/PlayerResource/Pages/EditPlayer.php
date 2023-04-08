<?php

namespace App\Filament\Resources\PlayerResource\Pages;

use App\Filament\Resources\PlayerResource;
use Filament\Pages\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPlayer extends EditRecord
{
    protected static string $resource = PlayerResource::class;

    protected function getActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

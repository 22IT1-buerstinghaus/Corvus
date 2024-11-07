<?php

namespace App\Filament\Resources\CounterConsumptionFilesResource\Pages;

use App\Filament\Resources\CounterConsumptionFilesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCounterConsumptionFiles extends EditRecord
{
    protected static string $resource = CounterConsumptionFilesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

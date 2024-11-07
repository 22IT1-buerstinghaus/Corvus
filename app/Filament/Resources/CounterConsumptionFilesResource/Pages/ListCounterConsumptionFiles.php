<?php

namespace App\Filament\Resources\CounterConsumptionFilesResource\Pages;

use App\Filament\Resources\CounterConsumptionFilesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCounterConsumptionFiles extends ListRecords
{
    protected static string $resource = CounterConsumptionFilesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

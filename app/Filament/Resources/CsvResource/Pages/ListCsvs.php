<?php

namespace App\Filament\Resources\CsvResource\Pages;

use App\Filament\Resources\CsvResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCsvs extends ListRecords
{
    protected static string $resource = CsvResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

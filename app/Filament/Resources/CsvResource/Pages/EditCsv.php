<?php

namespace App\Filament\Resources\CsvResource\Pages;

use App\Filament\Resources\CsvResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCsv extends EditRecord
{
    protected static string $resource = CsvResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

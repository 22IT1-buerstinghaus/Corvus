<?php

namespace App\Filament\Resources\CustomerResource\Pages;

use App\Filament\Resources\CustomerResource;
use App\Models\User;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCustomer extends EditRecord
{
    protected static string $resource = CustomerResource::class;

    protected function getHeaderActions(): array
    {
        /**
         * @var User $user
         */
        $user = auth()->user();
        if (! $user->is_admin) {
            return [];
        }

        return [
            Actions\DeleteAction::make(),
        ];
    }
}

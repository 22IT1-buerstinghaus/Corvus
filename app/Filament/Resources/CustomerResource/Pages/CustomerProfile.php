<?php

namespace App\Filament\Resources\CustomerResource\Pages;

use App\Filament\Resources\CustomerResource;
use App\Models\Customer;
use Auth;
use Filament\Actions;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class CustomerProfile extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static string $resource = CustomerResource::class;
    protected static string $view = 'filament.pages.customer-profile';
    public Customer $customer;
    public ?array $data = [];

    public function mount(): void
    {
        $user = Auth::user();

        $this->customer = $user->customer()->firstOrFail();

        $this->form->fill(
            $this->customer->toArray()
        );
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(2)->schema([
                    TextInput::make('first_name')
                        ->label('Vorname')
                        ->required(),

                    TextInput::make('last_name')
                        ->label('Nachname')
                        ->required(),

                    TextInput::make('phone_number')
                        ->label('Telefonnummer')
                        ->tel()
                        ->required(),

                    TextInput::make('email')
                        ->label('E-Mail-Adresse')
                        ->email()
                        ->required(),

                    TextInput::make('country')
                        ->label('Land')
                        ->required(),

                    TextInput::make('city')
                        ->label('Stadt')
                        ->required(),

                    TextInput::make('zip_code')
                        ->label('Postleitzahl')
                        ->required(),

                    TextInput::make('street')
                        ->label('Straße')
                        ->required(),

                    TextInput::make('house_number')
                        ->label('Hausnummer')
                        ->required(),
                ]),
            ])
            ->statePath('data')
            ->model($this->customer);
    }

    public function update(): void
    {
        $this->customer->update(
            $this->form->getState()
        );

        Notification::make()
            ->title('Kundenprofil wurde erfolgreich aktualisiert.')
            ->success()
            ->send();
    }

    protected function getFormActions(): array
    {
        return [
            Actions\Action::make('update')
                ->label('Aktualisieren')
                ->color('primary')
                ->submit('update'),
        ];
    }
}

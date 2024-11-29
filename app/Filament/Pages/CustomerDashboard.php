<?php

namespace App\Filament\Pages;

use App\Filament\Resources\CustomerResource\Pages\CreateCustomer;
use App\Models\User;
use Auth;
use Filament\Pages\Page;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class CustomerDashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.customer-dashboard';

    public function mount(): Application|Redirector|RedirectResponse|null
    {
        $user = Auth::user();
        /** @var User $user */
        if ($user->customer === null) {
            return redirect('/customer/customers/create?initial');
        }
        return null;
    }
}

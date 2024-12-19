<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'is_locked' => false,
            'is_admin' => true,
        ]);

        Customer::factory()->create([
            'user_id' => $admin->id,
            'first_name' => 'Test',
            'last_name' => 'Customer',
            'birth_date' => '1990-01-01',
            'phone_number' => '+1234567890',
            'email' => 'testcustomer@example.com',
            'house_number' => '12A',
            'street' => 'Test Street',
            'city' => 'Test City',
            'zip_code' => '12345',
            'country' => 'Germany',
            'IBAN' => 'DE12345678901234567890',
            'BIC' => 'TESTBICXXX',
        ]);
    }
}

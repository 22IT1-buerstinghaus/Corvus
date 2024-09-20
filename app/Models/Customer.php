<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'birth_date',
        'phone_number',
        'email',
        'house_number',
        'street',
        'city',
        'zip_code',
        'country',
        'IBAN',
        'BIC',
    ];
}

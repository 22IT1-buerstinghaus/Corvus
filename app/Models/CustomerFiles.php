<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerFiles extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'path',
        'name',
        'street',
        'house_nr',
        'counter_nr',
        'installation_date',
        'mobile',
        'phone',
    ];
}

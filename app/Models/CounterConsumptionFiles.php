<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CounterConsumptionFiles extends Model
{
    use HasFactory;

    protected $fillable = [
        'counter_nr',
        'path',
        'date',
        'meter_reading',
    ];
}

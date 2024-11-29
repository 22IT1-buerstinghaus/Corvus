<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $path
 * @property int|null $counter_nr
 * @property string|null $date
 * @property int|null $meter_reading
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CounterConsumptionFiles newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CounterConsumptionFiles newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CounterConsumptionFiles query()
 * @method static \Illuminate\Database\Eloquent\Builder|CounterConsumptionFiles whereCounterNr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CounterConsumptionFiles whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CounterConsumptionFiles whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CounterConsumptionFiles whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CounterConsumptionFiles whereMeterReading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CounterConsumptionFiles wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CounterConsumptionFiles whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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

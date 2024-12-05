<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $path
 * @property int|null $counter_nr
 * @property string|null $date
 * @property int|null $meter_reading
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static Builder|CounterConsumptionFiles newModelQuery()
 * @method static Builder|CounterConsumptionFiles newQuery()
 * @method static Builder|CounterConsumptionFiles query()
 * @method static Builder|CounterConsumptionFiles whereCounterNr($value)
 * @method static Builder|CounterConsumptionFiles whereCreatedAt($value)
 * @method static Builder|CounterConsumptionFiles whereDate($value)
 * @method static Builder|CounterConsumptionFiles whereId($value)
 * @method static Builder|CounterConsumptionFiles whereMeterReading($value)
 * @method static Builder|CounterConsumptionFiles wherePath($value)
 * @method static Builder|CounterConsumptionFiles whereUpdatedAt($value)
 *
 * @mixin Eloquent
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

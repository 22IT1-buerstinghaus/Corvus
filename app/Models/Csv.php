<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 *
 *
 * @property int $id
 * @property int $customer_id
 * @property string $path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Customer|null $customer
 * @method static Builder|Csv newModelQuery()
 * @method static Builder|Csv newQuery()
 * @method static Builder|Csv query()
 * @method static Builder|Csv whereCreatedAt($value)
 * @method static Builder|Csv whereCustomerId($value)
 * @method static Builder|Csv whereId($value)
 * @method static Builder|Csv wherePath($value)
 * @method static Builder|Csv whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Csv extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'path',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}

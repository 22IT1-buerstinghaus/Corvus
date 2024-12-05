<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property int $customer_id
 * @property string $path
 * @property string|null $name
 * @property string|null $street
 * @property string|null $house_nr
 * @property int|null $counter_nr
 * @property string|null $installation_date
 * @property string|null $mobile
 * @property string|null $phone
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static Builder|CustomerFiles newModelQuery()
 * @method static Builder|CustomerFiles newQuery()
 * @method static Builder|CustomerFiles query()
 * @method static Builder|CustomerFiles whereCounterNr($value)
 * @method static Builder|CustomerFiles whereCreatedAt($value)
 * @method static Builder|CustomerFiles whereCustomerId($value)
 * @method static Builder|CustomerFiles whereHouseNr($value)
 * @method static Builder|CustomerFiles whereId($value)
 * @method static Builder|CustomerFiles whereInstallationDate($value)
 * @method static Builder|CustomerFiles whereMobile($value)
 * @method static Builder|CustomerFiles whereName($value)
 * @method static Builder|CustomerFiles wherePath($value)
 * @method static Builder|CustomerFiles wherePhone($value)
 * @method static Builder|CustomerFiles whereStreet($value)
 * @method static Builder|CustomerFiles whereUpdatedAt($value)
 *
 * @mixin Eloquent
 */
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
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
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerFiles newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerFiles newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerFiles query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerFiles whereCounterNr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerFiles whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerFiles whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerFiles whereHouseNr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerFiles whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerFiles whereInstallationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerFiles whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerFiles whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerFiles wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerFiles wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerFiles whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerFiles whereUpdatedAt($value)
 * @mixin \Eloquent
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

<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property int $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $birth_date
 * @property string $phone_number
 * @property string $email
 * @property string $house_number
 * @property string $street
 * @property string $city
 * @property string $zip_code
 * @property string $country
 * @property string $IBAN
 * @property string $BIC
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read string $full_name
 *
 * @method static \Database\Factories\CustomerFactory factory($count = null, $state = [])
 * @method static Builder|Customer newModelQuery()
 * @method static Builder|Customer newQuery()
 * @method static Builder|Customer query()
 * @method static Builder|Customer whereBIC($value)
 * @method static Builder|Customer whereBirthDate($value)
 * @method static Builder|Customer whereCity($value)
 * @method static Builder|Customer whereCountry($value)
 * @method static Builder|Customer whereCreatedAt($value)
 * @method static Builder|Customer whereEmail($value)
 * @method static Builder|Customer whereFirstName($value)
 * @method static Builder|Customer whereHouseNumber($value)
 * @method static Builder|Customer whereIBAN($value)
 * @method static Builder|Customer whereId($value)
 * @method static Builder|Customer whereLastName($value)
 * @method static Builder|Customer wherePhoneNumber($value)
 * @method static Builder|Customer whereStreet($value)
 * @method static Builder|Customer whereUpdatedAt($value)
 * @method static Builder|Customer whereUserId($value)
 * @method static Builder|Customer whereZipCode($value)
 *
 * @mixin Eloquent
 */
class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'user_id',
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

    public function getFullNameAttribute(): string
    {
        return "{$this->first_name} {$this->last_name}";
    }
}

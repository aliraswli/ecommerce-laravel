<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Enums\OrderStatus;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Address
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $address
 * @property string $province
 * @property string $city
 * @property string $postal_code
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property User $user
 *
 * @package App\Models
 */
class Address extends Model
{
	protected $table = 'addresses';

	protected $casts = [
		'user_id' => 'int',
        'status' => OrderStatus::class,
	];

	protected $fillable = [
		'user_id',
		'title',
		'address',
		'province',
		'city',
		'postal_code'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}

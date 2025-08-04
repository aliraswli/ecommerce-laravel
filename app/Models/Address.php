<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Address
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $address
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
		'user_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'title',
		'address',
		'city',
		'postal_code'
	];

	public function user(): User|BelongsTo
    {
		return $this->belongsTo(User::class);
	}
}

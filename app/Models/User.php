<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string|null $phone
 * @property string $role
 * @property bool $is_active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Address[] $addresses
 * @property Collection|Order[] $orders
 * @property Collection|Review[] $reviews
 *
 * @package App\Models
 */
class User extends Authenticatable
{
	protected $table = 'users';

	protected $casts = [
		'is_active' => 'bool'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'username',
		'email',
		'password',
		'phone',
		'role',
		'is_active'
	];

	public function addresses(): Address|HasMany
	{
		return $this->hasMany(Address::class);
	}

	public function orders(): Order|HasMany
	{
		return $this->hasMany(Order::class);
	}

	public function reviews(): User|HasMany
    {
		return $this->hasMany(Review::class);
	}
}

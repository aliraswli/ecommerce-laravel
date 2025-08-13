<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cart
 * 
 * @property int $id
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Cart extends Model
{
	protected $table = 'cart';

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'user_id'
	];
}

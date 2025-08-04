<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Order
 *
 * @property int $id
 * @property int $user_id
 * @property int $total_amount
 * @property string $shipping_address
 * @property string $payment_method
 * @property string|null $tracking_code
 * @property string $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property User $user
 * @property Collection|OrderItem[] $order_items
 *
 * @package App\Models
 */
class Order extends Model
{
	protected $table = 'orders';

	protected $casts = [
		'user_id' => 'int',
		'total_amount' => 'int'
	];

	protected $fillable = [
		'user_id',
		'total_amount',
		'shipping_address',
		'payment_method',
		'tracking_code',
		'status'
	];

	public function user(): User|BelongsTo
    {
		return $this->belongsTo(User::class);
	}

	public function order_items()
	{
		return $this->hasMany(OrderItem::class);
	}
}

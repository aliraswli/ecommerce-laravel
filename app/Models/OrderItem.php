<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class OrderItem
 *
 * @property int $id
 * @property int $order_id
 * @property int $product_id
 * @property int $quantity
 * @property int $unit_price
 * @property int $subtotal
 * @property int|null $discount_applied
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Order $order
 * @property Product $product
 *
 * @package App\Models
 */
class OrderItem extends Model
{
	protected $table = 'order_items';

	protected $casts = [
		'order_id' => 'int',
		'product_id' => 'int',
		'quantity' => 'int',
		'unit_price' => 'int',
		'subtotal' => 'int',
		'discount_applied' => 'int'
	];

	protected $fillable = [
		'order_id',
		'product_id',
		'quantity',
		'unit_price',
		'subtotal',
		'discount_applied'
	];

	public function order(): Order|BelongsTo
    {
		return $this->belongsTo(Order::class);
	}

	public function product(): Product|BelongsTo
    {
		return $this->belongsTo(Product::class);
	}
}

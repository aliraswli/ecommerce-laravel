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
 * @property int $qty
 * @property int $unit_price
 * @property int $total_price
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
	protected $casts = [
		'order_id' => 'int',
		'product_id' => 'int',
		'qty' => 'int',
		'unit_price' => 'int',
		'total_price' => 'int',
	];

	protected $fillable = [
		'order_id',
		'product_id',
		'qty',
		'unit_price',
		'total_price',
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

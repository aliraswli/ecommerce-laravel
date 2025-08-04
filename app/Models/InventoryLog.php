<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class InventoryLog
 * 
 * @property int $id
 * @property int $product_id
 * @property int $changed
 * @property string $reason
 * @property Carbon|null $created_at
 * 
 * @property Product $product
 *
 * @package App\Models
 */
class InventoryLog extends Model
{
	protected $table = 'inventory_logs';
	public $timestamps = false;

	protected $casts = [
		'product_id' => 'int',
		'changed' => 'int'
	];

	protected $fillable = [
		'product_id',
		'changed',
		'reason'
	];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}
}

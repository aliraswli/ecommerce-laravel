<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class CartItem
 *
 * @property int $id
 * @property int $cart_id
 * @property int $product_id
 * @property int $qty
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Product $product
 *
 * @package App\Models
 */
class CartItem extends Model
{
    protected $table = 'cart_items';

    protected $casts = [
        'cart_id' => 'int',
        'product_id' => 'int',
        'qty' => 'int',
    ];

    protected $fillable = [
        'cart_id',
        'product_id',
        'qty',
    ];

    public function product(): Product|BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 * Class Product
 *
 * @property int $id
 * @property string $name
 * @property string $sku
 * @property string|null $description
 * @property int $price
 * @property int|null $discount_price
 * @property int $stock
 * @property bool $is_available
 * @property int $category_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Category $category
 * @property Collection|InventoryLog[] $inventory_logs
 * @property Collection|OrderItem[] $order_items
 * @property Collection|Review[] $reviews
 *
 * @package App\Models
 */
class Product extends Model
{
    protected $table = 'products';

    protected $casts = [
        'price' => 'int',
        'discount_price' => 'int',
        'stock' => 'int',
        'is_available' => 'bool',
        'category_id' => 'int'
    ];

    protected $fillable = [
        'name',
        'sku',
        'description',
        'price',
        'discount_price',
        'stock',
        'is_available',
        'category_id'
    ];

    public function category(): Category|BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function inventory_logs()
    {
        return $this->hasMany(InventoryLog::class);
    }

    public function order_items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function files(): File|MorphMany
    {
        return $this->morphMany(File::class, 'fileable');
    }

    public function discounts()
    {
        return $this->hasMany(Discount::class);
    }

    public function activeDiscount()
    {
        return $this->hasOne(Discount::class)
            ->where('start_date', '<=', now())
            ->where('end_date', '>=', now());
    }
}

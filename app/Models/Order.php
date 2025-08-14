<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Enums\OrderStatus;
use App\Enums\PaymentMethod;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 *
 * @property int $id
 * @property int $user_id
 * @property int $total_amount
 * @property int $address_id
 * @property PaymentMethod $payment_method
 * @property string|null $tracking_code
 * @property OrderStatus $status
 * @property Carbon $created_at
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
        'total_amount' => 'int',
        'address_id' => 'int',
        'status' => OrderStatus::class,
        'payment_status' => PaymentMethod::class,
    ];

    protected $fillable = [
        'user_id',
        'total_amount',
        'address_id',
        'payment_method',
        'tracking_code',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order_items()
    {
        return $this->hasMany(OrderItem::class);
    }
}

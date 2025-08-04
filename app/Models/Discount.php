<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Discount
 *
 * @property int $id
 * @property string $code
 * @property string $type
 * @property int $value
 * @property Carbon $start_date
 * @property Carbon $end_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Discount extends Model
{
    protected $table = 'discounts';

    protected $casts = [
        'value' => 'int',
        'start_date' => 'datetime',
        'end_date' => 'datetime'
    ];

    protected $fillable = [
        'code',
        'type',
        'value',
        'start_date',
        'end_date'
    ];

    public function product(): Product|BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}

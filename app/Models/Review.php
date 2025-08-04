<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Review
 * 
 * @property int $id
 * @property int $user_id
 * @property int $product_id
 * @property int $rating
 * @property string|null $comment
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 * @property Product $product
 *
 * @package App\Models
 */
class Review extends Model
{
	protected $table = 'reviews';

	protected $casts = [
		'user_id' => 'int',
		'product_id' => 'int',
		'rating' => 'int'
	];

	protected $fillable = [
		'user_id',
		'product_id',
		'rating',
		'comment'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function product()
	{
		return $this->belongsTo(Product::class);
	}
}

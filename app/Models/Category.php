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
 * Class Category
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property int|null $parent_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Category|null $category
 * @property Collection|Category[] $categories
 * @property Collection|Product[] $products
 *
 * @package App\Models
 */
class Category extends Model
{
	protected $table = 'categories';

	protected $casts = [
		'parent_id' => 'int'
	];

	protected $fillable = [
		'name',
		'slug',
		'description',
		'parent_id'
	];

	public function category(): Category|BelongsTo
    {
		return $this->belongsTo(Category::class, 'parent_id');
	}

	public function categories()
	{
		return $this->hasMany(Category::class, 'parent_id');
	}

	public function products()
	{
		return $this->hasMany(Product::class);
	}

    public function files(): File|MorphMany
    {
        return $this->morphMany(File::class, 'fileable');
    }
}

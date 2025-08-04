<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * Class File
 *
 * @property int $id
 * @property int $fileable_id
 * @property string $fileable_type
 * @property string $path
 * @property string $type
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class File extends Model
{
	protected $table = 'files';

	protected $casts = [
		'fileable_id' => 'int'
	];

	protected $fillable = [
		'fileable_id',
		'fileable_type',
		'path',
		'type',
		'description'
	];
}


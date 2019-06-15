<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 13 Jun 2019 20:02:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Product
 * 
 * @property int $id
 * @property string $name
 * @property int $price
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Product extends Eloquent
{
	protected $casts = [
		'price' => 'int'
	];

	protected $fillable = [
		'name',
		'price',
		'description'
	];
}

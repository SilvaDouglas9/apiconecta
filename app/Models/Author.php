<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 13 Jun 2019 20:02:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Author
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $github
 * @property string $twitter
 * @property string $location
 * @property string $senha
 * @property string $latest_article_published
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Author extends Eloquent
{
	protected $fillable = [
		'name',
		'email',
		'github',
		'twitter',
		'location',
		'senha',
		'latest_article_published'
	];

  
        
        
}


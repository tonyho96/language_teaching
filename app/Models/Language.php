<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
	protected $fillable = [
		'id',
		'name',
		'language_group_id',

	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $table = 'languages';
	protected $primaryKey = 'id';
	public $timestamps = false;

}

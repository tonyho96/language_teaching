<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
	protected $fillable = [
		'code',
		'name',

	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $table = 'countries';
	protected $primaryKey = 'code';
	public $timestamps = false;

}

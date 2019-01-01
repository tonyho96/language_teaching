<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
	'id',
	'name',
	'description'
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $table = 'subjects';
	protected $primaryKey = 'id';
	public $timestamps = false;

}

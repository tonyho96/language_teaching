<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
	protected $guarded = [];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'id',
		'email',
		'password',
		'full_name',
		'first_name',
		'last_name',
		'street_address',
		'language_level',
		'role',
		'student_profile_status',
		'preferred_im_chat',
		'phone_number',
		'about_user',
		'about_user_as_teacher',
		'about_user_lesson',
		'url',
		'teacher_level',
		'availability_status_description',
		'introduce_video_url',
		'skype_id',
		'language_id',
		'other_language_id',
		'country_code',
		'from_country_code',
		'remember_token',
		'is_verified',
		'current_balance',
		'available_balance',
		'currency_code',
		'teacher_reason',
		'teacher_question',
		'teacher_comment',
		'verify_token',
		'time_zone',
		'street_from',
		'gender',
		'birth_day',
		'face_time',
		'qq',
		'we_chat',
		'google_hangout',
		'looking_for',
		'short_introduction',
		'long_introduction',

    ];




	/**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	protected $primaryKey = 'id';

	public $timestamps = false;

	protected $table = 'users';


}

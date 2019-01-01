<?php

namespace App\Services;
use App\Models\Files;
use DB;
use Auth;
class UserService
{
	public static function update_information( $user, $input) {
		DB::beginTransaction();
		try {
			$userDate = [
				'full_name' => $input['full_name'] ,
				'from_country_code' => $input['from_country_code'] ,
				'country_code' => $input['country_code'] ,
				'street_address' => $input['street_address'] ,
				'time_zone' => $input['time_zone'] ,
				'birth_day' => $input['birth_day'] ,
				'gender' => $input['gender'] ,
			];
			$user->update($input);
			DB::commit();
			return $user;
		} catch ( \Exception $e ) {
			echo $e;
			DB::rollback();
			return false;
		}
	}
	
	public static function update_comunication( $user, $input) {
		DB::beginTransaction();
		try {
			$userDate = [
				'skype_id' => $input['skype_id'] ,
				'face_time' => $input['face_time'] ,
				'google_hangout' => $input['google_hangout'] ,
				'qq' => $input['qq'] ,
				'we_chat' => $input['we_chat'] ,
			];
			$user->update($input);
			DB::commit();
			return $user;
		} catch ( \Exception $e ) {
			echo $e;
			DB::rollback();
			return false;
		}
	}
	
	public static function update_student_information( $user, $input) {
		DB::beginTransaction();
		try {
			$userDate = [
				'looking_for' => $input['looking_for'] ,
				'short_introduction' => $input['short_introduction'] ,
				'long_introduction' => $input['long_introduction'] 
			];
			$user->update($input);
			DB::commit();
			return $user;
		} catch ( \Exception $e ) {
			echo $e;
			DB::rollback();
			return false;
		}
	}
	public static function update_language_information( $user, $input) {
		DB::beginTransaction();
		try {
			$userDate = [
				'language_id' => $input['language_id'] ,
				'other_language_id' => $input['other_language_id'] ,
				'language_level' => $input['language_level'] 
			];
			$user->update($input);
			DB::commit();
			return $user;
		} catch ( \Exception $e ) {
			echo $e;
			DB::rollback();
			return false;
		}
	}
}

?>

<?php

namespace App\Services;
use App\User;
use DB;

class OnBoardingService
{

	//Actually updating information for user
	public static function create($input, $user) {
		DB::beginTransaction();
		try {
			$Data = [
				'language_id' => $input['language_id'],
				'time_zone' => $input['time_zones'],
				'location_id' => $input['location_id'],
				'other_language_id' => $input['other_language_id'],
				'language_level' => $input['language_level'],
				'student_profile_status' => $input['student_profile_status'],
				'subject_id' => $input['subject_id'],
				'teacher_level' => $input['teacher_level'],
			];
			$user->update($Data);
			DB::commit();
			return $user;
		} catch ( \Exception $e ) {
			DB::rollback();
			return false;
		}
	}


//	public static function update($input, $dataversion) {
//		DB::beginTransaction();
//		try {
//			$dataVersionData = [
//				'version_name' => $input['version-name'],
//				'version_type' => $input['version-type']
//			];
//			$dataversion->update($dataVersionData);
//			DB::commit();
//			return $dataversion;
//		} catch ( \Exception $e ) {
//			DB::rollback();
//			return false;
//		}
//	}


//	public static function delete($dataversion)
//	{
//		DB::beginTransaction();
//		try {
//			$dataversion->delete();
//			DB::commit();
//			return true;
//		} catch (\Exception $e) {
//			DB::rollback();
//			return false;
//		}
//	}
}

?>

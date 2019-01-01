<?php

namespace App\Services;


class DashBoardService
{

	//Actually updating information for user
	public static function dateByTimeZone($area_name) {
		//ex: $area_name = Asia/Tokyo
		$t=time();
		$fromDatabase = date("Y-m-d H:i",$t);
		$datetime = new \DateTime($fromDatabase);
		$timezone = new \DateTimeZone($area_name);
		$datetime->setTimeZone($timezone);
		$result = $datetime->format('H:i Y-m-d');
		return $result;
	}

}

?>

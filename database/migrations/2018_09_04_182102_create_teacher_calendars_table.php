<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeacherCalendarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('teacher_calendars', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->dateTime('time_begin')->nullable();
			$table->dateTime('time_end')->nullable();
			$table->integer('teacher_id')->nullable()->index('fk_teacher_calendars_users1_idx');
			$table->string('weekday', 191)->nullable()->comment('ngày dạy, ở đây là những ngày trong tuần mà giáo viên đó có thể dạy học được, chẳng hạn thứ 2, 5, 6, chủ nhật -> Mỗi dòng là data chứa ngày thứ mấy trong tuần, thời gian bắt đầu và kết thúc của ngày đó, lưu dạng int (vì 1 tuần có 7 ngày, mỗi ngày ngày dạy giờ có thể khác nhau và 1 ngày có thể dạy nhiều khoảng thời gian');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('teacher_calendars');
	}

}

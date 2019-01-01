<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEducationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('educations', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->dateTime('date_begin')->nullable();
			$table->dateTime('date_end')->nullable();
			$table->string('school_or_institution', 100)->nullable()->comment('thông tin trường học hoặc tổ chức');
			$table->string('topic_of_study', 100)->nullable()->comment('chủ đề nghiên cứu');
			$table->string('degree', 100)->nullable()->comment('trình độ, ở đây là trình độ của education, không phải trình độ của ngôn ngữ đang giảng dạy');
			$table->string('description', 191)->nullable();
			$table->string('attachment', 191)->nullable()->comment('lưu file PDF, JPG có thể là hình chụp bằng cấp');
			$table->integer('teacher_id')->nullable()->index('fk_educations_users1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('educations');
	}

}

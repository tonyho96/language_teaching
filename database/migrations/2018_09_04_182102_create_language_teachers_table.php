<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLanguageTeachersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('language_teachers', function(Blueprint $table)
		{
			$table->integer('teacher_id')->index('fk_users_has_languages_users1_idx');
			$table->integer('language_id')->index('fk_users_has_languages_languages1_idx');
			$table->float('proficiency')->nullable()->comment('Độ thành thạo của ngôn ngữ');
			$table->primary(['teacher_id','language_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('language_teachers');
	}

}

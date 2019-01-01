<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorkExperiencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('work_experiences', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->dateTime('date_begin')->nullable();
			$table->dateTime('date_end')->nullable();
			$table->string('company', 100)->nullable();
			$table->string('position', 50)->nullable()->comment('Vị trí, chức vụ làm việc trong công ty');
			$table->string('description', 191)->nullable();
			$table->integer('district_id')->nullable()->index('fk_work_experiences_districts1_idx');
			$table->integer('teacher_id')->nullable()->index('fk_work_experiences_users1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('work_experiences');
	}

}

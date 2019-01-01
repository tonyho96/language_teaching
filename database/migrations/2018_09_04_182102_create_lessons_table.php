<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLessonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lessons', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 100)->nullable();
			$table->string('description', 191)->nullable();
			$table->timestamps();
			$table->float('price_per_hour', 10, 0)->nullable();
			$table->integer('type')->nullable()->comment('loại của lesson, ở đây có 3 loại: professional lessons, informal tutoring, trial lesson');
			$table->integer('teacher_id')->nullable()->index('fk_lessons_users1_idx');
			$table->integer('money_id')->nullable()->index('fk_lessons_moneys1_idx');
			$table->string('currency_code', 191)->nullable()->comment('Đơn vị tiền tệ');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('lessons');
	}

}

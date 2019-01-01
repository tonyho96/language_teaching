<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePackagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('packages', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->dateTime('expiration_date')->nullable();
			$table->integer('status')->nullable()->comment('có 3 trạng thái: request, waiting, completed');
			$table->integer('lesson_id')->nullable()->index('fk_packages_lessons1_idx');
			$table->integer('student_id')->nullable()->index('fk_packages_users1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('packages');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaterialsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('materials', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 50)->nullable()->comment('Lưu tên tài liệu');
			$table->string('url', 50)->nullable()->comment('Lưu tên của file tài liệu để truy cập');
			$table->integer('lesson_id')->nullable()->index('fk_lesson_materials');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('materials');
	}

}

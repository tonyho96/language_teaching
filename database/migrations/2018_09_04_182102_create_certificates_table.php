<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCertificatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('certificates', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->dateTime('date_received')->nullable();
			$table->string('name', 100)->nullable();
			$table->string('institution', 100)->nullable()->comment('tổ chức giáo dục cấp phát chứng chỉ ');
			$table->string('description', 191)->nullable();
			$table->string('attachment', 191)->nullable()->comment('lưu file pdf, jpg, có thể đây là hình chụp của chứng chỉ');
			$table->integer('teacher_id')->nullable()->index('fk_certificates_users1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('certificates');
	}

}

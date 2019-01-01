<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLanguageTeachersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('language_teachers', function(Blueprint $table)
		{
			$table->foreign('language_id', 'fk_users_has_languages_languages1')->references('id')->on('languages')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('teacher_id', 'fk_users_has_languages_users1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('language_teachers', function(Blueprint $table)
		{
			$table->dropForeign('fk_users_has_languages_languages1');
			$table->dropForeign('fk_users_has_languages_users1');
		});
	}

}

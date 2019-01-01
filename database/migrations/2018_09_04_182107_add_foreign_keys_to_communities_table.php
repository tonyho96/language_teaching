<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCommunitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('communities', function(Blueprint $table)
		{
			$table->foreign('parent_id', 'fk_communities_communities1')->references('id')->on('communities')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('language_id', 'fk_communities_languages1')->references('id')->on('languages')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_communities_users1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('teacher_id', 'fk_communities_users2')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('communities', function(Blueprint $table)
		{
			$table->dropForeign('fk_communities_communities1');
			$table->dropForeign('fk_communities_languages1');
			$table->dropForeign('fk_communities_users1');
			$table->dropForeign('fk_communities_users2');
		});
	}

}

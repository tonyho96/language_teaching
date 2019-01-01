<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommunitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('communities', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('title', 100)->nullable();
			$table->text('content', 65535)->nullable();
			$table->timestamps();
			$table->integer('number_updated')->nullable();
			$table->integer('user_id')->nullable()->index('fk_communities_users1_idx');
			$table->integer('language_id')->nullable()->index('fk_communities_languages1_idx');
			$table->integer('parent_id')->nullable()->index('fk_communities_communities1_idx')->comment('id của community cha, tại vì trong 1 community có nhiều comment, thay vì tạo table mới thì ta chỉ việc sử dụng lại một số field cần thiết cho comment');
			$table->integer('teacher_id')->nullable()->index('fk_communities_users2_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('communities');
	}

}

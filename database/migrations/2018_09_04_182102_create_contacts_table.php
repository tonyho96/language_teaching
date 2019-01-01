<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacts', function(Blueprint $table)
		{
			$table->integer('user_id')->index('fk_users_has_users_users1_idx');
			$table->integer('friend_user_id')->index('fk_users_has_users_users2_idx');
			$table->integer('type')->nullable()->comment('Một giáo viên dạy nhiều học sinh, 1 học sinh cũng có thể học nhiều giáo viên, đây là quan hệ n:m (trên bảng users)
ở đây khi load list contact của một user thì where user_id=? 
+ type: để biết list contact đó là giáo viên hay học sinh
ví dụ: where user_id=5 and type=’student’ -> lấy danh sách contact của user có id = 5 và là học sinh của user_id=5');
			$table->primary(['user_id','friend_user_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contacts');
	}

}

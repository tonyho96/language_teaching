<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReviewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reviews', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->float('rating_point', 10, 0)->nullable();
			$table->string('content', 191)->nullable();
			$table->string('type', 191)->nullable()->comment('được hiển thị ở dạng thông thường (load all) hoặc được đưa lên 3 review tiêu biểu nhất');
			$table->dateTime('created_at')->nullable();
			$table->integer('transaction_id')->nullable()->index('fk_reviews_transaction_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reviews');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransactionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transactions', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('currency_code', 191)->nullable()->comment('Don vi tien te');
			$table->string('description', 191)->nullable();
			$table->integer('status')->nullable();
			$table->float('amount')->nullable()->comment('số tiền mà giáo viên được nhận, số tiền mà giáo viên rút, số tiền nạp vào');
			$table->integer('type')->nullable()->comment('lưu dạng varchar, ở đây có 3 type: Deposit (tiền gửi, ở đây hiểu là đang có kiểu giao dịch là nạp tiền vào tài khoản), Pay (tiền trả, ở đây hiểu đang có kiểu giao dịch là loại thanh toán cho giáo viên với lesson nào), Withdraw (rút tiền, hiểu ở đây là giao dịch rút tiền của giáo viên');
			$table->integer('user_id')->nullable()->index('fk_transactions_user_id');
			$table->integer('lesson_id')->nullable()->index('fk_transactions_lesson_id');
			$table->integer('teacher_id')->nullable()->index('fk_transactions_teacher_id');
			$table->timestamps();
			$table->dateTime('scheduled_date')->nullable();
			$table->dateTime('approved_date')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('transactions');
	}

}

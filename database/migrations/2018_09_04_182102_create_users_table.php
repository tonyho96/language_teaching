<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('email', 50)->nullable();
			$table->string('password', 191)->nullable();
			$table->string('full_name', 50)->nullable();
			$table->string('first_name', 50)->nullable();
			$table->string('last_name', 50)->nullable();
			$table->string('street_address', 191)->nullable();
			$table->string('language_level', 50)->nullable();
			$table->integer('role')->nullable();
			$table->integer('student_profile_status')->nullable()->comment('Công khai hoặc không công khai hồ sơ trên mục tìm kiếm');
			$table->string('preferred_im_chat', 191)->nullable()->comment('lưu thông tin công cụ dùng để chat, giảng dạy;');
			$table->string('phone_number', 20)->nullable();
			$table->text('about_user', 65535)->nullable();
			$table->text('about_user_as_teacher', 65535)->nullable()->comment('thông tin giới thiệu của user với tư cách là một giáo viên- trải nghiệm, động lực giảng dạy');
			$table->text('about_user_lesson', 65535)->nullable()->comment('các chủ đề bài học của giáo viên, phương pháp giảng dạy, sự mong muốn đối với sinh viên…');
			$table->string('url', 191)->nullable();
			$table->string('teacher_level', 191)->nullable()->comment('giáo viên chuyên nghiệp hoặc gia sư cộng đồng');
			$table->text('availability_status_description', 65535)->nullable()->comment('Theo như mô tả của giao diện: “The Availability Status Description is where you can give a quick update to your schedule or explain the type of students you are looking for. This status description will be displayed in your teacher profile and can be changed at any time from your Teacher Settings.”');
			$table->string('introduce_video_url', 191)->nullable()->comment('video giới thiệu của user(ở đây hiện tại giáo viên dùng)');
			$table->string('skype_id', 50)->nullable();
			$table->integer('language_id')->nullable();
			$table->integer('other_language_id')->nullable();
			$table->integer('subject_id')->nullable();
			$table->string('remember_token', 100)->nullable();
			$table->boolean('is_verified')->default(0);
			$table->float('current_balance')->nullable()->comment('Số dư hiện tại');
			$table->float('available_balance')->nullable()->comment('Số dư khả dụng');
			$table->string('currency_code', 191)->nullable()->comment('Đơn vị tiền tệ');
			$table->string('teacher_reason', 191)->nullable()->comment('Lí do trở thành giáo viên, do lúc input yêu cầu cả 3 field nên ta tạo 3 column');
			$table->string('teacher_question', 191)->nullable()->comment('Câu hỏi thắc mắc của giáo viên');
			$table->string('teacher_comment', 191)->nullable()->comment('nhận xét của giáo viên');
			$table->string('verify_token', 191);
			$table->string('time_zone', 191)->nullable()->comment('lưu time zone của user, dùng mặc định của php');
			$table->integer('country_code')->nullable()->index('fk_cites_countries_code');
			$table->integer('from_country_code')->nullable()->index('fk_cites_from_countries_code');
			$table->date('birth_day')->nullable();
			$table->string('gender', 45)->nullable();
			$table->string('street_from', 45)->nullable();
			$table->string('face_time', 45)->nullable();
			$table->string('google_hangout', 45)->nullable();
			$table->string('qq', 45)->nullable();
			$table->string('we_chat', 45)->nullable();
			$table->string('looking_for', 45)->nullable();
			$table->string('short_introduction', 45)->nullable();
			$table->string('long_introduction', 45)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}

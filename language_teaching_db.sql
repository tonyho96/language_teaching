-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 06, 2018 lúc 05:22 AM
-- Phiên bản máy phục vụ: 5.7.19
-- Phiên bản PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `language_teaching_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `certificates`
--

DROP TABLE IF EXISTS `certificates`;
CREATE TABLE IF NOT EXISTS `certificates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_received` datetime DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'tổ chức giáo dục cấp phát chứng chỉ ',
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'lưu file pdf, jpg, có thể đây là hình chụp của chứng chỉ',
  `teacher_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_certificates_users1_idx` (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `native_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `english_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cites_countries_code` (`country_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `communities`
--

DROP TABLE IF EXISTS `communities`;
CREATE TABLE IF NOT EXISTS `communities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `number_updated` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL COMMENT 'id của community cha, tại vì trong 1 community có nhiều comment, thay vì tạo table mới thì ta chỉ việc sử dụng lại một số field cần thiết cho comment',
  `teacher_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_communities_users1_idx` (`user_id`),
  KEY `fk_communities_languages1_idx` (`language_id`),
  KEY `fk_communities_communities1_idx` (`parent_id`),
  KEY `fk_communities_users2_idx` (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `user_id` int(11) NOT NULL,
  `friend_user_id` int(11) NOT NULL,
  `type` int(11) DEFAULT NULL COMMENT 'Một giáo viên dạy nhiều học sinh, 1 học sinh cũng có thể học nhiều giáo viên, đây là quan hệ n:m (trên bảng users)\nở đây khi load list contact của một user thì where user_id=? \n+ type: để biết list contact đó là giáo viên hay học sinh\nví dụ: where user_id=5 and type=’student’ -> lấy danh sách contact của user có id = 5 và là học sinh của user_id=5',
  PRIMARY KEY (`user_id`,`friend_user_id`),
  KEY `fk_users_has_users_users1_idx` (`user_id`),
  KEY `fk_users_has_users_users2_idx` (`friend_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `code` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `countries`
--

INSERT INTO `countries` (`code`, `name`) VALUES
(1, 'America'),
(2, 'Vietnam'),
(3, 'Argentina'),
(4, 'Colombia'),
(5, 'Mexico'),
(6, 'Spain'),
(7, 'Venezuela');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `educations`
--

DROP TABLE IF EXISTS `educations`;
CREATE TABLE IF NOT EXISTS `educations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_begin` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `school_or_institution` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'thông tin trường học hoặc tổ chức',
  `topic_of_study` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'chủ đề nghiên cứu',
  `degree` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'trình độ, ở đây là trình độ của education, không phải trình độ của ngôn ngữ đang giảng dạy',
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'lưu file PDF, JPG có thể là hình chụp bằng cấp',
  `teacher_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_educations_users1_idx` (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `languages`
--

DROP TABLE IF EXISTS `languages`;
CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_popular` int(11) DEFAULT NULL COMMENT 'Ngôn ngữ phổ biến hay không',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `languages`
--

INSERT INTO `languages` (`id`, `name`, `is_popular`) VALUES
(1, 'English', 1),
(2, 'Vietnamese', 1),
(3, 'Japanese', 0),
(4, 'Chinese', 0),
(5, 'German', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `language_teachers`
--

DROP TABLE IF EXISTS `language_teachers`;
CREATE TABLE IF NOT EXISTS `language_teachers` (
  `teacher_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `proficiency` double(8,2) DEFAULT NULL COMMENT 'Độ thành thạo của ngôn ngữ',
  PRIMARY KEY (`teacher_id`,`language_id`),
  KEY `fk_users_has_languages_users1_idx` (`teacher_id`),
  KEY `fk_users_has_languages_languages1_idx` (`language_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lessons`
--

DROP TABLE IF EXISTS `lessons`;
CREATE TABLE IF NOT EXISTS `lessons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price_per_hour` double DEFAULT NULL,
  `type` int(11) DEFAULT NULL COMMENT 'loại của lesson, ở đây có 3 loại: professional lessons, informal tutoring, trial lesson',
  `teacher_id` int(11) DEFAULT NULL,
  `money_id` int(11) DEFAULT NULL,
  `currency_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Đơn vị tiền tệ',
  PRIMARY KEY (`id`),
  KEY `fk_lessons_users1_idx` (`teacher_id`),
  KEY `fk_lessons_moneys1_idx` (`money_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `materials`
--

DROP TABLE IF EXISTS `materials`;
CREATE TABLE IF NOT EXISTS `materials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Lưu tên tài liệu',
  `url` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Lưu tên của file tài liệu để truy cập',
  `lesson_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_lesson_materials` (`lesson_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `user_id_send` int(11) DEFAULT NULL,
  `user_id_receive` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_messages_users1_idx` (`user_id_send`),
  KEY `fk_messages_users2_idx` (`user_id_receive`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_09_04_182102_create_certificates_table', 1),
(2, '2018_09_04_182102_create_cities_table', 1),
(3, '2018_09_04_182102_create_communities_table', 1),
(4, '2018_09_04_182102_create_contacts_table', 1),
(5, '2018_09_04_182102_create_countries_table', 1),
(6, '2018_09_04_182102_create_educations_table', 1),
(7, '2018_09_04_182102_create_language_teachers_table', 1),
(8, '2018_09_04_182102_create_languages_table', 1),
(9, '2018_09_04_182102_create_lessons_table', 1),
(10, '2018_09_04_182102_create_materials_table', 1),
(11, '2018_09_04_182102_create_messages_table', 1),
(12, '2018_09_04_182102_create_packages_table', 1),
(13, '2018_09_04_182102_create_password_resets_table', 1),
(14, '2018_09_04_182102_create_reviews_table', 1),
(15, '2018_09_04_182102_create_subjects_table', 1),
(16, '2018_09_04_182102_create_teacher_calendars_table', 1),
(17, '2018_09_04_182102_create_transactions_table', 1),
(18, '2018_09_04_182102_create_users_table', 1),
(19, '2018_09_04_182102_create_work_experiences_table', 1),
(20, '2018_09_04_182107_add_foreign_keys_to_certificates_table', 1),
(21, '2018_09_04_182107_add_foreign_keys_to_cities_table', 1),
(22, '2018_09_04_182107_add_foreign_keys_to_communities_table', 1),
(23, '2018_09_04_182107_add_foreign_keys_to_contacts_table', 1),
(24, '2018_09_04_182107_add_foreign_keys_to_educations_table', 1),
(25, '2018_09_04_182107_add_foreign_keys_to_language_teachers_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `packages`
--

DROP TABLE IF EXISTS `packages`;
CREATE TABLE IF NOT EXISTS `packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `expiration_date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT 'có 3 trạng thái: request, waiting, completed',
  `lesson_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_packages_lessons1_idx` (`lesson_id`),
  KEY `fk_packages_users1_idx` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rating_point` double DEFAULT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'được hiển thị ở dạng thông thường (load all) hoặc được đưa lên 3 review tiêu biểu nhất',
  `created_at` datetime DEFAULT NULL,
  `transaction_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_reviews_transaction_id` (`transaction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `description`) VALUES
(1, 'Beginners', NULL),
(2, 'Children', NULL),
(3, 'Teenagers', NULL),
(4, 'Vocabulary', NULL),
(5, 'Preparation', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teacher_calendars`
--

DROP TABLE IF EXISTS `teacher_calendars`;
CREATE TABLE IF NOT EXISTS `teacher_calendars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time_begin` datetime DEFAULT NULL,
  `time_end` datetime DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `weekday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ngày dạy, ở đây là những ngày trong tuần mà giáo viên đó có thể dạy học được, chẳng hạn thứ 2, 5, 6, chủ nhật -> Mỗi dòng là data chứa ngày thứ mấy trong tuần, thời gian bắt đầu và kết thúc của ngày đó, lưu dạng int (vì 1 tuần có 7 ngày, mỗi ngày ngày dạy giờ có thể khác nhau và 1 ngày có thể dạy nhiều khoảng thời gian',
  PRIMARY KEY (`id`),
  KEY `fk_teacher_calendars_users1_idx` (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `currency_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Don vi tien te',
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `amount` double(8,2) DEFAULT NULL COMMENT 'số tiền mà giáo viên được nhận, số tiền mà giáo viên rút, số tiền nạp vào',
  `type` int(11) DEFAULT NULL COMMENT 'lưu dạng varchar, ở đây có 3 type: Deposit (tiền gửi, ở đây hiểu là đang có kiểu giao dịch là nạp tiền vào tài khoản), Pay (tiền trả, ở đây hiểu đang có kiểu giao dịch là loại thanh toán cho giáo viên với lesson nào), Withdraw (rút tiền, hiểu ở đây là giao dịch rút tiền của giáo viên',
  `user_id` int(11) DEFAULT NULL,
  `lesson_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `scheduled_date` datetime DEFAULT NULL,
  `approved_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_transactions_user_id` (`user_id`),
  KEY `fk_transactions_lesson_id` (`lesson_id`),
  KEY `fk_transactions_teacher_id` (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language_level` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `student_profile_status` int(11) DEFAULT NULL COMMENT 'Công khai hoặc không công khai hồ sơ trên mục tìm kiếm',
  `preferred_im_chat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'lưu thông tin công cụ dùng để chat, giảng dạy;',
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_user` text COLLATE utf8mb4_unicode_ci,
  `about_user_as_teacher` text COLLATE utf8mb4_unicode_ci COMMENT 'thông tin giới thiệu của user với tư cách là một giáo viên- trải nghiệm, động lực giảng dạy',
  `about_user_lesson` text COLLATE utf8mb4_unicode_ci COMMENT 'các chủ đề bài học của giáo viên, phương pháp giảng dạy, sự mong muốn đối với sinh viên…',
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teacher_level` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'giáo viên chuyên nghiệp hoặc gia sư cộng đồng',
  `availability_status_description` text COLLATE utf8mb4_unicode_ci COMMENT 'Theo như mô tả của giao diện: “The Availability Status Description is where you can give a quick update to your schedule or explain the type of students you are looking for. This status description will be displayed in your teacher profile and can be changed at any time from your Teacher Settings.”',
  `introduce_video_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'video giới thiệu của user(ở đây hiện tại giáo viên dùng)',
  `skype_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `other_language_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT '0',
  `current_balance` double(8,2) DEFAULT NULL COMMENT 'Số dư hiện tại',
  `available_balance` double(8,2) DEFAULT NULL COMMENT 'Số dư khả dụng',
  `currency_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Đơn vị tiền tệ',
  `teacher_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Lí do trở thành giáo viên, do lúc input yêu cầu cả 3 field nên ta tạo 3 column',
  `teacher_question` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Câu hỏi thắc mắc của giáo viên',
  `teacher_comment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'nhận xét của giáo viên',
  `verify_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_zone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'lưu time zone của user, dùng mặc định của php',
  `country_code` int(11) DEFAULT NULL,
  `from_country_code` int(11) DEFAULT NULL,
  `birth_day` date DEFAULT NULL,
  `gender` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_from` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `face_time` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_hangout` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qq` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `we_chat` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `looking_for` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_introduction` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_introduction` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cites_countries_code` (`country_code`),
  KEY `fk_cites_from_countries_code` (`from_country_code`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `full_name`, `first_name`, `last_name`, `street_address`, `language_level`, `role`, `student_profile_status`, `preferred_im_chat`, `phone_number`, `about_user`, `about_user_as_teacher`, `about_user_lesson`, `url`, `teacher_level`, `availability_status_description`, `introduce_video_url`, `skype_id`, `language_id`, `other_language_id`, `subject_id`, `remember_token`, `is_verified`, `current_balance`, `available_balance`, `currency_code`, `teacher_reason`, `teacher_question`, `teacher_comment`, `verify_token`, `time_zone`, `country_code`, `from_country_code`, `birth_day`, `gender`, `street_from`, `face_time`, `google_hangout`, `qq`, `we_chat`, `looking_for`, `short_introduction`, `long_introduction`) VALUES
(1, 'test1@gmail.com', '$2y$10$UMsr01CGr7PqedTE9YGsl.zYIaUDXca2VJHjAYAajEzsLobcAYgVG', 'test', NULL, NULL, NULL, '1', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, NULL, 'dizP6XCPwM9pdWyPLYSlybBbKOB1FIImCc4Wd6urfRSoq98vhJhRxN2vcBeQ', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'hXH6f7EH8bqLDhmFqyA9xK4vbLuVNFkFTnfOigNN', 'Asia/Ho_Chi_Minh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'test2@mailinator.com', '$2y$10$2tzS7xMw6dr1YV94cBcDruAW5ChJwywFRsDbrFzUB84FuTNSD3RiG', 'test2', NULL, NULL, NULL, '0', 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, 'GS8anOsadMi9FDmgluRE1oVxYx4EmlazdYGpk6u4CZHGeM3u6LWfYazMj3Qf', 1, NULL, NULL, NULL, NULL, NULL, NULL, 'Egjpr9ZjWEVbEo9Aq37lUepUJImDLov1z0ib3xnL', 'Asia/Ho_Chi_Minh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `work_experiences`
--

DROP TABLE IF EXISTS `work_experiences`;
CREATE TABLE IF NOT EXISTS `work_experiences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_begin` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `company` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Vị trí, chức vụ làm việc trong công ty',
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_work_experiences_districts1_idx` (`district_id`),
  KEY `fk_work_experiences_users1_idx` (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `certificates`
--
ALTER TABLE `certificates`
  ADD CONSTRAINT `fk_certificates_users1` FOREIGN KEY (`teacher_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `fk_cities_countries_code` FOREIGN KEY (`country_code`) REFERENCES `countries` (`code`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `communities`
--
ALTER TABLE `communities`
  ADD CONSTRAINT `fk_communities_communities1` FOREIGN KEY (`parent_id`) REFERENCES `communities` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_communities_languages1` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_communities_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_communities_users2` FOREIGN KEY (`teacher_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `fk_users_has_users_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_has_users_users2` FOREIGN KEY (`friend_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `educations`
--
ALTER TABLE `educations`
  ADD CONSTRAINT `fk_educations_users1` FOREIGN KEY (`teacher_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `language_teachers`
--
ALTER TABLE `language_teachers`
  ADD CONSTRAINT `fk_users_has_languages_languages1` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_has_languages_users1` FOREIGN KEY (`teacher_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

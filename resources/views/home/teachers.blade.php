@extends('layouts.frontend')
@section('content')

    <div class="">
		<div class="visible-block" style="background-color: #fff">
            <div>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                @if (session('warning'))
                    <div class="alert alert-warning">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
			<div class="schedule" style="padding-top: 30px;">
				<div class="language-to-learn">
					<select class="select-picker schedule-control" style="color:  #777;">
						<option>Language to learn</option>
						<option>English</option>
						<option>Vietnamese</option>
					</select>
                </div>
                <div class="language-to-learn-icon hidden-sm hidden-md hidden-lg">
                    <img width="25" height="25" src="/front/images/teachers/icon-filters.svg" class="filters_tablet_icon">
                </div>
				<div class="hidden-xs">
					<input name="auto" type="text" class="form-control availability" value="Availability" style="border-left: none !important;"/>
				</div>
			</div>
			<div class="filter_item filters_availability_selection filter_item_open" style="display:  none;">
				<ul class="filters_availability_tabs">
					<li switch-availability-tab="time" index="0"
						class="filters_availability_tab availability_tab_time_title_js filters_availability_tab_select">Days
						and times
					</li>
					<li switch-availability-tab="now" index="1"
						class="filters_availability_tab availability_tab_now_title_js">Now
					</li>
				</ul>
				<div class="availability_tab">
					<div class="filters_availability_options"><p>Time of Day</p>
						<ul class="availability_time">
							<li class="availability_time_morning">
								<label>
									<input hidden="" type="checkbox" class="ng-pristine ng-untouched ng-valid"> 06 - 09
								</label>
							</li>
							<li class="availability_time_morning">
								<label>
									<input hidden="" type="checkbox" class="ng-pristine ng-untouched ng-valid"> 09 - 12
								</label>
							</li>
							<li class="availability_time_afternoon">
								<label>
									<input hidden="" type="checkbox" class="ng-pristine ng-untouched ng-valid"> 12 - 15
								</label>
							</li>
							<li class="availability_time_afternoon availability_time_item_last">
								<label>
									<input hidden="" type="checkbox" class="ng-pristine ng-untouched ng-valid"> 15 - 18
								</label>
							</li>
							<li class="availability_time_evening">
								<label>
									<input hidden="" type="checkbox" class="ng-pristine ng-untouched ng-valid"> 18 - 21
								</label>
							</li>
							<li class="availability_time_evening">
								<label>
									<input hidden="" type="checkbox" class="ng-pristine ng-untouched ng-valid"> 21 - 24
								</label>
							</li>
							<li class="availability_time_night">
								<label>
									<input hidden="" type="checkbox" class="ng-pristine ng-untouched ng-valid"> 00 - 03
								</label>
							</li>
							<li class="availability_time_night availability_time_item_last">
								<label>
									<input hidden="" type="checkbox" class="ng-pristine ng-untouched ng-valid"> 03 - 06
								</label>
							</li>
						</ul>
						<p>Days of the Week</p>
						<ul class="availability_days">
							<li class="availability_week_day">
								<label>
									<input type="checkbox" hidden="" class="ng-pristine ng-untouched ng-valid"> Mon
								</label>
							</li>
							<li class="availability_week_day">
								<label>
									<input type="checkbox" hidden="" class="ng-pristine ng-untouched ng-valid"> Tue
								</label>
							</li>
							<li class="availability_week_day">
								<label>
									<input type="checkbox" hidden="" class="ng-pristine ng-untouched ng-valid"> Wed
								</label>
							</li>
							<li class="availability_week_day">
								<label>
									<input type="checkbox" hidden="" class="ng-pristine ng-untouched ng-valid"> Thu
								</label>
							</li>
							<li class="availability_week_day">
								<label>
									<input type="checkbox" hidden="" class="ng-pristine ng-untouched ng-valid"> Fri
								</label>
							</li>
							<li class="availability_week_day">
								<label>
									<input type="checkbox" hidden="" class="ng-pristine ng-untouched ng-valid"> Sat
								</label>
							</li>
							<li class="availability_week_day availability_week_day_last">
								<label>
									<input type="checkbox" hidden="" class="ng-pristine ng-untouched ng-valid"> Sun
								</label>
							</li>
						</ul>
					</div>
				</div>

				<div class="availability_tab availability_tab_now_js availability_now">
					<label class="availability_switch availability_now_switch">
						<input type="checkbox" class="availability_input ng-pristine ng-untouched ng-valid">
						<span class="availability_slider availability_round">
								<span class="availability_round_btn">
								<i class="fa fa-flash availability_round_icon"></i>
								</span></span>
					</label>
					<h4>Instant Tutoring</h4>
					<p>You will be able to see and select just the teachers available to have a lesson at the moment.</p>
				</div>
            </div>
            <div id="teacher-nav-menu" class="">
                <div class="row filters-container" style="margin-left:  0px;margin-right:  0px;">
                    <div class="container">
                        <div class="col-md-2 col-sm-2 hidden-xs">
                            <div class="filter_option">
                                <img class="filter_options" width="30" height="30" src="/front/images/teachers/icon-type.svg">
                                <p class="filter_option_title" style="border-bottom:  none !important;">Teacher type</p>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2 hidden-xs">
                            <div class="filter_option">
                                <img class="filter_options" width="30" height="30" src="/front/images/teachers/icon-from.svg">
                                <p class="filter_option_title" style="border-bottom:  none !important;">From</p>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2 hidden-xs">
                            <div class="filter_option">
                                <img class="filter_options" width="30" height="30" src="/front/images/teachers/icon-rate.svg">
                                <p class="filter_option_title" style="border-bottom:  none !important;">Hour rate</p>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2 hidden-xs">
                            <div class="filter_option">
                                <img class="filter_options" width="30" height="30" src="/front/images/teachers/icon-speaks.svg">
                                <p class="filter_option_title" style="border-bottom:  none !important;">Teacher speaks</p>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2 hidden-xs">
                            <div class="filter_option">
                                <img class="filter_options" width="30" height="30"
                                    src="/front/images/teachers/icon-native-advanced.svg">
                                <p class="filter_option_title" style="border-bottom:  none !important;">Advanced/Native</p>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2 hidden-xs">
                            <div class="filter_option">
                                <img class="filter_options" width="30" height="30" src="/front/images/teachers/icon-skills.svg">
                                <p class="filter_option_title" style="border-bottom:  none !important;">Skills</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
        <div class="main-content col-md-12">
            <div class="container">
                <div class="teacher-size col-md-9 teacher-xs">
                    <p style="margin-bottom:  0px !important;">We found 4516 teachers</p>
                </div>

                <div class="left-menu col-md-9 teacher-xs">
                    <!-- Start Teacher list -->
                    @if(\Auth::check())
                    <div id="teacher-list-loggin" class="italki-teacher-card teacher-after-login">
                        <div class="teacher-card-container">
                            <div class="teacher-card-left">
                                <img class="visible-lg-block visible-sm-block visible-md-block teacher-card-teacher-type" src="/front/images/community-tutor.svg"> 
                                <img class="visible-xs-block teacher-card-teacher-type" src="/front/images/community-tutor-mobile.svg">
                                <div class="teacher-card-avatar">
                                    <img src="https://imagesavatar-static01.italki.com/1T051478140_Avatar.jpg">
                                    <div class="teacher-card-rating">
                                        <div class="teacher-card-rating-stars">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <p class="hidden-xs teacher-lessons">58 Lessons</p>
                                        <p class="visible-xs-block teacher-card-mobile-lessons">
                                            <span>58</span><br>Lessons
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card-content">
                                    <h1 class="teacher-card-name">
                                        <img src="/front/images/vn.svg">Helen Au</h1>
                                        <div class="teacher-card-teaches">
                                            <h1 class="teacher-card-title">Teaches</h1>
                                            <div class="teacher-card-languages">
                                                <ul class="teacher-card-teaches-list">
                                                    <li class="">
                                                        <span>Vietnamese</span>
                                                        <div class="teaher-card-language-level hidden-xs">
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h1 class="hidden-xs teacher-card-title">Also speaks</h1>
                                            <div class="hidden-xs teacher-card-languages">
                                                <ul class="teacher-card-teaches-list">
                                                    <li class="">
                                                        <span>Chinese (Cantonese)</span>
                                                        <div class="teaher-card-language-level">
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                        </div>
                                                    </li>
                                                    <li class=""><span>Chinese (Mandarin)</span>
                                                    <div class="teaher-card-language-level">
                                                        <span class="teacher-card-gra-language-bar teacher-card-low-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar teacher-card-low-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar teacher-card-low-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar" ></span>
                                                    </div>
                                                </li>
                                                <li class="">
                                                    <span>English</span>
                                                    <div class="teaher-card-language-level">
                                                        <span class="teacher-card-gra-language-bar teacher-card-low-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar teacher-card-low-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar teacher-card-low-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar" ></span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="teacher-card-teacher-price">
                                            <div class="teacher-card-hourly-rate">
                                                <h1 class="teacher-card-title">Hourly rate from</h1>
                                                    <span class="text-bold" style="font-size: 16px;">$ 8.50</span>&nbsp;
                                                    <span class="teacher-car -currency">VND 196458.48</span>
                                            </div>
                                            <div class="teacher-card-minutes-rate">
                                                <h1 class="teacher-card-title">30 min trial</h1>
                                                    <span class="text-bold" style="font-size: 16px;">5.00</span>&nbsp;
                                                    <span class="teacher-card-currency">VND 115563.81</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="teacher-card-favorite-teacher" onclick="addTeacherToFavorites('img3')">
                                        <img src="/front/images/heart-empty.svg" id="img3">
                                    </div>
                                </div>
                            </div>
                            <div class="teacher-card-right">
                                <div class="col-md-12">
                                    <ul class="list-avai-video-intro col-md-12">
                                        <li id="avai-li-menu1" class="avai-video-intro avai-video-intro-selelected" onclick="onClickTeacherCardMenu('Availability', '1')">
                                            <span>Availability</span>
                                        </li>
                                        <li id="videos-li-menu1" class="avai-video-intro" onclick="onClickTeacherCardMenu('Video', '1')">
                                            <span>Video</span>
                                        </li>
                                        <li id="intro-li-menu1" class="avai-video-intro" onclick="onClickTeacherCardMenu('Intro', '1')">
                                            <span>Intro</span>
                                        </li>
                                    </ul>   
                                </div>
                                <div id="availability-content1">
                                    <div class="teacher-card-calendar col-md-12">
                                        <div class="teacher-card-calendar-header">
                                            <span class="teacher-card-time-header">/</span>
                                            <span class="teacher-card-day-header">Sat</span>
                                            <span class="teacher-card-day-header">Sun</span>
                                            <span class="teacher-card-day-header">Mon</span>
                                            <span class="teacher-card-day-header">Tue</span>
                                            <span class="teacher-card-day-header">Wed</span>
                                            <span class="teacher-card-day-header">Thu</span>
                                            <span class="teacher-card-day-header">Fri</span>
                                        </div>
                                        <div class="teacher-card-calendar-body">
                                            <div class="teacher-card-time-col">
                                                <span class="teacher-card-hours">00 - 06</span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-no-availability"></span>
                                                </span>
                                            </div>
                                            <div class="teacher-card-time-col">
                                                <span class="teacher-card-hours">06 - 12</span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="4 hours" class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-no-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="4 hours" class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="4 hours" class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="4 hours" class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="4 hours" class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="4 hours"  class="teacher-card-high-availability"></span>
                                                </span>
                                            </div>
                                            <div class="teacher-card-time-col">
                                                <span class="teacher-card-hours">12 - 18</span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="2 hours" class="teacher-card-low-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-no-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="6 hours"  class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="6 hours"  class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="6 hours"  class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="6 hours"  class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="6 hours"  class="teacher-card-high-availability"></span>
                                                </span>
                                            </div>
                                            <div class="teacher-card-time-col">
                                                <span class="teacher-card-hours">18 - 00</span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-no-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-no-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="2 hours"  class="teacher-card-low-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="2 hours"  class="teacher-card-low-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="2 hours"  class="teacher-card-low-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="2 hours"  class="teacher-card-low-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="1 hours"  class="teacher-card-low-availability"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="teacher-card-calendar-hint">Based on your time zone</p>
                                </div>
                                <div id="video-content1"  style="display: none;">
                                    <div class="teacher-card-video">
                                        <div class="">
                                            <video controls="" class="teacher-card-video-player" id="videoPoster" src="https://v.italki.cn/xitalki10009921.mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                                <div id="intro-content1"  style="display: none;">
                 
                                    <div class="teacher-card-intro">
                                        <p>Hi, my name is Helen. My major in University was Tourism Management. 
                                            I love traveling to different places, that's why I chose this major. 
                                            I'm really interested in talking and sharing all my knowledge to everyone. 
                                            I hope you guys will enjoy it!I can speak Vietnamese and Cantones...</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="teacher-card-container">
                            <div class="teacher-card-left">
                                <img class="visible-lg-block visible-sm-block visible-md-block teacher-card-teacher-type" src="/front/images/community-tutor.svg"> 
                                <img class="visible-xs-block teacher-card-teacher-type" src="/front/images/community-tutor-mobile.svg">
                                <div class="teacher-card-avatar">
                                    <img src="https://imagesavatar-static01.italki.com/1T051478140_Avatar.jpg">
                                    <div class="teacher-card-rating">
                                        <div class="teacher-card-rating-stars">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <p class="hidden-xs teacher-lessons">58 Lessons</p>
                                        <p class="visible-xs-block teacher-card-mobile-lessons">
                                            <span>58</span><br>Lessons
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card-content">
                                    <h1 class="teacher-card-name">
                                        <img src="/front/images/vn.svg">Helen Au</h1>
                                        <div class="teacher-card-teaches">
                                            <h1 class="teacher-card-title">Teaches</h1>
                                            <div class="teacher-card-languages">
                                                <ul class="teacher-card-teaches-list">
                                                    <li class="">
                                                        <span>Vietnamese</span>
                                                        <div class="teaher-card-language-level hidden-xs">
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h1 class="hidden-xs teacher-card-title">Also speaks</h1>
                                            <div class="hidden-xs teacher-card-languages">
                                                <ul class="teacher-card-teaches-list">
                                                    <li class="">
                                                        <span>Chinese (Cantonese)</span>
                                                        <div class="teaher-card-language-level">
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                        </div>
                                                    </li>
                                                    <li class=""><span>Chinese (Mandarin)</span>
                                                    <div class="teaher-card-language-level">
                                                        <span class="teacher-card-gra-language-bar teacher-card-low-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar teacher-card-low-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar teacher-card-low-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar" ></span>
                                                    </div>
                                                </li>
                                                <li class="">
                                                    <span>English</span>
                                                    <div class="teaher-card-language-level">
                                                        <span class="teacher-card-gra-language-bar teacher-card-low-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar teacher-card-low-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar teacher-card-low-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar" ></span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="teacher-card-teacher-price">
                                            <div class="teacher-card-hourly-rate">
                                                <h1 class="teacher-card-title">Hourly rate from</h1>
                                                    <span class="text-bold" style="font-size: 16px;">$ 8.50</span>&nbsp;
                                                    <span class="teacher-car -currency">VND 196458.48</span>
                                            </div>
                                            <div class="teacher-card-minutes-rate">
                                                <h1 class="teacher-card-title">30 min trial</h1>
                                                    <span class="text-bold" style="font-size: 16px;">5.00</span>&nbsp;
                                                    <span class="teacher-card-currency">VND 115563.81</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="teacher-card-favorite-teacher" onclick="addTeacherToFavorites('img4')">
                                        <img src="/front/images/heart-empty.svg" id="img4">
                                    </div>
                                </div>
                            </div>
                            <div class="teacher-card-right">
                                <div class="col-md-12">
                                    <ul class="list-avai-video-intro col-md-12">
                                        <li id="avai-li-menu2" class="avai-video-intro avai-video-intro-selelected" onclick="onClickTeacherCardMenu('Availability', '2')">
                                            <span>Availability</span>
                                        </li>
                                        <li id="videos-li-menu2" class="avai-video-intro" onclick="onClickTeacherCardMenu('Video', '2')">
                                            <span>Video</span>
                                        </li>
                                        <li id="intro-li-menu2" class="avai-video-intro" onclick="onClickTeacherCardMenu('Intro', '2')">
                                            <span>Intro</span>
                                        </li>
                                    </ul>   
                                </div>
                                <div id="availability-content2">
                                    <div class="teacher-card-calendar col-md-12">
                                        <div class="teacher-card-calendar-header">
                                            <span class="teacher-card-time-header">/</span>
                                            <span class="teacher-card-day-header">Sat</span>
                                            <span class="teacher-card-day-header">Sun</span>
                                            <span class="teacher-card-day-header">Mon</span>
                                            <span class="teacher-card-day-header">Tue</span>
                                            <span class="teacher-card-day-header">Wed</span>
                                            <span class="teacher-card-day-header">Thu</span>
                                            <span class="teacher-card-day-header">Fri</span>
                                        </div>
                                        <div class="teacher-card-calendar-body">
                                            <div class="teacher-card-time-col">
                                                <span class="teacher-card-hours">00 - 06</span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-no-availability"></span>
                                                </span>
                                            </div>
                                            <div class="teacher-card-time-col">
                                                <span class="teacher-card-hours">06 - 12</span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="4 hours" class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-no-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="4 hours" class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="4 hours" class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="4 hours" class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="4 hours" class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="4 hours"  class="teacher-card-high-availability"></span>
                                                </span>
                                            </div>
                                            <div class="teacher-card-time-col">
                                                <span class="teacher-card-hours">12 - 18</span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="2 hours" class="teacher-card-low-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-no-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="6 hours"  class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="6 hours"  class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="6 hours"  class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="6 hours"  class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="6 hours"  class="teacher-card-high-availability"></span>
                                                </span>
                                            </div>
                                            <div class="teacher-card-time-col">
                                                <span class="teacher-card-hours">18 - 00</span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-no-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-no-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="2 hours"  class="teacher-card-low-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="2 hours"  class="teacher-card-low-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="2 hours"  class="teacher-card-low-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="2 hours"  class="teacher-card-low-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="1 hours"  class="teacher-card-low-availability"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="teacher-card-calendar-hint">Based on your time zone</p>
                                </div>
                                <div id="video-content2"  style="display: none;">
                                    <div class="teacher-card-video">
                                        <div class="">
                                            <video controls="" class="teacher-card-video-player" id="videoPoster" src="https://v.italki.cn/xitalki10009921.mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                                <div id="intro-content2"  style="display: none;">
                 
                                    <div class="teacher-card-intro">
                                        <p>Hi, my name is Helen. My major in University was Tourism Management. 
                                            I love traveling to different places, that's why I chose this major. 
                                            I'm really interested in talking and sharing all my knowledge to everyone. 
                                            I hope you guys will enjoy it!I can speak Vietnamese and Cantones...</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="teacher-card-container">
                            <div class="teacher-card-left">
                                <img class="visible-lg-block visible-sm-block visible-md-block teacher-card-teacher-type" src="/front/images/community-tutor.svg"> 
                                <img class="visible-xs-block teacher-card-teacher-type" src="/front/images/community-tutor-mobile.svg">
                                <div class="teacher-card-avatar">
                                    <img src="https://imagesavatar-static01.italki.com/1T051478140_Avatar.jpg">
                                    <div class="teacher-card-rating">
                                        <div class="teacher-card-rating-stars">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <p class="hidden-xs teacher-lessons">58 Lessons</p>
                                        <p class="visible-xs-block teacher-card-mobile-lessons">
                                            <span>58</span><br>Lessons
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card-content">
                                    <h1 class="teacher-card-name">
                                        <img src="/front/images/vn.svg">Helen Au</h1>
                                        <div class="teacher-card-teaches">
                                            <h1 class="teacher-card-title">Teaches</h1>
                                            <div class="teacher-card-languages">
                                                <ul class="teacher-card-teaches-list">
                                                    <li class="">
                                                        <span>Vietnamese</span>
                                                        <div class="teaher-card-language-level hidden-xs">
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h1 class="hidden-xs teacher-card-title">Also speaks</h1>
                                            <div class="hidden-xs teacher-card-languages">
                                                <ul class="teacher-card-teaches-list">
                                                    <li class="">
                                                        <span>Chinese (Cantonese)</span>
                                                        <div class="teaher-card-language-level">
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                        </div>
                                                    </li>
                                                    <li class=""><span>Chinese (Mandarin)</span>
                                                    <div class="teaher-card-language-level">
                                                        <span class="teacher-card-gra-language-bar teacher-card-low-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar teacher-card-low-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar teacher-card-low-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar" ></span>
                                                    </div>
                                                </li>
                                                <li class="">
                                                    <span>English</span>
                                                    <div class="teaher-card-language-level">
                                                        <span class="teacher-card-gra-language-bar teacher-card-low-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar teacher-card-low-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar teacher-card-low-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar" ></span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="teacher-card-teacher-price">
                                            <div class="teacher-card-hourly-rate">
                                                <h1 class="teacher-card-title">Hourly rate from</h1>
                                                    <span class="text-bold" style="font-size: 16px;">$ 8.50</span>&nbsp;
                                                    <span class="teacher-car -currency">VND 196458.48</span>
                                            </div>
                                            <div class="teacher-card-minutes-rate">
                                                <h1 class="teacher-card-title">30 min trial</h1>
                                                    <span class="text-bold" style="font-size: 16px;">5.00</span>&nbsp;
                                                    <span class="teacher-card-currency">VND 115563.81</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="teacher-card-favorite-teacher" onclick="addTeacherToFavorites('img1')">
                                        <img src="/front/images/heart-empty.svg" id="img1">
                                    </div>
                                </div>
                            </div>
                            <div class="teacher-card-right">
                                <div class="col-md-12">
                                    <ul class="list-avai-video-intro col-md-12">
                                        <li id="avai-li-menu3" class="avai-video-intro avai-video-intro-selelected" onclick="onClickTeacherCardMenu('Availability', '3')">
                                            <span>Availability</span>
                                        </li>
                                        <li id="videos-li-menu3" class="avai-video-intro" onclick="onClickTeacherCardMenu('Video', '3')">
                                            <span>Video</span>
                                        </li>
                                        <li id="intro-li-menu3" class="avai-video-intro" onclick="onClickTeacherCardMenu('Intro', '3')">
                                            <span>Intro</span>
                                        </li>
                                    </ul>   
                                </div>
                                <div id="availability-content3">
                                    <div class="teacher-card-calendar col-md-12">
                                        <div class="teacher-card-calendar-header">
                                            <span class="teacher-card-time-header">/</span>
                                            <span class="teacher-card-day-header">Sat</span>
                                            <span class="teacher-card-day-header">Sun</span>
                                            <span class="teacher-card-day-header">Mon</span>
                                            <span class="teacher-card-day-header">Tue</span>
                                            <span class="teacher-card-day-header">Wed</span>
                                            <span class="teacher-card-day-header">Thu</span>
                                            <span class="teacher-card-day-header">Fri</span>
                                        </div>
                                        <div class="teacher-card-calendar-body">
                                            <div class="teacher-card-time-col">
                                                <span class="teacher-card-hours">00 - 06</span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-no-availability"></span>
                                                </span>
                                            </div>
                                            <div class="teacher-card-time-col">
                                                <span class="teacher-card-hours">06 - 12</span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="4 hours" class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-no-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="4 hours" class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="4 hours" class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="4 hours" class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="4 hours" class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="4 hours"  class="teacher-card-high-availability"></span>
                                                </span>
                                            </div>
                                            <div class="teacher-card-time-col">
                                                <span class="teacher-card-hours">12 - 18</span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="2 hours" class="teacher-card-low-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-no-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="6 hours"  class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="6 hours"  class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="6 hours"  class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="6 hours"  class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="6 hours"  class="teacher-card-high-availability"></span>
                                                </span>
                                            </div>
                                            <div class="teacher-card-time-col">
                                                <span class="teacher-card-hours">18 - 00</span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-no-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-no-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="2 hours"  class="teacher-card-low-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="2 hours"  class="teacher-card-low-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="2 hours"  class="teacher-card-low-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="2 hours"  class="teacher-card-low-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="1 hours"  class="teacher-card-low-availability"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="teacher-card-calendar-hint">Based on your time zone</p>
                                </div>
                                <div id="video-content3"  style="display: none;">
                                    <div class="teacher-card-video">
                                        <div class="">
                                            <video controls="" class="teacher-card-video-player" id="videoPoster" src="https://v.italki.cn/xitalki10009921.mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                                <div id="intro-content3"  style="display: none;">
                 
                                    <div class="teacher-card-intro">
                                        <p>Hi, my name is Helen. My major in University was Tourism Management. 
                                            I love traveling to different places, that's why I chose this major. 
                                            I'm really interested in talking and sharing all my knowledge to everyone. 
                                            I hope you guys will enjoy it!I can speak Vietnamese and Cantones...</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="teacher-card-container">
                            <div class="teacher-card-left">
                                <img class="visible-lg-block visible-sm-block visible-md-block teacher-card-teacher-type" src="/front/images/community-tutor.svg"> 
                                <img class="visible-xs-block teacher-card-teacher-type" src="/front/images/community-tutor-mobile.svg">
                                <div class="teacher-card-avatar">
                                    <img src="https://imagesavatar-static01.italki.com/1T051478140_Avatar.jpg">
                                    <div class="teacher-card-rating">
                                        <div class="teacher-card-rating-stars">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <p class="hidden-xs teacher-lessons">58 Lessons</p>
                                        <p class="visible-xs-block teacher-card-mobile-lessons">
                                            <span>58</span><br>Lessons
                                        </p>
                                    </div>
                                </div>
                                <div class="teacher-card-content">
                                    <h1 class="teacher-card-name">
                                        <img src="/front/images/vn.svg">Helen Au</h1>
                                        <div class="teacher-card-teaches">
                                            <h1 class="teacher-card-title">Teaches</h1>
                                            <div class="teacher-card-languages">
                                                <ul class="teacher-card-teaches-list">
                                                    <li class="">
                                                        <span>Vietnamese</span>
                                                        <div class="teaher-card-language-level hidden-xs">
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h1 class="hidden-xs teacher-card-title">Also speaks</h1>
                                            <div class="hidden-xs teacher-card-languages">
                                                <ul class="teacher-card-teaches-list">
                                                    <li class="">
                                                        <span>Chinese (Cantonese)</span>
                                                        <div class="teaher-card-language-level">
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                            <span class="teacher-card-gra-language-bar teacher-card-language-bar" ></span>
                                                        </div>
                                                    </li>
                                                    <li class=""><span>Chinese (Mandarin)</span>
                                                    <div class="teaher-card-language-level">
                                                        <span class="teacher-card-gra-language-bar teacher-card-low-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar teacher-card-low-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar teacher-card-low-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar" ></span>
                                                    </div>
                                                </li>
                                                <li class="">
                                                    <span>English</span>
                                                    <div class="teaher-card-language-level">
                                                        <span class="teacher-card-gra-language-bar teacher-card-low-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar teacher-card-low-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar teacher-card-low-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar" ></span>
                                                        <span class="teacher-card-gra-language-bar" ></span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="teacher-card-teacher-price">
                                            <div class="teacher-card-hourly-rate">
                                                <h1 class="teacher-card-title">Hourly rate from</h1>
                                                    <span class="text-bold" style="font-size: 16px;">$ 8.50</span>&nbsp;
                                                    <span class="teacher-car -currency">VND 196458.48</span>
                                            </div>
                                            <div class="teacher-card-minutes-rate">
                                                <h1 class="teacher-card-title">30 min trial</h1>
                                                    <span class="text-bold" style="font-size: 16px;">5.00</span>&nbsp;
                                                    <span class="teacher-card-currency">VND 115563.81</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="teacher-card-favorite-teacher" onclick="addTeacherToFavorites('img2')">
                                        <img src="/front/images/heart-empty.svg" id="img2">
                                    </div>
                                </div>
                            </div>
                            <div class="teacher-card-right">
                                <div class="col-md-12">
                                    <ul class="list-avai-video-intro col-md-12">
                                        <li id="avai-li-menu4" class="avai-video-intro avai-video-intro-selelected" onclick="onClickTeacherCardMenu('Availability', '4')">
                                            <span>Availability</span>
                                        </li>
                                        <li id="videos-li-menu4" class="avai-video-intro" onclick="onClickTeacherCardMenu('Video', '4')">
                                            <span>Video</span>
                                        </li>
                                        <li id="intro-li-men4" class="avai-video-intro" onclick="onClickTeacherCardMenu('Intro', '4')">
                                            <span>Intro</span>
                                        </li>
                                    </ul>   
                                </div>
                                <div id="availability-content4">
                                    <div class="teacher-card-calendar col-md-12">
                                        <div class="teacher-card-calendar-header">
                                            <span class="teacher-card-time-header">/</span>
                                            <span class="teacher-card-day-header">Sat</span>
                                            <span class="teacher-card-day-header">Sun</span>
                                            <span class="teacher-card-day-header">Mon</span>
                                            <span class="teacher-card-day-header">Tue</span>
                                            <span class="teacher-card-day-header">Wed</span>
                                            <span class="teacher-card-day-header">Thu</span>
                                            <span class="teacher-card-day-header">Fri</span>
                                        </div>
                                        <div class="teacher-card-calendar-body">
                                            <div class="teacher-card-time-col">
                                                <span class="teacher-card-hours">00 - 06</span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-no-availability"></span>
                                                </span>
                                            </div>
                                            <div class="teacher-card-time-col">
                                                <span class="teacher-card-hours">06 - 12</span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="4 hours" class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-no-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="4 hours" class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="4 hours" class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="4 hours" class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="4 hours" class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="4 hours"  class="teacher-card-high-availability"></span>
                                                </span>
                                            </div>
                                            <div class="teacher-card-time-col">
                                                <span class="teacher-card-hours">12 - 18</span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="2 hours" class="teacher-card-low-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-no-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="6 hours"  class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="6 hours"  class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="6 hours"  class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="6 hours"  class="teacher-card-high-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="6 hours"  class="teacher-card-high-availability"></span>
                                                </span>
                                            </div>
                                            <div class="teacher-card-time-col">
                                                <span class="teacher-card-hours">18 - 00</span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-no-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span class="teacher-card-no-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="2 hours"  class="teacher-card-low-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="2 hours"  class="teacher-card-low-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="2 hours"  class="teacher-card-low-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="2 hours"  class="teacher-card-low-availability"></span>
                                                </span>
                                                <span class="teacher-card-availabilities" >
                                                    <span tooltip="1 hours"  class="teacher-card-low-availability"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="teacher-card-calendar-hint">Based on your time zone</p>
                                </div>
                                <div id="video-content4"  style="display: none;">
                                    <div class="teacher-card-video">
                                        <div class="">
                                            <video controls="" class="teacher-card-video-player" id="videoPoster" src="https://v.italki.cn/xitalki10009921.mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                                <div id="intro-content4"  style="display: none;">
                 
                                    <div class="teacher-card-intro">
                                        <p>Hi, my name is Helen. My major in University was Tourism Management. 
                                            I love traveling to different places, that's why I chose this major. 
                                            I'm really interested in talking and sharing all my knowledge to everyone. 
                                            I hope you guys will enjoy it!I can speak Vietnamese and Cantones...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <aside class="grid-gutter-margin-b show-more-container">
                        <button class="btn btn-new-more show-more-btn no-border-radius">
                            <span class="btn-txt">Show More</span>
                            <span class="loader">
                                <span class="loader_"></span>
                            </span>
                        </button>
                    </aside>
                    @else
                
                    <div class="teacher-list col-md-12">

                        <div class="teacher-item">
                            <div class="row">
                                <div class="col-md-2 col-xs-2 col-sm-2 is-relative no-padding-phone">
                                    <div class="item-icon item-icon-relative">
                                        <div class="online-layout1">
                                            <div class="offline online" title="Online"></div>
                                        </div>
                                        <a href="/teacher">
                                            <img class="teacher-avatar teacher-avatar-xs"
                                                src="https://imagesavatar-static01.italki.com/1T034875184_Avatar.jpg"
                                                width="50" class="rounded" border="0"></a>
                                    </div>
                                </div>
                                <div class="col-xs-10 col-sm-7 col-md-7 no-padding-phone" style="font-size:  13px;">
                                    <ul class="media-heading list-inline">
                                        <li>
                                            <a class="teacher-nickname text-lg">Jin Hong</a>
                                        </li>
                                        <li>
                                            <i class="text-lg flag-icon flag-icon-cn"
                                            style="width: 24px;height: 18px"></i>
                                        </li>
                                        <li class="favorite-teacher hidden-lg hidden-sm">
                                            <i class="fa fa-heart text-muted"></i>
                                        </li>
                                    </ul>
                                    <ul class="media-heading list-inline list-inline-xs" style="display:  inline-flex;">
                                        <li class="color-pro">
                                            <i class="fa fa-home" title="Professional Teacher"
                                            style="vertical-align: middle"></i>&nbsp;
                                            <span translate="TP003"
                                                style="vertical-align: middle">Professional Teacher</span>
                                        </li>
                                        <br class="show-br">
                                        <li>
                                        <span class="">Russian<span>,&nbsp;</span>
                                        </span>
                                            <span class="">French<span>,&nbsp;</span>
                                        </span>

                                        </li>
                                        <li>916 lesson(s)

                                        </li>
                                    </ul>

                                    <p class="text-muted hidden-phone">Summer Camp! Study Chinese with Pingping Laoshi,
                                        you will experience the native way of Chinese! You will have a great holiday and
                                        learn a lot of native language. Come and join us! Looking forward to seeing you!
                                    </p>

                                    <ul class="list-inline hidden-phone">
                                        <li class="teacher-skill-intro">
                                            <a href="" tooltip="I have experience teaching teenagers (13-17)."
                                            tooltip-placement="bottom" class="teacher-skills label label-tags">Teenagers</a>
                                        </li>
                                        <li class="teacher-skill-intro">
                                            <a href="" tooltip="I have experience teaching absolute beginners."
                                            class="teacher-skills label label-tags profile-personal-tags">Beginner</a>
                                        </li>
                                        <li class="teacher-skill-intro">
                                            <a href="" tooltip="I have experience teaching young children (5-12)."
                                            class="teacher-skills label label-tags profile-personal-tags">Children</a>
                                        </li>
                                        <li class="teacher-skill-intro">
                                            <a href="" class="teacher-skills label label-tags profile-personal-tags">SLANG</a>
                                        </li>
                                        <li class="teacher-skill-intro">
                                            <a href="" class="teacher-skills label label-tags profile-personal-tags">RUSSIAN
                                                LITERATURE</a>
                                        </li>
                                        <li class="teacher-skill-intro">
                                            <a href="" class="teacher-skills label label-tags profile-personal-tags">INTERVIEW</a>
                                        </li>

                                    </ul>
                                    <ul class="list-inline hidden-phone">
                                        <li>
                                            <span class="badge1 yes-cursor" style="border-radius: 0px" title="View schedule"
                                        teacher="teacher">
                                                <img src="/front/images/teachers/icon_calendar.png" height="14"> Availability
                                        </span>
                                        </li>
                                        <li>
                                    <span class="badge1 yes-cursor" style="border-radius: 0px"
                                        title="Video Introduction" teacher="teacher">
                                        <img src="/front/images/teachers/icon_video.png" height="14"> Video Introduction
                                    </span>
                                        </li>
                                    </ul>
                                    <div class="btn-instant-tutoring">
                                        <button class="btn btn-info btn-block btn-instant-tutoring-avaiable">
                                            <i class="fa fa-flash"></i>&nbsp;&nbsp;Instant Tutoring Available
                                            <span class="hidden-xs">: 
                                                <strong>$
                                                    <span>8.99</span> USD / 30 minutes
                                                </strong>
                                            </span>
                                        </button>
                                    </div>

                                    <div style="top:0; right:0;position: absolute;" class="hidden-phone">
                                        <button class="btn btn-xs btn-bookmark hidden-xs" title="Bookmark">
                                            <i class="fa fa-heart text-sm" style="color:  #555;"></i>&nbsp;Bookmark
                                        </button>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                                    <div class="hidden-phone">
                                        <span class="fa fa-star teacher-rate"></span>
                                        <span class="fa fa-star teacher-rate"></span>
                                        <span class="fa fa-star teacher-rate"></span>
                                        <span class="fa fa-star teacher-rate"></span>
                                        <span class="fa fa-star teacher-rate"></span>
                                    </div>
                                    <div class="teacher-info-price teacher-price-xs">
                                        <span class="text-muted text-xs">Hourly Rate</span><br>
                                        <strong class="text-bg">$
                                            <span>18<sup>.88</sup> - 22<sup>.90</sup>
                                    </span>&nbsp;<sup>USD</sup>
                                        </strong><br>
                                        <span class="label label-tags ng-hide">18.88 - 22.90 USD</span>
                                    </div>
                                    <div class="hidden-phone">
                                        <span translate="TS032" class="text-muted text-xs">30 Minute Trial</span><br>
                                        <strong class="text-bg">$
                                            <span>13<sup>.90</sup></span> &nbsp;<sup>USD</sup>
                                        </strong><br>
                                        <span class="label label-tags ng-hide"> </span>
                                    </div>
                                </div>


                                <!-- <div class="is-absolute visible-phone fav-btn hidden-md hidden-lg">
                                    <i class="fa fa-heart text-muted"></i>
                                </div> -->

                            </div>

                        </div>
                        <div class="teacher-item">
                            <div class="row">
                                <div class="col-xs-2 col-sm-2 is-relative">
                                    <div class="item-icon item-icon-relative">
                                        <div class="online-layout1">
                                            <div class="offline online" title="Online"></div>
                                        </div>
                                        <a href="/teacher">
                                            <img class="teacher-avatar teacher-avatar-xs"
                                                src="https://imagesavatar-static01.italki.com/1T034875184_Avatar.jpg"
                                                width="50" class="rounded" border="0"></a>
                                    </div>
                                </div>
                                <div class="col-xs-10 col-sm-7 col-md-7" style="font-size:  13px;">
                                    <ul class="media-heading list-inline">
                                        <li>
                                            <a class="teacher-nickname text-lg">Jin Hong</a>
                                        </li>
                                        <li>
                                            <i class="text-lg flag-icon flag-icon-cn"
                                            style="width: 24px;height: 18px"></i>
                                        </li>
                                        <li class="favorite-teacher hidden-lg hidden-sm">
                                            <i class="fa fa-heart text-muted"></i>
                                        </li>
                                    </ul>
                                    <ul class="media-heading list-inline list-inline-xs" style="display:  inline-flex;">
                                        <li class="color-pro">
                                            <i class="fa fa-home" title="Professional Teacher"
                                            style="vertical-align: middle"></i>&nbsp;
                                            <span translate="TP003"
                                                style="vertical-align: middle">Professional Teacher</span>
                                        </li>
                                        <br class="show-br">
                                        <li>
                                        <span class="">Russian<span>,&nbsp;</span>
                                        </span>
                                            <span class="">French<span>,&nbsp;</span>
                                        </span>
                                            <span class="">English<span>,&nbsp;</span>
                                        </span>
                                        </li>
                                        <li>916 lesson(s)

                                        </li>
                                    </ul>

                                    <p class="text-muted hidden-phone">Summer Camp! Study Chinese with Pingping Laoshi,
                                        you will experience the native way of Chinese! You will have a great holiday and
                                        learn a lot of native language. Come and join us! Looking forward to seeing you!
                                    </p>

                                    <ul class="list-inline hidden-phone">
                                        <li class="teacher-skill-intro">
                                            <a href="" tooltip="I have experience teaching teenagers (13-17)."
                                            tooltip-placement="bottom" class="teacher-skills label label-tags">Teenagers</a>
                                        </li>
                                        <li class="teacher-skill-intro">
                                            <a href="" tooltip="I have experience teaching absolute beginners."
                                            class="teacher-skills label label-tags profile-personal-tags">Beginner</a>
                                        </li>
                                        <li class="teacher-skill-intro">
                                            <a href="" tooltip="I have experience teaching young children (5-12)."
                                            class="teacher-skills label label-tags profile-personal-tags">Children</a>
                                        </li>
                                        <li class="teacher-skill-intro">
                                            <a href="" class="teacher-skills label label-tags profile-personal-tags">SLANG</a>
                                        </li>
                                        <li class="teacher-skill-intro">
                                            <a href="" class="teacher-skills label label-tags profile-personal-tags">RUSSIAN
                                                LITERATURE</a>
                                        </li>
                                        <li class="teacher-skill-intro">
                                            <a href="" class="teacher-skills label label-tags profile-personal-tags">INTERVIEW</a>
                                        </li>

                                    </ul>
                                    <ul class="list-inline hidden-phone">
                                        <li>
                                    <span class="badge1 yes-cursor" style="border-radius: 0px" title="View schedule"
                                        teacher="teacher">
                                        <img src="/front/images/teachers/icon_calendar.png" height="14"> Availability
                                    </span>
                                        </li>
                                        <li>
                                    <span class="badge1 yes-cursor" style="border-radius: 0px"
                                        title="Video Introduction" teacher="teacher">
                                        <img src="/front/images/teachers/icon_video.png" height="14"> Video Introduction
                                    </span>
                                        </li>
                                    </ul>

                                    <div style="top:0; right:0;position: absolute;" class="hidden-phone">
                                        <button class="btn btn-xs btn-bookmark hidden-xs" title="Bookmark">
                                            <i class="fa fa-heart text-sm" style="color:  #555;"></i>&nbsp;Bookmark
                                        </button>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                                    <div class="hidden-phone">
                                        <span class="fa fa-star teacher-rate"></span>
                                        <span class="fa fa-star teacher-rate"></span>
                                        <span class="fa fa-star teacher-rate"></span>
                                        <span class="fa fa-star teacher-rate"></span>
                                        <span class="fa fa-star teacher-rate"></span>
                                    </div>
                                    <div class="teacher-info-price teacher-price-xs">
                                        <span class="text-muted text-xs">Hourly Rate</span><br>
                                        <strong class="text-bg">$
                                            <span>18<sup>.88</sup> - 22<sup>.90</sup>
                                    </span>&nbsp;<sup>USD</sup>
                                        </strong><br>
                                        <span class="label label-tags ng-hide">18.88 - 22.90 USD</span>
                                    </div>
                                    <div class="hidden-phone">
                                        <span translate="TS032" class="text-muted text-xs">30 Minute Trial</span><br>
                                        <strong class="text-bg">$
                                            <span>13<sup>.90</sup></span> &nbsp;<sup>USD</sup>
                                        </strong><br>
                                        <span class="label label-tags ng-hide"> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="teacher-item">
                            <div class="row">
                                <div class="col-xs-2 col-sm-2 is-relative">
                                    <div class="item-icon item-icon-relative">
                                        <div class="online-layout1">
                                            <div class="offline online" title="Online"></div>
                                        </div>
                                        <a href="/teacher">
                                            <img class="teacher-avatar teacher-avatar-xs"
                                                src="https://imagesavatar-static01.italki.com/1T034875184_Avatar.jpg"
                                                width="50" class="rounded" border="0"></a>
                                    </div>
                                </div>
                                <div class="col-xs-10 col-sm-7 col-md-7" style="font-size:  13px;">
                                    <ul class="media-heading list-inline">
                                        <li>
                                            <a class="teacher-nickname text-lg">Jin Hong</a>
                                        </li>
                                        <li>
                                            <i class="text-lg flag-icon flag-icon-cn"
                                            style="width: 24px;height: 18px"></i>
                                        </li>
                                        <li class="favorite-teacher hidden-lg hidden-sm">
                                            <i class="fa fa-heart text-muted"></i>
                                        </li>
                                    </ul>
                                    <ul class="media-heading list-inline list-inline-xs" style="display:  inline-flex;">
                                        <li class="color-pro">
                                            <i class="fa fa-home" title="Professional Teacher"
                                            style="vertical-align: middle"></i>&nbsp;
                                            <span translate="TP003"
                                                style="vertical-align: middle">Professional Teacher</span>
                                        </li>
                                        <br class="show-br">
                                        <li>
                                        <span class="">Russian<span>,&nbsp;</span>
                                        </span>
                                            <span class="">French<span>,&nbsp;</span>
                                        </span>
                                            <span class="">English<span>,&nbsp;</span>
                                        </span>
                                        </li>
                                        <li>916 lesson(s)

                                        </li>
                                    </ul>

                                    <p class="text-muted hidden-phone">Summer Camp! Study Chinese with Pingping Laoshi,
                                        you will experience the native way of Chinese! You will have a great holiday and
                                        learn a lot of native language. Come and join us! Looking forward to seeing you!
                                    </p>

                                    <ul class="list-inline hidden-phone">
                                        <li class="teacher-skill-intro">
                                            <a href="" tooltip="I have experience teaching teenagers (13-17)."
                                            tooltip-placement="bottom" class="teacher-skills label label-tags">Teenagers</a>
                                        </li>
                                        <li class="teacher-skill-intro">
                                            <a href="" tooltip="I have experience teaching absolute beginners."
                                            class="teacher-skills label label-tags profile-personal-tags">Beginner</a>
                                        </li>
                                        <li class="teacher-skill-intro">
                                            <a href="" tooltip="I have experience teaching young children (5-12)."
                                            class="teacher-skills label label-tags profile-personal-tags">Children</a>
                                        </li>
                                        <li class="teacher-skill-intro">
                                            <a href="" class="teacher-skills label label-tags profile-personal-tags">SLANG</a>
                                        </li>
                                        <li class="teacher-skill-intro">
                                            <a href="" class="teacher-skills label label-tags profile-personal-tags">RUSSIAN
                                                LITERATURE</a>
                                        </li>
                                        <li class="teacher-skill-intro">
                                            <a href="" class="teacher-skills label label-tags profile-personal-tags">INTERVIEW</a>
                                        </li>

                                    </ul>
                                    <ul class="list-inline hidden-phone">
                                        <li>
                                    <span class="badge1 yes-cursor" style="border-radius: 0px" title="View schedule"
                                        teacher="teacher">
                                        <img src="/front/images/teachers/icon_calendar.png" height="14"> Availability
                                    </span>
                                        </li>
                                        <li>
                                    <span class="badge1 yes-cursor" style="border-radius: 0px"
                                        title="Video Introduction" teacher="teacher">
                                        <img src="/front/images/teachers/icon_video.png" height="14"> Video Introduction
                                    </span>
                                        </li>
                                    </ul>

                                    <div style="top:0; right:0;position: absolute;">
                                        <button class="btn btn-xs btn-bookmark hidden-xs" title="Bookmark">
                                            <i class="fa fa-heart text-sm" style="color:  #555;"></i>&nbsp;Bookmark
                                        </button>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                                    <div class="hidden-phone">
                                        <span class="fa fa-star teacher-rate"></span>
                                        <span class="fa fa-star teacher-rate"></span>
                                        <span class="fa fa-star teacher-rate"></span>
                                        <span class="fa fa-star teacher-rate"></span>
                                        <span class="fa fa-star teacher-rate"></span>
                                    </div>
                                    <div class="teacher-info-price teacher-price-xs">
                                        <span class="text-muted text-xs">Hourly Rate</span><br>
                                        <strong class="text-bg">$
                                            <span>18<sup>.88</sup> - 22<sup>.90</sup>
                                    </span>&nbsp;<sup>USD</sup>
                                        </strong><br>
                                        <span class="label label-tags ng-hide">18.88 - 22.90 USD</span>
                                    </div>
                                    <div class="hidden-phone">
                                        <span translate="TS032" class="text-muted text-xs">30 Minute Trial</span><br>
                                        <strong class="text-bg">$
                                            <span>13<sup>.90</sup></span> &nbsp;<sup>USD</sup>
                                        </strong><br>
                                        <span class="label label-tags ng-hide"> </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="teacher-item">
                            <div class="row">
                                <div class="col-xs-2 col-sm-2 is-relative">
                                    <div class="item-icon item-icon-relative">
                                        <div class="online-layout1">
                                            <div class="offline online" title="Online"></div>
                                        </div>
                                        <a href="/teacher">
                                            <img class="teacher-avatar teacher-avatar-xs"
                                                src="https://imagesavatar-static01.italki.com/1T034875184_Avatar.jpg"
                                                width="50" class="rounded" border="0"></a>
                                    </div>
                                </div>
                                <div class="col-xs-10 col-sm-7 col-md-7" style="font-size:  13px;">
                                    <ul class="media-heading list-inline">
                                        <li>
                                            <a class="teacher-nickname text-lg">Jin Hong</a>
                                        </li>
                                        <li>
                                            <i class="text-lg flag-icon flag-icon-cn"
                                            style="width: 24px;height: 18px"></i>
                                        </li>
                                        <li class="favorite-teacher hidden-lg hidden-sm">
                                            <i class="fa fa-heart text-muted"></i>
                                        </li>
                                    </ul>
                                    <ul class="media-heading list-inline list-inline-xs" style="display:  inline-flex;">
                                        <li class="color-pro">
                                            <i class="fa fa-home" title="Professional Teacher"
                                            style="vertical-align: middle"></i>&nbsp;
                                            <span translate="TP003"
                                                style="vertical-align: middle">Professional Teacher</span>
                                        </li>
                                        <br class="show-br">
                                        <li>
                                        <span class="">Russian<span>,&nbsp;</span>
                                        </span>
                                            <span class="">French<span>,&nbsp;</span>
                                        </span>
                                            <span class="">English<span>,&nbsp;</span>
                                        </span>
                                        </li>
                                        <li>916 lesson(s)

                                        </li>
                                    </ul>

                                    <p class="text-muted hidden-phone">Summer Camp! Study Chinese with Pingping Laoshi,
                                        you will experience the native way of Chinese! You will have a great holiday and
                                        learn a lot of native language. Come and join us! Looking forward to seeing you!
                                    </p>

                                    <ul class="list-inline hidden-phone">
                                        <li class="teacher-skill-intro">
                                            <a href="" tooltip="I have experience teaching teenagers (13-17)."
                                            tooltip-placement="bottom" class="teacher-skills label label-tags">Teenagers</a>
                                        </li>
                                        <li class="teacher-skill-intro">
                                            <a href="" tooltip="I have experience teaching absolute beginners."
                                            class="teacher-skills label label-tags profile-personal-tags">Beginner</a>
                                        </li>
                                        <li class="teacher-skill-intro">
                                            <a href="" tooltip="I have experience teaching young children (5-12)."
                                            class="teacher-skills label label-tags profile-personal-tags">Children</a>
                                        </li>
                                        <li class="teacher-skill-intro">
                                            <a href="" class="teacher-skills label label-tags profile-personal-tags">SLANG</a>
                                        </li>
                                        <li class="teacher-skill-intro">
                                            <a href="" class="teacher-skills label label-tags profile-personal-tags">RUSSIAN
                                                LITERATURE</a>
                                        </li>
                                        <li class="teacher-skill-intro">
                                            <a href="" class="teacher-skills label label-tags profile-personal-tags">INTERVIEW</a>
                                        </li>

                                    </ul>
                                    <ul class="list-inline hidden-phone">
                                        <li>
                                    <span class="badge1 yes-cursor" style="border-radius: 0px" title="View schedule"
                                        teacher="teacher">
                                        <img src="/front/images/teachers/icon_calendar.png" height="14"> Availability
                                    </span>
                                        </li>
                                        <li>
                                    <span class="badge1 yes-cursor" style="border-radius: 0px"
                                        title="Video Introduction" teacher="teacher">
                                        <img src="/front/images/teachers/icon_video.png" height="14"> Video Introduction
                                    </span>
                                        </li>
                                    </ul>

                                    <div style="top:0; right:0;position: absolute;">
                                        <button class="btn btn-xs btn-bookmark hidden-xs" title="Bookmark">
                                            <i class="fa fa-heart text-sm" style="color:  #555;"></i>&nbsp;Bookmark
                                        </button>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                                    <div class="hidden-phone">
                                        <span class="fa fa-star teacher-rate"></span>
                                        <span class="fa fa-star teacher-rate"></span>
                                        <span class="fa fa-star teacher-rate"></span>
                                        <span class="fa fa-star teacher-rate"></span>
                                        <span class="fa fa-star teacher-rate"></span>
                                    </div>
                                    <div class="teacher-info-price teacher-price-xs">
                                        <span class="text-muted text-xs">Hourly Rate</span><br>
                                        <strong class="text-bg">$
                                            <span>18<sup>.88</sup> - 22<sup>.90</sup>
                                    </span>&nbsp;<sup>USD</sup>
                                        </strong><br>
                                        <span class="label label-tags ng-hide">18.88 - 22.90 USD</span>
                                    </div>
                                    <div class="hidden-phone">
                                        <span translate="TS032" class="text-muted text-xs">30 Minute Trial</span><br>
                                        <strong class="text-bg">$
                                            <span>13<sup>.90</sup></span> &nbsp;<sup>USD</sup>
                                        </strong><br>
                                        <span class="label label-tags ng-hide"> </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="teacher-item">
                            <div class="row">
                                <div class="col-xs-2 col-sm-2 is-relative">
                                    <div class="item-icon item-icon-relative">
                                        <div class="online-layout1">
                                            <div class="offline online" title="Online"></div>
                                        </div>
                                        <a href="/teacher">
                                            <img class="teacher-avatar teacher-avatar-xs"
                                                src="https://imagesavatar-static01.italki.com/1T034875184_Avatar.jpg"
                                                width="50" class="rounded" border="0"></a>
                                    </div>
                                </div>
                                <div class="col-xs-10 col-sm-7 col-md-7" style="font-size:  13px;">
                                    <ul class="media-heading list-inline">
                                        <li>
                                            <a class="teacher-nickname text-lg">Jin Hong</a>
                                        </li>
                                        <li>
                                            <i class="text-lg flag-icon flag-icon-cn"
                                            style="width: 24px;height: 18px"></i>
                                        </li>
                                        <li class="favorite-teacher hidden-lg hidden-sm">
                                            <i class="fa fa-heart text-muted"></i>
                                        </li>
                                    </ul>
                                    <ul class="media-heading list-inline list-inline-xs" style="display:  inline-flex;">
                                        <li class="color-pro">
                                            <i class="fa fa-home" title="Professional Teacher"
                                            style="vertical-align: middle"></i>&nbsp;
                                            <span translate="TP003"
                                                style="vertical-align: middle">Professional Teacher</span>
                                        </li>
                                        <br class="show-br">
                                        <li>
                                        <span class="">Russian<span>,&nbsp;</span>
                                        </span>
                                            <span class="">French<span>,&nbsp;</span>
                                        </span>
                                            <span class="">English<span>,&nbsp;</span>
                                        </span>
                                        </li>
                                        <li>916 lesson(s)

                                        </li>
                                    </ul>

                                    <p class="text-muted hidden-phone">Summer Camp! Study Chinese with Pingping Laoshi,
                                        you will experience the native way of Chinese! You will have a great holiday and
                                        learn a lot of native language. Come and join us! Looking forward to seeing you!
                                    </p>

                                    <ul class="list-inline hidden-phone">
                                        <li class="teacher-skill-intro">
                                            <a href="" tooltip="I have experience teaching teenagers (13-17)."
                                            tooltip-placement="bottom" class="teacher-skills label label-tags">Teenagers</a>
                                        </li>
                                        <li class="teacher-skill-intro">
                                            <a href="" tooltip="I have experience teaching absolute beginners."
                                            class="teacher-skills label label-tags profile-personal-tags">Beginner</a>
                                        </li>
                                        <li class="teacher-skill-intro">
                                            <a href="" tooltip="I have experience teaching young children (5-12)."
                                            class="teacher-skills label label-tags profile-personal-tags">Children</a>
                                        </li>
                                        <li class="teacher-skill-intro">
                                            <a href="" class="teacher-skills label label-tags profile-personal-tags">SLANG</a>
                                        </li>
                                        <li class="teacher-skill-intro">
                                            <a href="" class="teacher-skills label label-tags profile-personal-tags">RUSSIAN
                                                LITERATURE</a>
                                        </li>
                                        <li class="teacher-skill-intro">
                                            <a href="" class="teacher-skills label label-tags profile-personal-tags">INTERVIEW</a>
                                        </li>

                                    </ul>
                                    <ul class="list-inline hidden-phone">
                                        <li>
                                    <span class="badge1 yes-cursor" style="border-radius: 0px" title="View schedule"
                                        teacher="teacher">
                                        <img src="/front/images/teachers/icon_calendar.png" height="14"> Availability
                                    </span>
                                        </li>
                                        <li>
                                    <span class="badge1 yes-cursor" style="border-radius: 0px"
                                        title="Video Introduction" teacher="teacher">
                                        <img src="/front/images/teachers/icon_video.png" height="14"> Video Introduction
                                    </span>
                                        </li>
                                    </ul>

                                    <div style="top:0; right:0;position: absolute;">
                                        <button class="btn btn-xs btn-bookmark hidden-xs" title="Bookmark">
                                            <i class="fa fa-heart text-sm" style="color:  #555;"></i>&nbsp;Bookmark
                                        </button>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                                    <div class="hidden-phone">
                                        <span class="fa fa-star teacher-rate"></span>
                                        <span class="fa fa-star teacher-rate"></span>
                                        <span class="fa fa-star teacher-rate"></span>
                                        <span class="fa fa-star teacher-rate"></span>
                                        <span class="fa fa-star teacher-rate"></span>
                                    </div>
                                    <div class="teacher-info-price teacher-price-xs">
                                        <span class="text-muted text-xs">Hourly Rate</span><br>
                                        <strong class="text-bg">$
                                            <span>18<sup>.88</sup> - 22<sup>.90</sup>
                                    </span>&nbsp;<sup>USD</sup>
                                        </strong><br>
                                        <span class="label label-tags ng-hide">18.88 - 22.90 USD</span>
                                    </div>
                                    <div class="hidden-phone">
                                        <span translate="TS032" class="text-muted text-xs">30 Minute Trial</span><br>
                                        <strong class="text-bg">$
                                            <span>13<sup>.90</sup></span> &nbsp;<sup>USD</sup>
                                        </strong><br>
                                        <span class="label label-tags ng-hide"> </span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="teacher-item">
                            <div class="row">
                                <div class="col-xs-2 col-sm-2 is-relative">
                                    <div class="item-icon item-icon-relative">
                                        <div class="online-layout1">
                                            <div class="offline online" title="Online"></div>
                                        </div>
                                        <a href="/teacher">
                                            <img class="teacher-avatar teacher-avatar-xs"
                                                src="https://imagesavatar-static01.italki.com/1T034875184_Avatar.jpg"
                                                width="50" class="rounded" border="0"></a>
                                    </div>
                                </div>
                                <div class="col-xs-10 col-sm-7 col-md-7" style="font-size:  13px;">
                                    <ul class="media-heading list-inline">
                                        <li>
                                            <a class="teacher-nickname text-lg">Jin Hong</a>
                                        </li>
                                        <li>
                                            <i class="text-lg flag-icon flag-icon-cn"
                                            style="width: 24px;height: 18px"></i>
                                        </li>
                                        <li class="favorite-teacher hidden-lg hidden-sm">
                                            <i class="fa fa-heart text-muted"></i>
                                        </li>
                                    </ul>
                                    <ul class="media-heading list-inline list-inline-xs" style="display:  inline-flex;">
                                        <li class="color-pro">
                                            <i class="fa fa-home" title="Professional Teacher"
                                            style="vertical-align: middle"></i>&nbsp;
                                            <span translate="TP003"
                                                style="vertical-align: middle">Professional Teacher</span>
                                        </li>
                                        <br class="show-br">
                                        <li>
                                        <span class="">Russian<span>,&nbsp;</span>
                                        </span>
                                            <span class="">French<span>,&nbsp;</span>
                                        </span>
                                            <span class="">English<span>,&nbsp;</span>
                                        </span>
                                        </li>
                                        <li>916 lesson(s)

                                        </li>
                                    </ul>

                                    <p class="text-muted hidden-phone">Summer Camp! Study Chinese with Pingping Laoshi,
                                        you will experience the native way of Chinese! You will have a great holiday and
                                        learn a lot of native language. Come and join us! Looking forward to seeing you!
                                    </p>

                                    <ul class="list-inline hidden-phone">
                                        <li class="teacher-skill-intro">
                                            <a href="" tooltip="I have experience teaching teenagers (13-17)."
                                            tooltip-placement="bottom" class="teacher-skills label label-tags">Teenagers</a>
                                        </li>
                                        <li class="teacher-skill-intro">
                                            <a href="" tooltip="I have experience teaching absolute beginners."
                                            class="teacher-skills label label-tags profile-personal-tags">Beginner</a>
                                        </li>
                                        <li class="teacher-skill-intro">
                                            <a href="" tooltip="I have experience teaching young children (5-12)."
                                            class="teacher-skills label label-tags profile-personal-tags">Children</a>
                                        </li>
                                        <li class="teacher-skill-intro">
                                            <a href="" class="teacher-skills label label-tags profile-personal-tags">SLANG</a>
                                        </li>
                                        <li class="teacher-skill-intro">
                                            <a href="" class="teacher-skills label label-tags profile-personal-tags">RUSSIAN
                                                LITERATURE</a>
                                        </li>
                                        <li class="teacher-skill-intro">
                                            <a href="" class="teacher-skills label label-tags profile-personal-tags">INTERVIEW</a>
                                        </li>

                                    </ul>
                                    <ul class="list-inline hidden-phone">
                                        <li>
                                    <span class="badge1 yes-cursor" style="border-radius: 0px" title="View schedule"
                                        teacher="teacher">
                                        <img src="/front/images/teachers/icon_calendar.png" height="14"> Availability
                                    </span>
                                        </li>
                                        <li>
                                    <span class="badge1 yes-cursor" style="border-radius: 0px"
                                        title="Video Introduction" teacher="teacher">
                                        <img src="/front/images/teachers/icon_video.png" height="14"> Video Introduction
                                    </span>
                                        </li>
                                    </ul>

                                    <div style="top:0; right:0;position: absolute;">
                                        <button class="btn btn-xs btn-bookmark hidden-xs" title="Bookmark">
                                            <i class="fa fa-heart text-sm" style="color:  #555;"></i>&nbsp;Bookmark
                                        </button>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                                    <div class="hidden-phone">
                                        <span class="fa fa-star teacher-rate"></span>
                                        <span class="fa fa-star teacher-rate"></span>
                                        <span class="fa fa-star teacher-rate"></span>
                                        <span class="fa fa-star teacher-rate"></span>
                                        <span class="fa fa-star teacher-rate"></span>
                                    </div>
                                    <div class="teacher-info-price teacher-price-xs">
                                        <span class="text-muted text-xs">Hourly Rate</span><br>
                                        <strong class="text-bg">$
                                            <span>18<sup>.88</sup> - 22<sup>.90</sup>
                                    </span>&nbsp;<sup>USD</sup>
                                        </strong><br>
                                        <span class="label label-tags ng-hide">18.88 - 22.90 USD</span>
                                    </div>
                                    <div class="hidden-phone">
                                        <span translate="TS032" class="text-muted text-xs">30 Minute Trial</span><br>
                                        <strong class="text-bg">$
                                            <span>13<sup>.90</sup></span> &nbsp;<sup>USD</sup>
                                        </strong><br>
                                        <span class="label label-tags ng-hide"> </span>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                    <aside class="col-md-12 grid-gutter-margin-b"
                        style="padding-left:  0px !important;padding-right:  0px !important;">
                        <button class="btn btn-labeled btn-block btn-show-more-teachers">
                            <span class="btn-txt">Show More</span>
                            <span class="loader">
                        <span class="loader_"></span></span>
                        </button>
                    </aside>
                    @endif
                    
                    
                </div>
                <div class="right-menu col-md-3 right-menu-xs">
                    <div class="baner col-md-12 no-padding-phone">
                        <div class="form-group no-margin hidden-xs" style="margin-bottom:  20px !important;">
                            <input name="auto" type="text" class="form-control ng-pristine ng-untouched ng-valid"
                                   placeholder="Search teacher name...">
                        </div>

                        <div class="panel no-border request-panel2 request-panel2-width no-boder-radius">
                            <section class="request-panel-right">
                                <div class="request-left-img">
                                    <img src="/front/images/teachers/satisfaction.svg" alt="">
                                </div>
                                <div class="panel-body" style="padding-top: 0">
                                    <div class="no-margin-t request-right-title2 request-title2-position">
                                        <div style="font-size: 30px;font-weight: 300;  line-height: 30px">100%
                                        </div>
                                        <div class="satisfaction">Satisfaction&nbsp;Guarantee
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <p class="request-panel-p">Your italki Credits are safe with us until you confirm that the
                                lesson has been successfully completed.</p>
                            <div class="request-bottom-border">

                            </div>

                        </div>

                        <div class="panel no-border panel-dark bs-panel-half no-boder-radius">
                            <div class="panel-body panel-height2">
                                <div class="panel-body-section">
                                    <h4 class="no-margin-t">Tips for new students</h4>
                                    <ul class="no-grid-gutter-h" style="padding-left:  20px;">
                                        <li>
                                            <a href="#">What are italki Credits?</a>
                                        </li>
                                        <li>
                                            <a href="#">How to find the right teacher on italki?</a>
                                        </li>
                                        <li>
                                            <a href="#">How do I schedule a lesson with an italki teacher?</a>
                                        </li>
                                        <li>
                                            <a href="#">It's my first italki lesson! What should I do?</a>
                                        </li>
                                    </ul>
                                    <div class="text-center">
                                        <a href="#" target="_blank" class="btn btn-more">More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel no-border panel-dark no-boder-radius">
                            <div class="panel-body">
                                <h4 style="font-weight: bold;">Want to be a teacher?</h4>
                                <div class="grid-gutter-margin-b">
                                    <p>If you're interested in being a teacher on italki, please apply here.</p>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-more">
                                        <span class="btn-txt">Apply to be a teacher</span>
                                        <span class="loader loader--white">

                                    </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

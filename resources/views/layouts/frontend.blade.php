<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="google-site-verification" content="nWVyThdXZ9ocgBIMwcTDLtUFQKjEQ9EK4bCT5KKwFRw" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>italki Vietnam</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <link href="/front/css/footer.css" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Font awesome 4.7 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="/js/onboarding.js"></script>
    <script src="/js/header.js"></script>
    <script src="/js/lessons.js"></script>
    <script src="/js/recharge.js"></script>
    <script src="/js/finance.js"></script>
    <script src="/js/discussions.js"></script>
    
    <!-- Calendar Library -->
    <link href="/js/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css">
    <link href="/js/fullcalendar/fullcalendar.print.min.css" rel="stylesheet" type="text/css" media='print' >
    <script src="/js/fullcalendar/moment.min.js"></script>
    <!-- <script src="/js/fullcalendar/jquery.min.js"></script> -->
    <script src="/js/fullcalendar/fullcalendar.min.js"></script>

   
	<!-- JQuery UI -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>
<div class="teacher-page">
    <div class="header">

        <div id="notification-panel" tabindex="-1" role="dialog" class="notification-modal-dialog modal fade message-dialog message-layer in" style="display:none;">
            <div class="modal-dialog">
                <div class="modal-content no-border-radius">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                            <a class="pull-right icon_com icon_markread" style="">&nbsp;</a>
                            <h4 class="modal-title" translate="ML003">Notifications</h4>
                        </div>
                        <div class="modal-body" style="padding: 0">
                            <div class="notification-tab" style="">
                                <form class="ng-valid ng-dirty ng-valid-parse">
                                    <div class="btn-group btn-group-sm btn-group-justified" data-toggle="buttons">
                                        <label id="noti-action-required" onclick="onSelectActionRequire()" class="btn btn-noti btn-noti-active" btn-radio="'action'">Action Required</label>
                                        <label id="noti-other" onclick="onSelectOthers()" class="btn btn-noti" btn-radio="'ordinary'">Other</label>
                                    </div>
                                </form>
                            </div>
                            <div class="loading-layout">
                                <div class="widget-notifications notifications-list modal-list" style="">
                                    <div class="notification-p-50 ng-hide" style="">
                                        <div class="noresult-text text-lg text-center text-muted ng-hide" style="">
                                            <img class="rounded" src="/front/images/contacts/icon_norecord.png"><br>
                                            <span ng-bind-html="tips|t">No notifications.</span>
                                        </div>
                                    </div>
                                <div class="notification-p-50" style="">
                                    <aside class="text-center ng-hide" style="">
                                        <button class="btn btn-labeled btn-block">
                                            <span class="btn-txt">Show More</span>
                                            <span class="loader"><span class="loader_"></span></span>
                                        </button>
                                    </aside>
                                    <div class="noresult-text text-lg text-center text-muted">
                                        <img class="rounded" src="/front/images/contacts/icon_norecord.png"><br>
                                        <span>No notifications.</span>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>    
        </div>


        <div id="message-panel" class="header-modal-dialog" style="display: none;">
            <div class="modal-dialog">
                <div class="instant-tips">
                    <div>

                    </div>
                </div>
                <div class="modal-content" modal-transclude="">
                    <div class="modal-header">
                        <button type="button" class="close" onclick="closeMessageDialog()" data-dismiss="modal"
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title">Confirm your email</h4>
                    </div>
                    <div class="modal-body">
                        <h4>Confirm your email address to continue...</h4>
                        <div class="note note-info no-border">We have sent a confirmation email to
                            <span class="red12">{{ isset( $user_email ) ? $user_email : '' }}</span>. Please click on
                            the link to confirm your
                            email address.
                        </div>
                        Still having problems?
                        <ul class="">
                            <li>Please remember to check your spam folder</li>
                            <li>
                                <a href="">Resend confirmation email</a>
                            </li>
                            <li>
                                <a href="">Change your email address</a>
                                <div class="ng-hide" style="">
                                    <p></p>
                                    <div class="input-group">
                                        <input type="text" ng-model="newEmail"
                                               class="form-control ng-pristine ng-untouched ng-valid"
                                               placeholder="Please enter your email address.">
                                        <span class="input-group-btn">
                                            <button class="btn" noact="1">
                                                <span class="btn-txt">Submit</span>
                                                <span class="loader loader--white">
                                                    <span class="loader_"></span>
                                                </span>
                                            </button>
                                        </span>
                                    </div>
                                    <p></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" onclick="closeMessageDialog()">Do it later</button>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-default" style="margin-bottom:  0px !important;background: white;">

            @if(\Auth::check())
                <div class="header" id="lesson-header">
                    <nav class="navbar navbar-default no-boder-phone"
                         style="background:  white;margin-bottom:  0px !important;border-radius: 0px !important;">
                        <div class="container container-xs no-padding-lr-phone">
                            <div class="navbar-header set-width-20 no-margin-lr-phone text-center-phone">
                                <a href="/" style="padding-bottom: 20px">
                                    <img src="/front/images/ii_logo_red_34x34.svg" class="hidden-sm hidden-lg" style="height: 40px;margin-top: 8px">
                                    <img src="/front/upload/header_log_icon.png" class="hidden-xs" style="height: 45px;margin-top: 5px">
                                </a>
                            </div>

                            <div class="right-header right-header-teachers-phone" style="float: right;">
                                <div class="find-teacher2 col-md-3 col-sm-3 hidden-xs">
                                    <span class="fa fa-search header-icon-style"></span>
                                    <span class="title">FIND A TEACHER</span>
                                </div>

                                <div class="community2 col-md-3 col-sm-3 hidden-xs" onclick="onClickCommunity()" style="cursor:  pointer;">
                                    <span class="fa fa-globe header-icon-style"></span>
                                    <span class="title hidde-xs">COMMUNITY</span>
                                    <ul id="community-panel" class="dropdown-menu right dropdown-notification"
                                        role="menu">
                                        <li>
                                            <a href="/articles">Articles</a>
                                        </li>
                                        <li>
                                            <a href="/notebooks">Notebook</a>
                                        </li>
                                        <li>
                                            <a href="/questions">Answers</a>
                                        </li>
                                        <li>
                                            <a href="/discussions">Discussions</a>
                                        </li>
                                        <li>
                                            <a href="/partners">Language Partners</a>
                                        </li>
                                        <li>
                                            <a href="/languagehacking">Language Hacking</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="lessions2 col-md-3 col-sm-3 hidden-xs" onclick="onClickLession()" style="cursor:  pointer;">
                                    <span class="fa fa-graduation-cap header-icon-style lesson-item-md"></span>
                                    <span class="title hidden-sm">LESSIONS</span>
                                    <ul id="lession-panel" class="dropdown-menu right dropdown-notification"
                                        role="menu">
                                        <li>
                                            <a href="/lessons/sessions">Lessons</a>
                                        </li>
                                        <li>
                                            <a href="/lessons/packages">Package</a>
                                        </li>
                                        <li>
                                            <a href="/lessons/calendar">Calendar</a>
                                        </li>
                                        <li class="divider">

                                        </li>
                                        <li>
                                            <a>Schedule Lesson</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a>Language Challenge</a>
                                        </li>
                                    </ul>
                                </div>
                                <span class="fa fa-users header-icon header-icon-style set-width-25 no-padding-left-phone text-center-phone set-middle-teachers-phone" onclick="onClickContactTeachers()" style="cursor: pointer;"></span>
                                <span class="fa fa-envelope header-icon header-icon-style set-width-25 no-padding-left-phone text-center-phone set-middle-teachers-phone" data-toggle="modal" data-target="#message-parent"
                                      style="cursor: pointer;">
                                </span>
                                <span class="fa fa-bell header-icon header-icon-style set-width-25 no-padding-left-phone text-center-phone set-middle-teachers-phone" data-toggle="modal" data-target="#notification-panel" style="cursor: pointer;"></span>
                                <div class="set-width-25 text-center hidden-sm hidden-md hidden-lg">
                                    <span class="header-icon no-padding-left-phone">
                                        <img src="/front/images/teacher-profile/no_pic75.jpg"/>
                                    </span>
                                    <span class="fa fa-angle-down" style="cursor:  pointer;" onclick="onClickLogout();">
                                    </span>
                                </div>
                                <span class="header-icon no-padding-left-phone hidden-xs">
                                    <img src="/front/images/teacher-profile/no_pic75.jpg"/>
                                </span>
                                <span class="fa fa-angle-down hidden-xs" style="cursor:  pointer;" onclick="onClickLogout();">
                                </span>
								<div class="container" style="position: absolute !important; left:0; right: 0;">
									<ul id="logout-panel" class="dropdown-menu right dropdown-notification" role="menu"
										style="display: none; right: 0 !important;left: unset;">
										
										<li>
											<a href="/finance/overview">
												<p class="">Student Wallet<br>
													<span class="text-bg">$0.00</span>&nbsp;USD
												</p>
											</a>
										</li>
										<li class="divider"></li>
										<li>
											<a id="buy-credits" href="/recharge">Buy Credits</a>
										</li>
										<li class="divider"></li>
										<li>
											<a href="/user">View Profile</a></li>
										<li class="">
											<a href="/settings/profile">Edit Profile</a>
										</li>
										<li>
											<a href="/settings/account">Account Settings</a>
										</li>
										<li class="divider"></li>
										<li>
											<a href="/hc/en-us">Support</a>
										</li>
										<li>
											<a href="{{route('logout')}}">Log Out</a>
										</li>
                                    </ul>
								</div>
                            </div>
                        </div>
                    </nav>

                    <nav id="menu-after-login-xs" class="nav-sm hidden-sm hidden-md hidden-lg" role="navigation" style="top: 56px;">
                        <div class="nav-bg" ></div>
                            <div class="nav-content panel text-white" style="background: white;border-top: 2px solid rgba(0, 0, 0, 0.27)">
                                <div class="nav-menu-wrapper">
                                    <div style="font-size: 14px;padding: 0px">
                                        <div class="row logout-menu-item-phone ">
                                            <div class="col-xs-3 no-padding-lr-phone no-border-t-phone">
                                                <a href="#">
                                                    <img class="mute rounded" width="25px" src="/front/images/no_pic50.jpg">
                                                </a>
                                            </div>
                                            <div class="col-xs-9">
                                                <span>Profile &amp; Settings</span> 
                                                <span id="show-accout-setting-panel-icon" class="fa fa-angle-down" style="float: right;font-size: 24px" onclick="onShowAccountSetting()"></span> 
                                                <span id="hide-accout-setting-panel-icon" class="fa fa-angle-up" style="float: right;font-size: 24px;display:none;" onclick="onHideAccountSetting()"></span>
                                            </div>
                                        </div>
                                        <div id="profile-setting-panel" class="row collapse" style="color: rgb(119, 119, 119); height: 0px;">
                                            <div class="col-xs-3 "></div>
                                                <div class="col-xs-9" >
                                                    <div class="border-top">
                                                        <div class="row" style="">
                                                            <div class="col-xs-8" style="margin-bottom: 0px">
                                                                <p style="margin-top: 13px" href="/settings/profile" class="">Edit Profile</p>
                                                            </div>
                                                            <div class="col-xs-4" style="margin-top: 10px;border-left: 1px solid #dddddd">
                                                                <a href="#">
                                                                    <span class="fa fa-eye" style="font-size: 24px;color: black;opacity: 0.54"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="border-top: 1px solid #dddddd;">
                                                        <p style="margin-top: 10px" href="/settings/account">Account Settings</p>
                                                    </div>
                                                    <div style="border-top: 1px solid #dddddd;">
                                                        <p style="margin-top: 10px;">Log Out</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row logout-menu-item-phone" style="" href="/finance/overview">
                                                <div class="col-xs-3 no-padding-lr-phone" style="">
                                                    <a><span class="fa fa-wallet" style="font-size: 24px;color: black;opacity: 0.54"></span></a>
                                                </div>
                                                <div class="col-xs-9" style="padding-right:  30px;">
                                                    <span>Finance</span>
                                                    <span style="float: right;margin-right: -30px" class="">
                                                        <strong>$0.00&nbsp;USD</strong>
                                                    </span>
                                                </div>
                                            </div>
                                        <div>
                                            <div class="row logout-menu-item-phone ">
                                                <div class="col-xs-3 no-padding-lr-phone" style="">
                                                    <span class="fa fa-users" style="font-size: 24px;color: black;opacity: 0.54"></span>
                                                </div>
                                                <div class="col-xs-9" style="">
                                                    <span>Contact</span> 
                                                    <span id="show-contact-setting-panel-icon" class="fa fa-angle-down" onclick="onShowContactSetting()" style="float: right;font-size: 24px"></span> 
                                                    <span id="hide-contact-setting-panel-icon" class="fa fa-angle-up" onclick="onHideContactSetting()" style="float: right;font-size: 24px;display:none;"></span>
                                                </div>
                                            </div>
                                        </div>
                                            <div id="contact-setting-panel" class="row collapse" style="color: rgb(119, 119, 119); height: 0px;">
                                                <div class="col-xs-3 no-padding-lr-phone"></div>
                                                    <div class="col-xs-9" >
                                                    <div class="border-top">
                                                        <p style="" href="/contacts/partner">My Friends</p>
                                                    </div>
                                                    <div style="border-top: 1px solid #dddddd;">
                                                        <p style="margin-top: 10px" href="/contacts/teacher">My Teachers</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="find-a-teacher" class="row logout-menu-item-phone" style="" href="/teachers">
                                                <div class="col-xs-3 no-padding-lr-phone" style="">
                                                    <span class="fa fa-search" style="font-size: 24px;color: #FF4338"></span>
                                                </div>
                                                <div class="col-xs-9" style="">
                                                    <span style="color: red">Find a Teacher</span>
                                                </div>
                                            </div>
                                        <div class="row logout-menu-item-phone">
                                            <div class="col-xs-3 no-padding-lr-phone" style="">
                                                <span class="fa fa-question-circle" style="font-size: 24px;color: black;opacity: 0.54"></span>
                                            </div>
                                            <div class="col-xs-9" style="">
                                                <a href="https://www.italki.com/signin/sso" style="color: #000000">Support</a>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="row logout-menu-item-phone">
                                                <div class="col-xs-3 no-padding-lr-phone" style="">
                                                    <span class="fa fa-globe" style="font-size: 24px;color: black;opacity: 0.54"></span>
                                                </div>
                                                <div class="col-xs-9" style="">
                                                    <div>
                                                        <span>Community</span> 
                                                        <span id="show-community-setting-panel-icon" class="fa fa-angle-down" onclick="onShowCommunitySetting()" style="float: right;font-size: 24px"></span> 
                                                        <span id="hide-community-setting-panel-icon" class="fa fa-angle-up" onclick="onHideCommunitySetting()" style="float: right;font-size: 24px;display:none;"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="community-setting-panel" class="row collapse" style="color: rgb(119, 119, 119); width: 100%; height: 0px;">
                                            <div class="col-xs-4"></div>
                                            <div class="col-xs-8" >
                                                <div class="border-top">
                                                    <p href="/articles">Articles</p>
                                                </div>
                                                <div style="border-top: 1px solid #dddddd">
                                                    <p style="margin-top: 10px" href="/notebooks">Notebook</p>
                                                </div>
                                                <div style="border-top: 1px solid #dddddd">
                                                    <p style="margin-top: 10px" href="/questions">Answers</p>
                                                </div>
                                                <div style="border-top: 1px solid #dddddd">
                                                    <p style="margin-top: 10px" href="/discussions">Discussions</p>
                                                </div>
                                                <div style="border-top: 1px solid #dddddd">
                                                    <p style="margin-top: 10px" href="/partners">Language Partners</p>
                                                </div>
                                                <div style="border-top: 1px solid #DDDDDD;line-height: 48px;height: 48px">
                                                    <p href="/languagehacking">Language Hacking</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                </div>
            @else
                <div class="container display-flex no-padding-right-xs"
                     style="background:  white;height:  56px;margin-bottom:  0px !important;border-radius: 0px !important;">
                    <div class="navbar-header">
                        <a href="/" style="padding-bottom: 20px">
                            <img src="/front/upload/header_log_icon.png" style="height: 45px;margin-top: 5px"/>
                        </a>
                    </div>

                    <div class="right-header header-not-login" style="display: flex;float:right;height:  56px;">
                        <div class="site-language">
                            <div class="site-language-not-login" style="display: flex;">
                                <p style="line-height: 58px;font-weight: 500;color: #777;font-size: 15px;"
                                   class="hidden-xs hidden-sm">Site language:</p>
               
                                <span class="language-selected-header">English</span>
                                <span class="fa fa-angle-down narrow-down-icon" onclick="onClickShowLanguage();"></span>
            
                                <ul id="english-list-panel" class="dropdown-menu top right"
                                    style="left: auto;margin-bottom: 10px;-webkit-animation-duration: .2s;-moz-animation-duration: .2s;-o-animation-duration: .2s;animation-duration: .2s;-webkit-animation-fill-mode: both;-moz-animation-fill-mode: both;-o-animation-fill-mode: both;animation-fill-mode: both;-moz-animation-name: fadeInUp;-o-animation-name: fadeInUp;-webkit-animation-name: fadeInUp;animation-name: fadeInUp">
                                    <li class="">
                                        <a href="">English</a>
                                    </li>
                                    <li class="">
                                        <a href="">中文简体</a>
                                    </li>
                                    <li class="">
                                        <a href="">中文繁體</a></li>
                                    <li class="">
                                        <a href="" ng-bind="item.name" ng-click="useLang(item)">Español</a>
                                    </li>
                                    <li class="">
                                        <a href="">Français</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="hidden-lg menu-button-xs">
                                <button type="button" onclick="" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-menu-mobile" style="border: none;margin: 0px;padding:0px;height: 56px;width: 56px">
                                    <span class="sr-only">Toggle navigation</span> 
                                    <i class="fa fa-bars" style="font-size: 24px;width: 24px;opacity: .87;line-height: 56px"></i>
                                </button>
                            </div>
                        </div>
                        <div class="find-teacher hidden-xs" style="display: flex;">
                        <span class="fa fa-search header-icon-style"
                              style="font-size: 24px;vertical-align: middle;line-height: 58px !important;"></span>
                            <span class="title">FIND A TEACHER</span>
                        </div>

                        <div class="community hidden-xs" style="cursor:  pointer;" onclick="onClickCommunity()">
                            <span class="fa fa-globe header-icon-style"
                                  style="font-size: 24px;vertical-align: middle;line-height: 58px;"></span>
                            <span class="title">COMMUNITY</span>
							<div class="container" style="position: absolute !important; left:0; right: 0;">
                            <ul id="community-panel" class="dropdown-menu right dropdown-notification" role="menu" style="right: 180px; left: unset;">
                                <li>
                                    <a href="/articles">Articles</a>
                                </li>
                                <li>
                                    <a href="/notebooks">Notebook</a>
                                </li>
                                <li>
                                    <a href="/questions">Answers</a>
                                </li>
                                <li>
                                    <a href="/discussions">Discussions</a>
                                </li>
                                <li>
                                    <a href="/partners">Language Partners</a>
                                </li>
                                <li>
                                    <a href="/languagehacking">Language Hacking</a>
                                </li>
                            </ul>
							</div>
                        </div>

                        <div class="action hidden-xs hidden-sm" style="display: flex;">
                            <a class="btn btn-action" href="/login">LOG IN</a>
                            <a style="margin-left: 10px;" class="btn btn-action btn-red" href="/register">SIGN UP
                            </a>
                        </div>

                    </div>
                </div>

                <nav id="nav-menu-mobile" class="nav-sm hidden-sm hidden-lg" role="navigation" style="top: 56px;">
                    <div class="nav-bg" kp-toggle-slide-out=""></div>
                    <div class="nav-content panel text-white" style="background: white;border-top: 2px solid rgba(0, 0, 0, 0.27)">
                        <div class="nav-menu-wrapper">
                            <div style="font-size: 14px;padding: 0px;color: #000000">
                                <div class="row lab2" ui-sref="landing" kp-toggle-slide-out="" href="/home">
                                    <div class="col-xs-12" style="margin: 0px;padding: 0px">
                                        <span>Home</span>
                                    </div>
                                </div>
                                <div class="row lab2" ui-sref="signup" kp-toggle-slide-out="" href="/signup">
                                    <div class="col-xs-12" style="margin: 0px;padding: 0px">
                                        <span>Sign Up</span>
                                    </div>
                                </div>
                                <div class="row lab2" ui-sref="signin" kp-toggle-slide-out="" href="/signin">
                                    <div class="col-xs-12" style="margin: 0px;padding: 0px">
                                        <span>Log In</span>
                                    </div>
                                </div>
                                <div id="find-a-teacher" class="row lab3" ui-sref="teachers" kp-toggle-slide-out="" style="height: 48px;border-bottom: 1px solid #d9d9d9;" href="/teachers">
                                    <div class="col-xs-3" style="padding: 0px;margin:0px;width: 56px">
                                        <span class="fa fa-search" style="font-size: 19px;color: #FF4338;line-height: 48px"></span>
                                    </div>
                                    <div class="col-xs-9" style="padding: 0px">
                                        <span style="color: red;line-height:  48px;">Find a Teacher</span>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="row" style="margin: 0px;height: 48px;padding: 12px 16px">
                                        <div class="col-xs-3" style="padding: 0px;width: 56px;margin: 0px">
                                            <span class="fa fa-globe" style="font-size: 19px;color: black;opacity: 0.54"></span>
                                        </div>
                                        <div class="col-xs-9" style="padding: 0px;margin: 0px" ng-click="isCommunity = !isCommunity">
                                            <div>
                                                <span>Community</span> 
                                                <span ng-show="!isCommunity" class="fa fa-angle-down" style="float: right; font-size: 24px;"></span> 
                                                <span ng-show="isCommunity" class="fa fa-ii-expand-less ng-hide" style="float: right; font-size: 24px;"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row collapse" collapse="!isCommunity" style="color: rgb(119, 119, 119); width: 100%; height: 0px;" aria-expanded="false" aria-hidden="true">
                                    <div class="col-xs-9" kp-toggle-slide-out="" style="float: right">
                                        <div style="line-height: 48px;height: 48px">
                                            <p style="margin:0px" href="/articles">Articles</p>
                                        </div>
                                        <div style="border-top: 1px solid #dddddd;line-height: 48px;height: 48px">
                                            <p style="margin:0px" href="/notebooks">Notebook</p>
                                        </div>
                                        <div style="border-top: 1px solid #dddddd;line-height: 48px;height: 48px">
                                            <p style="margin:0px" href="/questions">Answers</p>
                                        </div>
                                        <div style="border-top: 1px solid #dddddd;line-height: 48px;height: 48px">
                                            <p style="margin:0px" href="/discussions">Discussions</p>
                                        </div>
                                        <div style="border-top: 1px solid #dddddd;line-height: 48px;height: 48px">
                                            <p style="margin:0px" href="/partners">Language Partners</p>
                                        </div>
                                        <div style="border-top: 1px solid #DDDDDD;line-height: 48px;height: 48px">
                                            <p href="/languagehacking">Language Hacking</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
        </nav>
        @endif

    </div>


</div>

@yield('content')

@include('partials.footer')
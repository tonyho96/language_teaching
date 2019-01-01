@extends('layouts.frontend')
@section('content')
<div id="message-parent" tabindex="-1" role="dialog" class="modal fade message-dialog message-layer in" aria-hidden="true" modal-animation-class="fade">
        <div class="modal-dialog" role="document">
            <div class="instant-tips">
                <div></div>
            </div>
            <div class="modal-content" modal-transclude="">
                <div class="modal-header" style="height: 50px;background: #f8f8f8;padding-top:10px;">
                    <button type="button" class="close btn-close-message-dialog" data-dismiss="modal">×</button>
                    <a class="pull-right icon_com icon_markread">&nbsp;</a>
                    <button type="button" class="btn btn-sm btn-composer-message pull-right hidden-phone" style="margin-right: 15px">
                        <span class="btn-txt ">Compose New Message</span>
                    </button>
                    <h4 class="modal-title text-bold">Messages</h4>
                </div>
                <div class="modal-list2">
                    <div class="panel-body" style="border-bottom: 1px #e4e4e4 solid">
                        <form class="ng-pristine ng-valid">
                            <input type="text" placeholder="Search by name" autofocus="" class="form-control no-boder-radius">
                        </form>
                    </div>
                    <div class="widget-notifications notifications-list loading-layout">
                        <div class="noresult-text text-lg text-center text-muted ng-hide" style="">
                            <img class="rounded" src="/front/images/icon_norecord.png"><br>
                            <span>Nothing found.</span>
                        </div>
                        <div class="">
                            <div class="notification notification-item yes-cursor cursor-over bg-info ng-hide" style="">
                                <div class="notification-description text-center" style="color:#fff">You have  new lesson messages</div></div>
                                <div class="notification notification-item yes-cursor cursor-over bg-info ng-hide" style="">
                                <div class="notification-description text-center" style="color:#fff">You have  new package messages</div>
                            </div>
                            <div class="notification notification-item yes-cursor cursor-over unread">
                                <div>
                                    <img alt="" class="notifications-avatar img-circle" src="https://imagesavatar-static01.italki.com/T0_Avatar.jpg"><div class="notification-description"><strong ng-bind="msg.oppo_user_obj.nickname">Administrator</strong> <span class="thread-time" am-time-ago="msg.create_time">15 days ago</span> <!-- ngIf: msg.unread_count>0 -->
                                    <span class="badge bg-danger no-border">1</span><br>
                                    <span class="thread-title">
                                        <span>Welcome to italki! In the upcoming weeks we'll send you tips on
                                                how to get started learning and practicing a language! Learn a Language. 
                                            Find a professional teacher (to get language lessons)Pra...</span>
                                    </span>
                                </div>
                            </div>
                            <div class="delete-all-dropdown-parent" style="z-index: inherit">
                                <ul id="delete-message-box" class="delete-single-message delete-message-hide-dropdown dropdown-menu right">
                                    <li>
                                        <a style="white-space:inherit !important">Delete all messages with this person</a>
                                    </li>
                                </ul>
                                <span class="fa fa-trash-o yes-cursor pull-right notification-icon" onclick="deleteMessageOfPerson()" style="cursor: pointer;margin-right: 20px;font-size: 20px;"></span>
                            </div>
                        </div>
                    </div>
                        <aside class="text-center ng-hide" style="">
                            <button class="btn btn-labeled btn-block" stext="MH046">
                                <span class="btn-txt">Show More</span>
                                <span class="loader">
                                    <span class="loader_"></span>
                                </span>
                            </button>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="dashboard-page">
            @if (Session::has('message'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <p><i class="icon fa fa-check"></i>{{Session::get('message')}}</p>
                </div>
            @endif
            <div class="container">
                <div class="left-menu col-md-3">

                    <div class="grid-gutter-margin-b">
                        <div class="row">
                            <div class="col-xs-4">
                                <img ng-src="/static/images/no_pic150.jpg" class="rounded yes-cursor" title="View Profile"
                                     style="width: 100%"
                                     src="/front/images/dashboard/no_pic150.jpg">
                            </div>
                            <div class="col-xs-8 nickname">
                                <strong class="yes-cursor" title="View Profile">
                                    @if(isset($user->full_name))
                                        {{$user->full_name}}
                                    @endif
                                </strong>
                                <br>
                                <label class="">
                                    {{--<span class="text-up">23:30</span>--}}
                                    {{--<span>(UTC+07:00)</span>--}}
                                    <span class="text-up">{{$time_by_timezone}}</span>
                                    <span>({{$user->time_zone}})</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-dark widget-profile">
                        <div class="list-group">
                            <font class="list-group-item">
                                <span class="yes-cursor">
                                    <i class="fa fa-database"></i> &nbsp; 
                                    <strong>$@if(isset($user->current_balance))${{$user_cash->current_balance}}@else
                                            0.00 @endif&nbsp;{{$money_name}}</strong>
                                </span>
                                <i class="fa fa-shopping-cart pull-right yes-cursor" title="Buy Credits"></i>
                            </font>
                            <a class="list-group-item">
                                <i class="fa fa-cog"></i> &nbsp;
                                <span class="">Edit Profile</span>
                            </a>
                        </div>
                    </div>
                    <div class="panel no-border loading-layout" style="min-height: 100px">
                        <div class="panel-body">
                            <h5 class="no-margin-t text-bold">This Month</h5>
                            <p class="">
                                <span>Completed lessons</span>
                                <a class="pull-right">
                                    <span class="badge">0</span>
                                </a>
                            </p>
                            <p class="">
                                <span>Notebook entries</span>
                                <a class="pull-right">
                                    <span class="badge">0</span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="panel no-border visible-desktop">
                        <div class="panel-body">
                            <p>Earn $10 in italki credits for every friend that you invite.</p>
                            <button class="btn btn-block invite-friend-btn">Invite a friend</button>
                        </div>
                    </div>

                    <div class="panel no-border visible-desktop">
                        <div class="panel-body">
                            <h5 class="no-margin-t text-bold">Quick Links</h5>
                            <ul class="no-grid-gutter-h">
                                <li>
                                    <a target="_Blank">How do I schedule a lesson with a teacher?</a>
                                </li>
                                <li>
                                    <a target="_Blank">How do I buy italki Credits?</a>
                                </li>
                                <li>
                                    <a target="_Blank">what are italki Credits?</a>
                                </li>
                                <li>
                                    <a target="_Blank">Become a Teacher on italki</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="right-menu col-md-9">
                    <div class="panel loading-layout mySession">
                        <div class="panel-body no-padding-b">
                            <h4 class="no-margin-t">My Lessons</h4>
                            <div></div>
                            <div class="">
                                <div>
                                    <div class="">
                                        <div class="dropzone grid-gutter-margin-b">
                                            <div class="dropzone-message text-center">
                                                <p class="text-slg text-slim" style="color: #777;"> Lessons</p>
                                                <div class="row">
                                                    <div class="col-md-6 text-center yes-cursor">
                                                        <img src="/front/images/dashboard/proff.png">
                                                        <h3 class="middle-title">Professional Teachers</h3>
                                                        <span class="text-lb description-title">Trained to teach a foreign language to non-native speakers.
                                                        Have a certificate or degree in education.
                                                    </span>
                                                    </div>
                                                    <div class="col-md-6 text-center yes-cursor">
                                                        <img src="/front/images/dashboard/tutor.png">
                                                        <h3 class="middle-title">Community Tutors</h3>
                                                        <span class="text-lb description-title">Provide speaking practice. Passionate about sharing their native language.

                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
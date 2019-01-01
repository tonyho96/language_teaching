@extends('layouts.frontend')
@section('content')
<div id="modal-parent" tabindex="-1" role="dialog" class="modal fade message-dialog message-layer in" aria-hidden="true" modal-animation-class="fade">
    <div class="schedule-lession-modal">
        <div class="modal-dialog" id="schedule-lesson-modal-dialog">
            <div class="instant-tips">
                <div kp-instant-modal-tips="">
                
                </div>
            </div>
            <div class="modal-content" modal-transclude="">
                <div class="schedule-lession-modal-header">
                    <button type="button" class="close" aria-hidden="true" style="font-size: 30px;" data-dismiss="modal">×</button>
                    <i class="fa fa-angle-left back-to-schedule-lession" onclick="onBackToScheduleLession()" style="display: none;"></i>&nbsp;&nbsp;
                    <span class="schedule-lession-title">Schedule Lesson</span>
                </div>
                <div class="schedule-lession-modal-body no-padding-hr no-padding">
                    <div class="tab-content tab-content-bordered no-border checkout-phone-view1" style="background: #efefef">
                        <div class="grid-gutter-margin-b session_nav">
                            <div class="layer">
                                <ul class="list-active-option">
                                    <li class="first current" id="language-courses-select" onclick="onBackToScheduleLession()">
                                        <div id="language-courses-div">Language &amp; Courses</div>
                                    </li>
                                    <li class="last" id="lession-option-select">
                                        <div id="lession-option-div">Lesson Options</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="select-schedule-lesson">
                            <div class="grid-gutter-margin-b">
                                <div class="text-center">
                                    <h4 class="text-bold">1. Please select language</h4>
                                    <div class="party-size-picker dtp-picker-selector select-native db" style="width: 100%; background: #fff">
                                        <select class="form-control" style="text-align: center;text-align-last: center;">
                                            <option value="0" selected="selected" label="Vietnamese">Vietnamese</option>
                                            <option value="1" label="English">English</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div>
                                <div class="text-center">
                                    <h4 class="text-bold">2. Please choose a course or service</h4>
                                    <div class="panel loading-layout no-margin-b" style="height: auto;overflow-y: hidden;min-height: 350px">
                        
                                        <div class="panel-body no-padding-vr">
                                            <h5 class="text-light-gray" style="font-weight: bold;">Informal Tutoring</h5>
                                            <div class="well yes-cursor cursor-over text-center is-relative course-or-service">
                                                <div class="" onclick="onSelectCourse()">
                                                    <strong class="text-lb">Informal Tutoring: Vietnamese</strong>
                                                    <br>
                                                    <span class="text-muted" ></span>
                                                </div>
                                                <div class="check">
                                                    <i class="fa fa-check text-lb"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-body no-padding-vr">
                                            <hr class="no-padding no-margin">
                                            <h5 class="text-light-gray" style="font-weight: bold;">Trial Lesson</h5>
                                            <div class="well yes-cursor cursor-over text-center is-relative course-or-service">
                                                <div class="" onclick="onSelectCourse()">
                                                    <strong class="text-lb">30 minute trial lesson</strong>
                                                </div>
                                                <div class="check">
                                                    <i class="fa fa-check text-lb"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                            <div  id="choose-course" style="display:none">
                                <div class="text-center">
                                    <h4 class="text-bold">3. Select lesson length</h4>
                                    <div class="panel">
                                        <div class="panel-body no-padding-b">
                                            <div class="row">
                                                <div class="col-md-6 col-xs-6 price-item-block" onclick="selectPriceOption(this)">
                                                    <div class="well yes-cursor cursor-over text-center is-relative lession-price-block">30 minutes<br>
                                                    <strong class="text-lb">$6.00 USD</strong>
                                                    <div class="check">
                                                        <i class="fa fa-check text-lb"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xs-6 price-item-block" onclick="selectPriceOption(this)">
                                                <div class="well yes-cursor cursor-over text-center is-relative lession-price-block">45 minutes<br>
                                                    <strong class="text-lb">$8.00 USD</strong>
                                                    <div class="check">
                                                        <i class="fa fa-check text-lb"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xs-6 price-item-block" onclick="selectPriceOption(this)">
                                                <div class="well yes-cursor cursor-over text-center is-relative lession-price-block">60 minutes<br>
                                                    <strong class="text-lb">$10.00 USD</strong>
                                                    <div class="check">
                                                        <i class="fa fa-check text-lb"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xs-6 price-item-block" onclick="selectPriceOption(this)">
                                                <div class="well yes-cursor cursor-over text-center is-relative lession-price-block">90 minutes<br>
                                                    <strong class="text-lb">$15.00 USD</strong>
                                                    <div class="check">
                                                        <i class="fa fa-check text-lb"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <h4 class="text-bold">4. Select single lesson or package</h4>
                                    <div class="panel no-margin">
                                        <div class="panel-body no-padding-b">
                                            <div class="row">
                                                <div class="col-md-6 col-xs-6 single-lesson-item-block" onclick="selectSingleLessonOption(this)">
                                                    <div class="well yes-cursor cursor-over text-center is-relative lession-price-block" style="padding: 5px 10px">Single Lesson<br>
                                                        <strong class="text-lb">$ 8.00 USD</strong>
                                                        <div class="single-check">
                                                            <i class="fa fa-check text-lb"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xs-6 single-lesson-item-block" onclick="selectSingleLessonOption(this)">
                                                    <div class="well yes-cursor cursor-over text-center is-relative lession-price-block" style="padding: 5px 10px">5 x 45 minutes<br>
                                                    <strong class="text-lb">$ 12.00 USD</strong>
                                                    <span class="is-absolute label label-danger text-up" style="right:-10px; top:-10px;position:absolute;font-size:13px;">SAVE 13%</span>
                                                    <div class="single-check">
                                                        <i class="fa fa-check text-lb"></i>
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
                <div id="checkout-price-panel" class="checkout-phone-view" style="box-shadow: 0px -1px 5px rgba(0,0,0,0.3);display:none">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-7 col-xs-7">
                                <div class="checkout-phone-border" style="padding: 5px 0">
                                    <h4 class="no-margin text-bold">Checkout</h4>
                                    <span class="text-lb">Informal Tutoring: Vietnamese</span><br>
                                    <span class="text-muted">Vietnamese</span>
                                </div>
                            </div>
                            <div class="col-md-5 col-xs-5 text-center">
                                <h5 class="no-margin text-bold">Total Price</h5>
                                <strong class="text-lg">$10.00</strong> USD 
                                <button id="checkout-and-schedule" class="btn btn-block btn-checkout-schedule">Checkout and Schedule</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<div id="contact-teacher-dialog" tabindex="-1" role="dialog" class="modal fade message-dialog message-layer in no-border-radius" aria-hidden="true" modal-animation-class="fade">
    <div class="modal-content contact-teacher-dialog" modal-transclude="">
        <form>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Contact
                <span id="sm_nickname"></span>&nbsp;<span ng-bind="teacher.nickname">Nguyen Tran Trang</span>
            </h4>
            </div>
            <div class="modal-body padding-bottom">
                <div class="note note-info no-border">
                    <strong class="font-size-dialog">You must purchase credits to schedule a lesson with a teacher</strong>
                    <ul class="no-grid-gutter-h no-margin-b">
                        <li>
                            <a href="#" target="_blank" class="font-size-dialog">How do I buy italki Credits?</a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="font-size-dialog">How do I schedule a lesson?</a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="font-size-dialog">Knowledge base and other FAQs</a>
                        </li>
                    </ul>
                </div>
                <div class="form-group no-margin-hr">
                    <label class="control-label font-size-dialog">What is the main reason you're taking lessons?</label>
                    <select class="form-control no-border-radius">
                        <option value="" selected="selected">Choose...</option>
                        <option value="1">School</option>
                        <option value="2">Test</option>
                        <option value="3">Work</option>
                        <option value="4">Travel</option>
                        <option value="5">Personal interest</option>
                        <option value="6">Lessons are for my child</option>
                        <option value="7">Other</option>
                    </select>
                    <span class="help-block ng-hide" style="">Required field can not be left blank</span>
                </div>
                <div class="form-group no-margin-hr">
                    <label class="control-label font-size-dialog">What type of lesson are you interested in?</label>
                    <select class="form-control no-border-radius">
                        <option value="" selected="selected">Choose...</option>
                        <option value="1">Conversation practice</option>
                        <option value="2">Speaking/Listening/Pronunciation</option>
                        <option value="3">Writing/Reading</option>
                        <option value="4">General Language Learning</option>
                        <option value="5">Specific request</option>
                    </select>
                    <span class="help-block ng-hide" style="">Required field can not be left blank</span>
                </div>
                <div class="form-group no-margin-hr">
                    <label class="control-label font-size-dialog">How often are you planning to take lessons?</label>
                    <select class="form-control no-border-radius">
                        <option value="" selected="selected">Choose...</option>
                        <option value="1">1 lesson every 2 weeks</option>
                        <option value="2">1 lesson a week</option>
                        <option value="3">2 lessons a week</option>
                        <option value="4">3+ lessons a week</option>
                    </select>
                    <span class="help-block ng-hide" style="">Required field can not be left blank</span>
                </div>
                <div class="form-group no-margin-hr">
                    <label class="control-label font-size-dialog">Please write a short introduction about yourself, including your learning goals.</label>
                    <textarea name="intro" rows="3" required="" maxlength="1700" class="form-control no-border-radius"></textarea>
                <span style="float:right">1700</span> 
                <span class="help-block ng-hide" style="">Required field can not be left blank</span>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-send no-border-radius">Send</button>
        </div>

        </form>
    </div>
</div>

<div id="view-schedule-dialog" tabindex="-1" role="dialog" class="modal fade message-dialog message-layer in no-border-radius" aria-hidden="true" modal-animation-class="fade">
    <div class="modal-content view-schedule-dialog" modal-transclude="">
        <!-- <div> -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" ng-click="$close()">×</button>
                <h4 class="modal-title" id="myModalLabel">View schedule</h4>
                </div>
                <div class="modal-body">
                    <div class="checkout-phone-view2">
                        <p class="text-center">All times listed are in your local timezone</p>
                        <div class="cal availability loading-layout">
                            <div class="controls">
                                <a class="prev">
                                    <i class="fa fa-angle-left text-lg"></i>
                                </a>
                                <div class="title">
                                    <span style="cursor: pointer" class="">Sep 22 - 28, 2018</span>
                                </div>
                                <a class="next holder-position ng-hide">&nbsp;</a> 
                                <a class="next">
                                    <i class="fa fa-angle-right text-lg"></i>
                                </a>
                            </div>
                            <div class="">
                                <div class="top">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="small">UTC+07:00</td>
                                                <td class="">Sat 09/22</td>
                                                <td class="">Sun 09/23</td>
                                                <td class="">Mon 09/24</td>
                                                <td class="">Tue 09/25</td>
                                                <td class="">Wed 09/26</td>
                                                <td class="">Thu 09/27</td>
                                                <td class="">Fri 09/28</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="week">
                                    <table class="hour" cellpadding="0">
                                        <tbody>
                                            <tr class="falseSelectable">
                                                <td class="small">12:00 AM</td>
                                                <td class="major">
                                                    <div class="hour-block hour-select-selected"></div>
                                                    <div class="hour-block hour-select-selected"></div>
                                                    <div class="hour-block hour-select-selected"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                </td>
                                            </tr>
                                            <tr class="falseSelectable">
                                                <td class="small"></td>
                                                <td class="major">
                                                    <div class="hour-block hour-select-selected"></div>
                                                    <div class="hour-block hour-select-selected"></div>
                                                    <div class="hour-block hour-select-selected"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block hour-select-selected"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                </td>
                                            </tr>

                                            <tr class="falseSelectable">
                                                <td class="small">1:00 AM</td>
                                                <td class="major">
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block hour-select-selected"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                </td>   
                                            </tr>
                                            <tr class="falseSelectable">
                                                <td class="small"></td>
                                                <td class="major">
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                </td>
                                            </tr>
                                            <tr class="falseSelectable">
                                                <td class="small">2:00 AM</td>
                                                <td class="major">
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block hour-select-selected"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                </td>   
                                            </tr>
                                            <tr class="falseSelectable">
                                                <td class="small"></td>
                                                <td class="major">
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                </td>
                                            </tr>
                                            <tr class="falseSelectable">
                                                <td class="small">3:00 AM</td>
                                                <td class="major">
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block hour-select-selected"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                </td>   
                                            </tr>
                                            <tr class="falseSelectable">
                                                <td class="small"></td>
                                                <td class="major">
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                </td>
                                            </tr>
                                            <tr class="falseSelectable">
                                                <td class="small">4:00 AM</td>
                                                <td class="major">
                                                    <div class="hour-block hour-select-selected"></div>
                                                    <div class="hour-block hour-select-selected"></div>
                                                    <div class="hour-block hour-select-selected"></div>
                                                    <div class="hour-block hour-select-selected"></div>
                                                    <div class="hour-block hour-select-selected"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                </td>   
                                            </tr>
                                            <tr class="falseSelectable">
                                                <td class="small"></td>
                                                <td class="major">
                                                    <div class="hour-block hour-select-selected"></div>
                                                    <div class="hour-block hour-select-selected"></div>
                                                    <div class="hour-block hour-select-selected"></div>
                                                    <div class="hour-block hour-select-selected"></div>
                                                    <div class="hour-block hour-select-selected"></div>
                                                    <div class="hour-block"></div>
                                                    <div class="hour-block"></div>
                                                </td>
                                            </tr>
                                           
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <div class="top">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="small">UTC+07:00</td>
                                                <td class="">Sat 09/22</td>
                                                <td class="">Sun 09/23</td>
                                                <td class="">Mon 09/24</td>
                                                <td class="">Tue 09/25</td>
                                                <td class="">Wed 09/26</td>
                                                <td class="">Thu 09/27</td>
                                                <td class="">Fri 09/28</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="modal-footer hidden-xs">
                    <span class="pull-left" style="display: none">All times listed are in your local timezone <mark>SE Asia Standard Time (UTC+07:00)</mark>
                    </span> 
                    <button type="button" class="btn btn-view-profile">
                        <span class="btn-txt">View Teacher Profile</span>
                    </button> 
                    <button type="button" class="btn btn-schedule-lesson">
                        <span class="btn-txt">Schedule Lesson</span>
                    </button>
                </div>
                <div class="checkout-lesson-phone hidden-md hidden-lg col-xs-12" style="background: white;">
                    <span class="pull-left" style="display: none">All times listed are in your local timezone <mark>SE Asia Standard Time (UTC+07:00)</mark>
                    </span> 
                    <button type="button" class="btn btn-view-profile col-xs-12">
                        <span class="btn-txt">View Teacher Profile</span>
                    </button> 
                    <button type="button" class="btn btn-schedule-lesson col-xs-12 margin-top-xs-phone" style="margin-bottom:  20px !important;">
                        <span class="btn-txt">Schedule Lesson</span>
                    </button>
                </div>
            </div>
        <!-- </div> -->
</div>

    <div class="profile-container" style="height: 300px">
            
    </div>
    
    <div id="dashboard-page" class="container" style="margin-top: -285px;">
       
        <div class="teacher-size col-md-9 no-padding-lr-phone" style="margin-top: 25px;">
            <div class="grid-gutter-margin-b col-md-12 switch-to-profile no-padding-lr-phone" style="margin-bottom:  0px;padding-left: 0px;">
                <button type="button" class="btn btn-outline btn-xs switch-user-profile-btn btn-fullwith-phone">SWITCH TO USER PROFILE</button>
            </div>
        </div>

        <div class="left-menu col-md-8 no-padding-lr" style="padding-right: 20px;">
            <!-- Start Teacher list -->
            <div class="teacher-list col-md-12" style="background:  #F1F1F1;">
                <div class="video-wrapper row">
                    <div class="video-box" style="margin-bottom: -5px;">
                        <video style="height:  100%;width:  100%;" poster="https://v.italki.cn/xitalki100010209.jpg"
                            class="has-media-controls-hidden" controls>
                            <source src="https://v.italki.cn/xitalki100010209.mp4" type="video/mp4">
                        </video>
                        <div class="play-pause"></div>
                    </div>
                </div>
                <div class="teacher-profile-page" style="padding-top:  0px !important;">
                    <div class="row" style="background: white;">
                        <div class="col-md-3">
                            <div class="item-icon item-icon-relative icon-md">
                                <div class="online-layout1 hidden-xs hidden-sm hidden-md hidden-lg">
                                    <div class="offline online" title="Online"></div>
                                </div>
                                <a href="/teacher/3621699">
                                    <img class="teacher-avatar teacher-avatar-md"
                                         src="https://imagesavatar-static01.italki.com/T051651290_Avatar.jpg" width="50"
                                         class="rounded" border="0"></a>
                            </div>
                            <p class="text-muted text-icon-md">
                                <i class="fa fa-map-marker"></i> 
                                <span class="">Saigon,</span> Vietnam<br>
                                <span tooltip="(UTC+07:00) Thailand Time">14:20&nbsp;UTC+07:00</span>
                            </p>
                        </div>
                        <div class="col-xs-12 col-md-9" style="padding-right:  0px;padding-left:  11px;">
                            <ul class="media-heading list-inline">
                                <li>
                                    <a class="teacher-nickname text-lg">Nguyen Tran Trang</a>
                                </li>
                            </ul>
                            <p class="text-light-gray">
                                <i class="fa fa-circle online-status online"></i>
                                <span class="text-success">Online</span>
                            </p>
                            <ul class="media-heading list-inline" style="display:  inline-flex;">
                                <li class="color-pro">
                                    <i class="fa fa-home" title="Community Tutor" style="vertical-align: middle"></i>&nbsp;
                                    <span style="vertical-align: middle">Community Tutor</span>
                                </li>
                                <br class="show-br">
                                <li><span class="">From Saigon, Vietnam
                                        <span>,&nbsp;</span>
                                    </span>
                                </li>
                                <li></li>
                            </ul>

                            <p class="" style="font-size: 19px;font-weight: bold;">Teaches Vietnamese, English</p>
                            <ul class="profile_card list-inline">
                                <li>
                                    <div class="info"><span class="text-muted">Rating</span><br>
                                        <strong class="pull-right text-lg">5.0</strong>
                                        <div class="" style="padding: 7px 0 8px">
                                                    <span style="color:#ffc237" class="rate text-xs ng-valid"
                                                          readonly="readonly" state-on="'fa fa-star text-xs'"
                                                          state-off="'fa fa-star-o  text-xs'" title="5.0">
                                                    <span class="sr-only">(*)</span>
                                                    <i class="glyphicon fa text-xs fa-star" title="one"></i><span
                                                                class="sr-only">(*)</span>
                                                    <i class="glyphicon fa text-xs fa-star" title="two"></i><span
                                                                class="sr-only">(*)</span>
                                                    <i class="glyphicon fa text-xs fa-star" title="three"></i><span
                                                                class="sr-only">(*)</span>
                                                    <i class="glyphicon fa text-xs fa-star" title="four"></i><span
                                                                class="sr-only">(*)</span>
                                                    <i class="glyphicon fa text-xs fa-star" title="five"></i>
                                                    </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="padding-right-sm">
                                    <div class="info padding-right-sm ">
                                        <span class="text-muted">Students</span><br>
                                        <strong class="text-lg">21</strong>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <span class="text-muted">Lessons</span><br>
                                        <strong class="text-lg">70</strong>
                                    </div>
                                </li>
                                <li class="padding-right-sm">
                                    <div class="info">
                                        <div style="padding:4px 0px 5px 0px">
                                            <img ng-src="/front/images/teacher-profile/icon_webcam_available.png"
                                                 tooltip="Video available" src="/front/images/teacher-profile/icon_webcam_available.png">
                                        </div>
                                        <span class=""><img title="Skype" src="/front/images/teacher-profile/icon_skype.png">&nbsp;</span>
                                        <span class=""><img title="Facetime" src="/front/images/teacher-profile/icon_facetime.png">&nbsp;</span>
                                    </div>
                                </li>
                            </ul>

                            <div style="top:0; right:0;position: absolute;" class="hidden-phone">
                                <button class="btn btn-xs background-template" title="Bookmark" style="height: 25px;">
                                    <i class="fa fa-heart text-sm"></i>&nbsp;Bookmark
                                </button>
                                <button type="button" class="btn btn-xs dropdown-toggle background-template">
                                    <i class="fa fa-share-alt"></i>
                                </button>
                                <button type="button" class="btn btn-xs dropdown-toggle background-template">
                                    <i class="fa fa-ellipsis-h"></i>
                                </button>
                            </div>
                        </div>

                        <div class="teacher-profile-skill col-md-12" style="margin-bottom: 30px;">
                            <hr style="opacity: 0.1;border-color: #000">
                            <div class="">
                                <ul class="list-inline m-r-3">
                                    <li>
                                        <strong>Language Skills</strong>:
                                    </li>
                                    <li class="">Vietnamese
                                        <span class="l-level l-level7" title="Native"></span>
                                        <span>,</span>
                                    </li>
                                    <li class="">English
                                        <span class="l-level l-level6" title="C2:Proficient"></span>
                                        <span class="ng-hide">,</span>
                                    </li>
                                </ul>

                                <ul class="list-inline m-r-3">
                                    <li>
                                        <strong>Teaching Specialities</strong>:
                                    </li>
                                    <li class="">
                                        <a href="" tooltip="I have experience teaching absolute beginners."
                                           class="label label-tags">Beginners</a>
                                    </li>
                                    <li class="">
                                        <a href="" tooltip="I have experience teaching teenagers (13-17)."
                                           class="label label-tags">Teenagers</a>
                                    </li>

                                    <li class="">
                                        <a href="" tooltip="I have experience teaching the language for business."
                                           class="label label-tags">Business</a>
                                    </li>
                                </ul>
                                <ul class="list-inline m-r-3">
                                    <li><strong>Personal tags</strong>:</li>
                                    <li class="personal-tag">
                                        <a href="" class="label label-tags profile-personal-tags">Prepared</a>
                                    </li>
                                    <li class="personal-tag">
                                        <a href="" class="label label-tags profile-personal-tags">Punctual</a>
                                    </li>
                                    <li class="personal-tag">
                                        <a href="" class="label label-tags profile-personal-tags">Supportive</a></li>
                                    <li class="personal-tag">
                                        <a href="" class="label label-tags profile-personal-tags">Attentive</a>
                                    </li>
                                    <li class="personal-tag">
                                        <a href="" class="label label-tags profile-personal-tags">Enthusiastic</a></li>
                                    <li class="personal-tag">
                                        <a href="" class="label label-tags profile-personal-tags">Honest</a>
                                    </li>
                                    <li class="personal-tag">
                                        <a href="" class="label label-tags profile-personal-tags">Likeable</a>
                                    </li>
                                    <li class="personal-tag">
                                        <a href="" class="label label-tags profile-personal-tags">Empathic</a>
                                    </li>
                                    <li class="personal-tag">
                                        <a href="" class="label label-tags profile-personal-tags">Engaging</a>
                                    </li>
                                    <li class="personal-tag">
                                        <a href="" class="label label-tags profile-personal-tags">Fun</a>
                                    </li>
                                </ul>
                                <p><strong>Teacher since</strong>: May 19, 2018</p>
                            </div>

                        </div>
                    </div>
                    <!-- TEacher status -->
                    <div class="row" style="margin-top:  20px;">
                        <div class="panel no-border no-border-radius">
                            <div class="panel-body">
                                <div class="no-padding-t" style="margin-bottom: 10px">
                                    <h4 class="no-margin">Teacher Status</h4>
                                    <a name="availabilityStatus-panel"></a>
                                </div>
                                <div>
                                    <div class="alert no-margin-b alert-success">
                                            <span class="comment-description">complete beginner, business, studying for tests, daily communication, 
                                                    useful and simple conversations for travelers. For English: all basic skills. 
                                                    I am available most of  the time in the moment!
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End teacher status -->


                    <!-- Teacher introduction -->
                    <div class="row">
                        <div class="teacher-introduction-panel-container">
                            <div id="teacher-introduction-item" class="teacher-introduction-panel panel no-border show-more-inactive no-border-radius">
                                <div class="panel-body">
                                    <div class="no-padding-t comment-description" style="margin-bottom: 10px">
                                        <h4 class="no-margin" style="margin-bottom: 10px !important;">About the teacher</h4>
                                        <strong class="margin-top-sm">About Me</strong>
                                        <p class="margin-top-sm">
                                            Hello everyone! My name is Trang, I'm 27 years old and I'm from Vietnam!
                                            I was born in Phu Quoc island, whose beauty should be compared with a
                                            paradise
                                            I believe, I'm proud to get to say that it is my original hometown,
                                            I have been living in Ho Chi Minh city (Saigon city) for almost 9 years now,
                                            and with no doubt, I love this city like my second home,
                                            it never stops making me feel amazed! I once decided to spend a month to
                                            travel
                                            around Vietnam when I was 22 since I love traveling! Beside it,
                                            I also love making new friends, because when we get to meet and talk to
                                            people,
                                            the world is naturally brought to us then, through other stories and
                                            experiences,
                                            I do believe so!
                                        </p>
                                        <strong>Me as a Teacher</strong>
                                        <p class="margin-top-sm">I started working as a Vietnamese and English tutor since early September
                                            last year,
                                            it has been an interesting, and wonderful experience to me personally.
                                            While helping an Australian friend study Vietnamese, I accidentally found
                                            out about my
                                            ability in teaching Languages, with the encouragement of my friend, the
                                            journey
                                            of me becoming a tutor began! I have seen myself having great passion in
                                            languages since
                                            I'm studying to become a translator and interpreter now. Always appreciate
                                            it to have
                                            a chance to introduce Vietnamese to everyone, especially to ones who are
                                            living here
                                            in the moment, so you can apply it usefully while interacting with local
                                            people, and
                                            making new local friends!
                                        </p>
                                        <strong>My Lessons &amp; Teaching Style</strong>
                                        <p class="margin-top-sm">I can teach both Vietnamese, English to teenagers and adults with quiet
                                            flexible schedules!
                                            Some students of mine, after spending a while studying in schools, centers,
                                            yet the results
                                            were not as good as they had expected, especially to those who are not into
                                            studying in a
                                            serious atmosphere! That is why I always think about teaching as providing
                                            something new and
                                            interesting to everyone. I love making students feel comfortable to speak
                                            up, a good laugh
                                            to lift up any atmosphere, and games related to studying can help everyone
                                            remember their
                                            lessons better I believe! My goal is to make everyone feel like "studying is
                                            fun", and so
                                            hope that everyone will love the language like I do too!
                                        </p>
                                        <strong>Teaching Material</strong>
                                        <ul class="">
                                            <li>PDF file</li>
                                        </ul>
                                        <ul class="">
                                            <li>Presentation slides/PPT</li>
                                        </ul>
                                        <ul class="">
                                            <li>Audio files</li>
                                        </ul>
                                        <ul class="">
                                            <li>Image files</li>
                                        </ul>
                                        <ul class="">
                                            <li>Video files</li>
                                        </ul>
                                        <ul class="">
                                            <li>Articles and news</li>
                                        </ul>
                                        <ul class="">
                                            <li>Homework assignments</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="teacher-introduction-panel-btn">
                                <a class="show-more-a" id="read-more-item" onclick="onClickReadMoreTeacherDescription()">
                                    <span class="">+ Read more</span>
                                </a>
                                <a class="show-more-a" style="display:none;" id="show-less-item" onclick="onClickShowLessTeacherDescription()">
                                    <span class="">+ Show less</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End teacher introduction -->


                    <!-- Informal Tutoring -->
                    <div class="row" id="information-tutorialing" style="margin-top:  20px;">
                        <div class="panel no-border no-border-radius">
                            <div class="panel-body">
                                <div class="grid-gutter-margin-b">
                                    <div class="no-padding-t no-padding-b">
                                        <h4 class="no-margin">Informal Tutoring</h4>
                                        <a name="offers-panel" class=""></a>
                                    </div>
                                    <div class="no-padding-t">
                                        <div class="tab-pane fade widget-followers active in">
                                            <div class="follower">
                                                <div class="row">
                                                    <div class="col-sm-8 col-md-7">
                                                        <strong>Informal Tutoring: Vietnamese</strong>
                                                        <ul class="list-inline text-muted no-margin-b">
                                                            <li>58 completed lesson(s)</li>
                                                            <li class="">
                                                                <label class="label package text-up">Package</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-4 col-md-5 text-right">
                                                        <div class="text-center dropdown" dropdown="">
                                                            <span class="text-bold">$
                                                                <span>10.00</span>
                                                            </span>&nbsp;USD per hour<br>
                                                            <button type="button" class="btn btn-sm booking-pricing-options btn-them-default">Booking &amp; Pricing options
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end ngRepeat: course in teacher.tutorCourseList -->
                                            <div class="follower">
                                                <div class="row">
                                                    <div class="col-sm-8 col-md-7">
                                                        <strong>Informal Tutoring: English</strong>
                                                        <ul class="list-inline text-muted no-margin-b">
                                                            <li>4 completed lesson(s)</li>
                                                            <li class="">
                                                                <label class="label package text-up">Package</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-4 col-md-5 text-right">
                                                        <div class="text-center dropdown" dropdown="">
                                                                <span class="text-bold">$<span>10.00
                                                                    </span>
                                                                </span>&nbsp;USD per hour<br>
                                                            <button type="button" class="btn btn-sm booking-pricing-options btn-them-default">Booking &amp; Pricing options
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <hr>
                                </div>

                                <div class="">
                                    <div class="no-padding-t no-padding-b">
                                        <h4 class="no-margin">Trial Lesson</h4>
                                    </div>
                                    <div class="no-padding-t">
                                        <div class="tab-pane fade widget-followers active in">
                                            <div class="follower">
                                                <div class="row">
                                                    <div class="col-sm-8 col-md-7">
                                                        <strong>30 minute trial lesson</strong><br>
                                                        <span class="text-muted">8 completed lesson(s)</span>
                                                    </div>
                                                    <div class="col-sm-4 col-md-5 text-center">
                                                        <span class="text-bold">$
                                                            <span>5.00</span>
                                                        </span>&nbsp;USD/lesson<br>
                                                        <button type="button" class="btn btn-sm booking-pricing-options btn-them-default">Schedule Lesson
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- End Informal Tutoring -->

                    <!--Lession History  -->
                    <div class="row">
                        <div class="panel no-border lesson-history-panel no-border-radius">
                            <div class="panel-body">
                                <h4 class="no-margin-t">Lesson History</h4>
                                <div class="">
                                    <div class="col-sm-4 text-center bar-chart-responsive-container clearfix no-padding-lr">
                                        <div class="responsive-left-panel history-vt-des">
                                            <div class="history-count">71</div>
                                            <div class="history-title">Completed lessons</div>
                                        </div>
                                        <div class="responsive-right-panel">
                                            <div class="history-bar-chart-vt">
                                                <div class="bar-number-black">0</div>
                                                <div class="bar-height" style="height:0px">
                                                    <div class="bar-item">
                                                        <div class="bar-number-white">0</div>
                                                    </div>
                                                </div>
                                                <div class="bar-number-black">0</div>
                                                <div class="bar-month">May</div>
                                            </div>

                                            <div class="history-bar-chart-vt">
                                                <div class="bar-number-black">18</div>
                                                <div class="bar-height" style="height:27px">
                                                    <div class="bar-item">
                                                        <div class="bar-number-white">18</div>
                                                    </div>
                                                </div>

                                                <div class="bar-number-black">18</div>
                                                <div class="bar-month">June</div>
                                            </div>
                                            <div class="history-bar-chart-vt">
                                                <div class="bar-number-black">27</div>
                                                <div class="bar-height" style="height:40.5px">
                                                    <div class="bar-item last-bar-height">
                                                        <div class="bar-number-white">27</div>
                                                    </div>
                                                </div>
                                                <div class="bar-number-black">27</div>
                                                <div class="bar-month">July</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 text-center bar-chart-responsive-container clearfix no-padding-lr">
                                        <div class="responsive-left-panel history-hr-des">
                                            <div class="history-count">100%</div>
                                            <div class="history-title">Response rate</div>
                                        </div>
                                        <div class="responsive-right-panel">

                                            <div class="history-bar-chart-hr">
                                                <div class="bar-month"><span>July</span>
                                                </div>
                                                <div class="bar-width-container">
                                                    <div class="bar-width last-bar-width" style="width:100%">
                                                        <div class="bar-number-white">100%</div>
                                                    </div>
                                                </div>
                                                <div class="bar-number-black">100%</div>
                                            </div>
                                            <div class="history-bar-chart-hr">
                                                <div class="bar-month">
                                                    <span>June</span>
                                                </div>
                                                <div class="bar-width-container">
                                                    <div class="bar-width" style="width:100%">
                                                        <div class="bar-number-white">100%</div>
                                                    </div>
                                                </div>
                                                <div class="bar-number-black">100%</div>
                                            </div>
                                            <div class="history-bar-chart-hr">
                                                <div class="bar-month"><span>May</span></div>
                                                <div class="bar-width-container">
                                                    <div class="bar-width" style="width:0%">
                                                        <div class="bar-number-white">0%</div>
                                                    </div>
                                                </div>

                                                <div class="bar-number-black">0%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 no-margin-b text-center bar-chart-responsive-container clearfix no-padding-lr">
                                        <div class="responsive-left-panel history-hr-des">
                                            <div class="history-count">100%</div>
                                            <div class="history-title">Attendance rate</div>
                                        </div>
                                        <div class="responsive-right-panel">
                                            <div class="history-bar-chart-hr">
                                                <div class="bar-month">July</div>
                                                <div class="bar-width-container">
                                                    <div class="bar-width last-bar-width" style="width:100%">
                                                        <div class="bar-number-white">100%</div>
                                                    </div>
                                                </div>
                                                <div class="bar-number-black">100%</div>
                                            </div>
                                            <div class="history-bar-chart-hr">
                                                <div class="bar-month">June</div>
                                                <div class="bar-width-container">
                                                    <div class="bar-width" style="width:100%">
                                                        <div class="bar-number-white">100%</div>
                                                    </div>
                                                </div>
                                                <div class="bar-number-black">100%</div>
                                            </div>
                                            <div class="history-bar-chart-hr">
                                                <div class="bar-month">May</div>
                                                <div class="bar-width-container">
                                                    <div class="bar-width" style="width:0%">
                                                        <div class="bar-number-white">0%</div>
                                                    </div>
                                                </div>
                                                <div class="bar-number-black">0%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Lession History  -->


                    <!-- Start reviews -->
                    <div class="row" id="reviews">
                        <div class="panel no-border reviews-panel no-border-radius">
                            <div class="panel-body">
                                <h4 class="no-margin-t" style="margin-bottom: 40px">Reviews</h4>
                                <a name="reviews-panel" class="reviews-panel-anchor"></a>
                                <div class="">
                                    <div class="grid-gutter-margin-b4"></div>
                                    <div class="">
                                        <hr class="filter-container-hr">
                                        <div ng-show="hideOrShowFilter">
                                            <div class="filter-label-container">
                                                <div class="filter-label-title">Lesson Language</div>
                                                <ul class="list-inline no-margin top filter-label-group">
                                                    <li>
                                                        <button class="filter-label checked">
                                                            <span>All</span>
                                                        </button>
                                                    </li>
                                                    <li class="">
                                                        <button class="filter-label">
                                                            <span>Vietnamese</span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="filter-label-container">
                                                <div class="filter-label-title">Lesson Type</div>
                                                <ul class="list-inline no-margin top filter-label-group">
                                                    <li>
                                                        <button class="filter-label checked">
                                                            <span>All</span>
                                                        </button>
                                                    </li>
                                                    <li class="">
                                                        <button class="filter-label">
                                                            <span>Informal Tutoring</span>
                                                        </button>
                                                    </li>
                                                    <li class="">
                                                        <button class="filter-label">
                                                            <span>Trial Lesson</span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="filter-control-container clearfix">
                                                <span class="sort-by-title">Sort by</span><br class="hidden-sm hidden-lg">
                                                <label class="filters_radio">
                                                    <input name="teacherLevel"style="font-size:  20px; height:  20px;width:  20px;"
                                                           type="radio" class="filters_radio_input ng-pristine ng-untouched ng-valid" value="0">
                                                    <span class="filters_radio_description">Most recent</span>
                                                </label>
                                                <!-- <label class="filters_radio"> -->
                                                    <input name="teacherLevel" style="font-size:  20px; height:  20px;width:  20px;"
                                                           type="radio" class="filters_radio_input ng-pristine ng-untouched ng-valid">
                                                    <span class="filters_radio_description">Most helpful</span>
                                                <!-- </label> -->
                                            </div>
                                        </div>

                                        <hr class="filter-container-hr">
                                        <div class="widget-comments tab-pane no-padding fade active in">
                                            <div class="no-padding-vr">
                                                <div class="comment no-padding-b">
                                                    <div class="row">
                                                        <div class="col-md-12 no-margin-b">
                                                            <a title="jeongwon" href="/user/5210893">
                                                                <img class="comment-avatar no-margin-t"
                                                                     src="/front/images/teacher-profile/no_pic75.jpg">
                                                            </a>
                                                            <div class="comment-body">
                                                                <div class="comment-by">
                                                                    <a class="text-m text-medium" title="jeongwon">
                                                                        <strong>jeongwon</strong>
                                                                    </a>
                                                                    <span class="text-muted">(3 Lessons)</span>
                                                                    <!-- end ngIf: !hasFilter -->
                                                                </div>
                                                                <div class="comment-text">
                                                                    <div class="comment-text" data="comment">
                                                                        <div>
                                                                            <ul class="list-unstyled no-margin">
                                                                                <li class="comment-body-container">
                                                                                    <ul class="list-inline">
                                                                                        <li>
                                                                                            <span class="text-medium">Vietnamese</span>
                                                                                        </li>
                                                                                        |
                                                                                        <li>
                                                                                            <span class="text-muted">Aug 18, 2018</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <div class="row">
                                                                                        <div class="col-xs-9 no-margin-b">
                                                                                        <span class="comment-description">She is a professional language teacher using various topics &amp; materials, 
                                                                                                    so i can learn Vietnamese easily and naturally! Cam on chi nhieu:)
                                                                                        </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="comment-function-panel clearfix">
                                                                                        <button class="helpful-btn">
                                                                                            <i class="fa fa-thumbs-o-up text-sm v-middle"></i>
                                                                                            <span class="v-middle">0</span>
                                                                                        </button>
                                                                                        <div class="comment-more-count">
                                                                                            <a class="">+2 More</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comment no-padding-b">
                                                    <div class="row">
                                                        <div class="col-md-12 no-margin-b">
                                                            <a title="Els Withers" href="/user/1298454">
                                                                <img class="comment-avatar no-margin-t"
                                                                     alt="Els Withers"
                                                                     src="https://imagesavatar-static01.italki.com/2T012984541_Avatar_2.jpg">
                                                            </a>
                                                            <div class="comment-body">
                                                                <div class="comment-by">
                                                                    <a class="text-m text-medium" title="Els Withers"
                                                                       href="/user/1298454">
                                                                        <strong>Els Withers</strong>
                                                                    </a>
                                                                    <span class="text-muted">(11 Lessons)</span>
                                                                </div>
                                                                <div class="comment-text">
                                                                    <div class="comment-text">
                                                                        <div>
                                                                            <ul class="list-unstyled no-margin">
                                                                                <li class="comment-body-container">
                                                                                    <ul class="list-inline">
                                                                                        <li>
                                                                                            <span class="text-medium">Vietnamese</span>
                                                                                        </li>
                                                                                        |
                                                                                        <li>
                                                                                            <span class="text-muted">Aug 17, 2018</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <div class="row">
                                                                                        <div class="col-xs-9 no-margin-b">
                                                                                            <span class="comment-description">Lessons with Trang can be very challenging but are
                                                                                                 always interesting and enjoyable.</span>

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="comment-function-panel clearfix">
                                                                                        <button class="helpful-btn">
                                                                                            <i class="fa fa-thumbs-o-up text-sm v-middle"></i>
                                                                                            <span class="v-middle">0</span>
                                                                                        </button>
                                                                                        <div class="comment-more-count">
                                                                                            <a class="">+10 More</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comment no-padding-b">
                                                    <div class="row">
                                                        <div class="col-md-12 no-margin-b">
                                                            <a title="Van" href="#">
                                                                <img class="comment-avatar no-margin-t"
                                                                     src="https://imagesavatar-static01.italki.com/T053155410_Avatar_2.jpg"></a>
                                                            <div class="comment-body">
                                                                <div class="comment-by">
                                                                    <a class="text-m text-medium" title="Van" href="#">
                                                                        <strong>Van</strong></a>
                                                                    <span class="text-muted">(6 Lessons)</span>
                                                                </div>
                                                                <div class="comment-text">
                                                                    <div class="comment-text" data="comment"
                                                                         comment="comment_obj_s">
                                                                        <div>
                                                                            <ul class="list-unstyled no-margin">
                                                                                <li class="comment-body-container">
                                                                                    <ul class="list-inline">
                                                                                        <li>
                                                                                            <span class="text-medium">Vietnamese</span>
                                                                                        </li>
                                                                                        |
                                                                                        <li>
                                                                                            <span class="text-muted">Aug 16, 2018</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <div class="row">
                                                                                        <div class="col-xs-9 no-margin-b">
                                                                                        <span class="comment-description">Time flies when learning with Trang.  I always discover fascinating things about
                                                                                                     Vietnam.  Thanks for the great lesson and looking forward to the next one!
                                                                                        </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="comment-function-panel clearfix">
                                                                                        <button class="helpful-btn">
                                                                                            <i class="fa fa-thumbs-o-up text-sm v-middle"></i>
                                                                                            <span class="v-middle">0</span>
                                                                                        </button>
                                                                                        <div class="comment-more-count">
                                                                                            <a class="">+1 More</a>

                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- <aside>
                                                                            <a>More</a>
                                                                        </aside> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="comment no-padding-b">
                                                    <div class="row">
                                                        <div class="col-md-12 no-margin-b">
                                                            <a title="甄甄Molly" href="#">
                                                                <img class="comment-avatar no-margin-t"
                                                                     src="https://imagesavatar-static01.italki.com/T052584170_Avatar_2.jpg">
                                                            </a>
                                                            <div class="comment-body">
                                                                <div class="comment-by">
                                                                    <a class="text-m text-medium" title="甄甄Molly"
                                                                       href="#">
                                                                        <strong>甄甄Molly</strong>
                                                                    </a>
                                                                    <span class="text-muted">(14 Lessons)</span>
                                                                </div>
                                                                <div class="comment-text">
                                                                    <div class="comment-text" data="comment">
                                                                        <div>
                                                                            <ul class="list-unstyled no-margin">

                                                                                <li class="comment-body-container">
                                                                                    <ul class="list-inline">
                                                                                        <li>
                                                                                            <span class="text-medium">Vietnamese</span>
                                                                                        </li>
                                                                                        |
                                                                                        <li>
                                                                                            <span class="text-muted">Aug 14, 2018</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <div class="row">
                                                                                        <div class="col-xs-9 no-margin-b">
                                                                                        <span class="comment-description">awsome!!!! By learning Vietnamese , By reading and speaking , 
                                                                                                    I could learn the knowldege from the news and tv, and the teacher stimulate my 
                                                                                                    potential, no matter speaking, reading, writing, listening skill. 
                                                                                                    Now it totally change my life.
                                                                                        </span>

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="comment-function-panel clearfix">
                                                                                        <button class="helpful-btn">
                                                                                            <i class="fa fa-thumbs-o-up text-sm v-middle"></i>
                                                                                            <span class="v-middle">0</span>
                                                                                        </button>
                                                                                        <div class="comment-more-count">

                                                                                            <a class="">+8 More</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="comment no-padding-b">
                                                    <div class="row">
                                                        <div class="col-md-12 no-margin-b">
                                                            <a title="Steven" href="#">
                                                                <img class="comment-avatar no-margin-t"
                                                                     src="https://imagesavatar-static01.italki.com/T045597859_Avatar_2.jpg">
                                                            </a>
                                                            <div class="comment-body">
                                                                <div class="comment-by">
                                                                    <a class="text-m text-medium" title="Steven"
                                                                       href="#">
                                                                        <strong>Steven</strong>
                                                                    </a>
                                                                    <span class="text-muted">(1 Lessons)</span>

                                                                </div>
                                                                <div class="comment-text">
                                                                    <div class="comment-text" comment="comment_obj_s">
                                                                        <div>
                                                                            <ul class="list-unstyled no-margin">
                                                                                <!-- ngRepeat: item in items -->
                                                                                <li class="comment-body-container">
                                                                                    <ul class="list-inline">
                                                                                        <li>
                                                                                            <span class="text-medium">Vietnamese</span>
                                                                                        </li>
                                                                                        |
                                                                                        <li>
                                                                                            <span class="text-muted">Aug 13, 2018</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <div class="row">
                                                                                        <div class="col-xs-9 no-margin-b">
                                                                                   
                                                                                    <span class="comment-description">Trang was lovely though our initial lesson was short.  
                                                                                        Look forward to the next session.</span>

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="comment-function-panel clearfix">
                                                                                        <button class="helpful-btn">
                                                                                            <i class="fa fa-thumbs-o-up text-sm v-middle"></i>
                                                                                            <span class="v-middle">0</span>
                                                                                        </button>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <aside>
                                                    <button class="btn btn-labeled btn-block btn-them-default">
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
                        </div>

                    </div>
                    <!-- End review -->


                </div>
            </div>
        </div>


        <div class="right-menu col-md-4" style="margin-top:  0px !important;">
            <div id="should" class="" style="top: 0px;">
                <div class="panel no-border visible-screen" style="border-radius: 0px !important;">
                    <div class="panel-body">
                        <div class="hidden-xs">
                            <p>30 Minute Trial<br>
                                <span class="text-xlg" style="line-height:1">$<span>5
                                    <sup>.00</sup>
                                </span>&nbsp;<sup>USD
                                </sup></span>
                                <i class="fa fa-question-circle ng-scope" style="vertical-align: 8px"
                                   tooltip="italki Credits are used to pay for lessons and products on italki."></i>
                                <span class="label label-tags pull-right">115527.00 VND</span>
                            </p>
                            <p>
                                <a href="javascript:void(0);" class="btn btn-lg btn-success btn-block btn-trail-session" data-toggle="modal" data-target="#modal-parent">Book Trial Lesson</a>
                            </p>
                            <div class="trial-lesson-count text-center">
                                <span class="">You have 3 trial lesson available on italki.</span>
                            </div>
                            <hr>
                        </div>

                        <div class="">
                            <p>Hourly rate starts from<br>
                                <span class="text-xlg" style="line-height:1">$
                                        <span>10<sup>.00</sup></span>&nbsp;<sup>USD</sup>
                                    </span>
                                <i class="fa fa-question-circle ng-scope" style="vertical-align: 8px"
                                   tooltip="italki Credits are used to pay for lessons and products on italki."></i>
                                <span class="label label-tags pull-right" style="">231054.00 VND</span>
                            </p>
                            <p>
                                <button type="button" href="javascript:void(0);" data-toggle="modal" data-target="#modal-parent"
                                        class="btn btn-lg btn-schedule btn-block" teacher="teacher" pag-state="profile">
                                    Schedule Lesson
                                </button>
                            </p>
                            <p class="">
                                <a href="javascript:void(0);" class="btn btn-lg btn-block btn-contact-teacher" data-toggle="modal" data-target="#contact-teacher-dialog">
                                    <span class="fa fa-ii-message contact-envelope"></span> Contact Teacher</a>
                            </p>
                            <div class="text-center text-bold">
                                    <span style="display: inline-block;width: 25px;height:31px;margin-bottom: -11px;margin-right: 8px;background: url('/static/images/icons/Satisfaction_Guarantee_icon_sml.svg')">
                                        
                                    </span> 100% Satisfaction Guarantee
                                <i class="fa fa-question-circle ng-scope"
                                   tooltip="Your italki Credits are safe with us until you confirm that the lesson has been successfully completed."></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel no-border schedule-panel">
                    <div class="panel-body">
                        <p>
                            <a href="" class="btn btn-lg btn-block btn-contact-teacher" data-toggle="modal" data-target="#view-schedule-dialog" teacher="teacher">View
                                schedule</a>
                        </p>

                    </div>
                </div>
                <div class="panel no-border">
                    <div class="panel-body">
                        <p>Share this teacher's profile with your friends. </p>
                        <button class="btn btn-block btn-lg btn-contact-teacher">Share with your friends
                        </button>
                    </div>
                </div>

                <div id="panel-scrolling-phone" class="panel no-border visible-screen hidden-sm hidden-lg panel-scrolling-phone">
                    <div class="panel-body" style="margin-left:-15px;margin-right: -15px;background: white;padding-bottom: 0px !important;">
                        <div class="">
                            <p>30 Minute Trial<br>
                                <span class="text-xlg" style="line-height:1">$<span>5
                                    <sup>.00</sup>
                                </span>&nbsp;<sup>USD
                                </sup></span>
                                <i class="fa fa-question-circle ng-scope" style="vertical-align: 8px"
                                   tooltip="italki Credits are used to pay for lessons and products on italki."></i>
                                <span class="label label-tags pull-right">115527.00 VND</span>
                            </p>
                            <p>
                                <a href="javascript:void(0);" class="btn btn-lg btn-success btn-block btn-trail-session" data-toggle="modal" data-target="#modal-parent">Book Trial Lesson</a>
                            </p>
                            <div class="trial-lesson-count text-center">
                                <span class="">You have 3 trial lesson available on italki.</span>
                            </div>
                            <hr>
                        </div>

                    </div>
                </div>
                
            </div>

        </div>
    </div>
    </div>


    <div id="teacherProfileNav" class="profile-fixedbar" style="height: 56px; display: none;">
        <div class="container no-padding-t">
            <div class="row">
                <div style="float: left;padding-left: 5px" class="col-md-8">
                    <ul class="list-inline no-margin nav nav-tabs nav-tabs-simple no-border">
                        <li>
                            <img width="40" class="rounded" alt="" src="https://imagesavatar-static01.italki.com/T051651290_Avatar.jpg">
                        </li>
                        <li class="text-bg" style="height: 40px;line-height: 40px;font-size: 18px;color: black">Nguyen Tran Trang
                        </li>
                        <li class="tab-navigation-menu tab-highlight-border" id="aboutTabNavigation" style="margin-left: 16px">
                            <a onclick="navigateToScreen('about')" class="text-bg no-border menu-text tab-text-color title">About</a>
                        </li>
                        <li class="tab-navigation-menu" id="servicesTabNavigation">
                            <a onclick="navigateToScreen('services')" class="text-bg no-border menu-text title">Services</a>
                        </li>
                        <li class="tab-navigation-menu" id="reviewsTabNavigation">
                            <a onclick="navigateToScreen('reviews')" class="text-bg no-border menu-text title">Reviews</a>
                        </li>
                    </ul>
                </div>
                <div style="float:right" class="col-md-4">
                    <div id="booking-options" class="btn-block text-center">Booking Options</div>
                </div>
            </div>
        </div>
    </div>    

@endsection
@extends('layouts.frontend')
@section('content')
    <div class="profile-container" style="height: 300px">
            
    </div>
    <div class="user-page" style="margin-top: -250px;">
        <div class="row container" style="margin-left:  auto;margin-right:  auto;">
            <div class="col-md-8" style="padding-left:  0px;padding-right: 5px;">
                <div class="panel no-border loading-layout no-boder-radius">
                    <div class="panel-body">
                        <div class="row grid-gutter-margin-b">
                            <div class="col-md-3 is-relative text-center">
                                <p>
                                    <img width="150" class="rounded user-avatar" src="/front/images/no_pic150.jpg"></p>
                                    <p class="text-muted">
                                        <i class="fa fa-map-marker"></i> 
                                        <span ng-show="user.living_city_text_" class="ng-hide">,</span> Vietnam<br>
                                        <span tooltip="(UTC+07:00) Thailand Time">1:13PM&nbsp;UTC+07:00</span>
                                    </p>
                                    <div class="visible-screen hidden-xs hidden-sm">
                                        <p class="text-left">
                                            <strong>Member since</strong>:<br>Aug 19, 2018
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <span class="pull-right">
                                        <div class="btn-group dropdown" dropdown="">
                                            <button type="button" class="btn btn-xs dropdown-toggle btn-show-block" style="border-color: #f4f4f4;background: #f4f4f4; display: none">
                                                <i class="fa fa-ellipsis-h"></i>
                                            </button>
                                            <ul class="dropdown-menu right list" style="margin-top: 12px">
                                                <li>
                                                    <a class="ng-binding">Block</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Report Concern</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </span>
                                    <h1 class="no-margin">test33</h1>
                                    <p class="text-light-gray">
                                        <i class="fa fa-circle online-status online"></i> 
                                        <span class="text-success">Online</span>
                                    </p>
                                    <div class="text-lb grid-gutter-margin-b">
                                        <p>
                                            <span class="no-margin"></span>
                                        </p>
                                        <ul class="list-inline">
                                            <li></li>
                                            <li>From 
                                                <span class="ng-hide">,</span> Vietnam
                                            </li>
                                        </ul>
                                        <p></p>
                                        <ul class="list-inline m-r-3">
                                            <li>
                                                <strong>Language Skills</strong>:
                                            </li>
                                            <li class="">English
                                                <span class="l-level l-level7" title="Native"></span> 
                                                <span ng-hide="$last">,</span>
                                            </li>
                                            <li class="">Vietnamese
                                                <span class="l-level l-level1" title="A1:Beginner" style="background-position: -3px -9px;"></span> 
                                                <span class="ng-hide">,</span>
                                            </li>
                                        </ul>
                                        <ul class="list-inline m-r-3">
                                            <li><strong>Learning</strong>:</li>
                                            <li class="">Vietnamese<span>,</span></li>
                                        </ul>
                                    </div>
                                    <div class="visible-tablet member-since hidden-lg hidden-md">
                                        <p class="text-left">
                                            <strong>Member since</strong>:<br>Aug 14, 2018
                                        </p>
                                    </div>
                                    <div>
                                        <p style="overflow-x: hidden"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel no-border no-boder-radius">
                        <div class="panel-body">
                            <div class="">
                                <h4 class="no-margin-t text-bold">Lesson History and Reviews&nbsp;(as student)</h4>
                                <div id="statistics" class="grid-gutter-margin-b">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="border-bottom-width:0px"></th>
                                                <th class="text-center" style="border-bottom-width:0px">
                                                    <strong>Last month</strong>
                                                </th>
                                                <th class="text-center" style="border-bottom-width:0px">
                                                    <strong>Last 3 months</strong>
                                                </th>
                                                <th class="text-center" style="border-bottom-width:0px">
                                                    <strong>All time</strong>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <strong>Completed lessons</strong>
                                                    <br>
                                                    <em class="grey11">Professional Lessons</em>
                                                    <br>
                                                    <em class="grey11">Informal Tutoring</em>
                                                    <br>
                                                    <em class="grey11">Instant Tutoring</em>
                                                    <br>
                                                    <em class="grey11">Trial lessons</em>
                                                </td>
                                                <td class="text-center">0<br>0<br>0<br>0<br>0</td>
                                                <td class="text-center">0<br>0<br>0<br>0<br>0</td>
                                                <td class="text-center">0<br>0<br>0<br>0<br>0</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Attendance</strong>
                                                </td>
                                                <td class="text-center">
                                                    <span>
                                                        <span class="">100%</span>
                                                    </span>
                                                </td>
                                                <td class="text-center">
                                                    <span>
                                                        <span class="">100%</span>
                                                    </span>
                                                </td>
                                                <td class="text-center">
                                                    <span>
                                                        <span class="">100%</span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Terminated Packages</strong></td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                                <td class="text-center">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="">
                                    <div class="widget-comments tab-pane no-padding fade active in">
                                        <div class="no-padding-vr">
                                            <aside class="ng-hide">
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
                    </div>
                    <div class="panel no-border no-boder-radius">
                        <div class="panel-body">
                            <div class="">
                                <h4 class="no-margin-t text-bold">Community Activities</h4>
                                <div class="grid-gutter-margin-b">
                                    <ul class="profile_card list-inline">
                                        <li style="width: 20%">
                                            <div class="info cursor-over">
                                                <span class="text-muted">Notebook Entries</span><br>
                                                <strong class="text-lg">0</strong>
                                            </div>
                                        </li>
                                        <li style="width: 20%">
                                            <div class="info cursor-over">
                                                <span class="text-muted">Questions</span><br>
                                                <strong class="text-lg">0</strong>
                                            </div>
                                        </li>
                                        <li style="width: 20%">
                                            <div class="info cursor-over">
                                                <span class="text-muted">Discussions</span><br>
                                                <strong class="text-lg">0</strong>
                                            </div>
                                        </li>
                                        <li style="width: 20%">
                                            <div class="info cursor-over">
                                                <span class="text-muted">Friends</span><br>
                                                <strong class="text-lg">0</strong>
                                            </div>
                                        </li>
                                        <li style="width: 20%">
                                            <div class="info">
                                                <span class="text-muted">Points</span><br>
                                                <strong class="text-lg">0</strong>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                    </div>
                                    <div class="widget-comments widget-comments2 no-padding">
                                        <div class="no-padding-vr"></div>
                                        <aside class="text-center ng-hide">
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
                    <div class="col-md-4 no-padding-lr">
                        <div class="panel no-border no-boder-radius">
                            <div class="panel-body">
                                <span class="">
                                    <style>.dis:hover{background-color:#eee !important;border-color:#eee !important;}</style>
                                    <div class="edit-profile">
                                        <button class="btn btn-lg btn-success btn-block btn-edit-profile  no-boder-radius" style="pointer-events:auto" title="">
                                                <i class="fa fa-pencil"></i>&nbsp;Edit profile
                                        </button> 
                                    </div>
                                    <div class="new-profile" style="display:  none;">
                                        <button class="btn btn-lg btn-success btn-block btn-add-a-friend no-boder-radius" style="pointer-events:auto" title="">
                                            <i class="fa fa-user-plus"></i>&nbsp;Add as Friend
                                        </button> 
                                        <button class="btn btn-lg btn-block btn-send-message no-boder-radius" style="pointer-events:auto" title="">
                                            <i class="fa fa-comment"></i>&nbsp;Send message
                                        </button>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>


        </div>
    </div>


@endsection
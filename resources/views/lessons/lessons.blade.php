@extends('layouts.frontend')
@section('content')

    <div class="main-content container account-settings session-list-page">
        <h2 class="grid-gutter-margin-b container" style="font-weight: bold;margin-top:0px;padding-left:font-weight: bold;margin-top:0px;padding-left:  0px;0px;">Lessons</h2>
        <div class="container" style="padding-left:  0px;padding-right:  0px;">
            <div class="session-list-head row no-margin" style="height:  56px;">
                <div class="col-md-6 col-xs-12 no-margin-b no-border session-list-tab no-boder-radius no-padding-lr-phone">
                    <ul class="content-block-tabs js-tabs-tabs no-margin-b no-border">
                        <li class="content-block-tab lesson-tab-phone">
                            <a id="lessons-menu" onclick="onSelectLessonMenu('lessons')" class="content-block-tab-link account-setting-selected" href="#" target="_self">Lessons</a>
                        </li>
                        <li class="content-block-tab lesson-tab-phone">
                            <a id="packages-menu" onclick="onSelectLessonMenu('packages')" class="content-block-tab-link js-tab-link" href="#" target="_self">Packages</a>
                        </li>
                        <li class="content-block-tab lesson-tab-phone">
                            <a id="problems-menu" onclick="onSelectLessonMenu('problems')" class="content-block-tab-link js-tab-link " href="#" target="_self">Problems</a>
                        </li>
                        <li class="content-block-tab lesson-tab-phone">
                            <a id="calendar-menu" onclick="onSelectLessonMenu('calendar')" class="content-block-tab-link js-tab-link" href="#" target="_self">Calendar</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-xs-12  no-padding no-margin-b right-select-option" style="padding-top:  7px !important;padding-right: 20px !important;">
                    <div class="session-search-head" id="session-search-head">
                        <div class="row no-margin">
                        <div class="col-sm-6 no-padding">
                            <div class="italki-drop-down">
                            <div class="ui-select-container ui-select-bootstrap dropdown ng-valid ng-valid-required" is-open="false" search-enabled="false"  required="required">
                                <div class="ui-select-match" placeholder="Select">
                                    <select class="form-control select-action-type no-boder-radius">
                                        <option>All</option>
                                        <option>All active</option>
                                        <option>All inactive</option>
                                    </select>
                                </div>
                            <input type="text" class="form-control ui-select-search ng-pristine ng-untouched ng-valid ng-hide" placeholder="Select">
                            <ul class="ui-select-choices ui-select-choices-content ui-select-dropdown dropdown-menu" role="listbox">
                            <li class="ui-select-choices-group" id="ui-select-choices-30">
                                <div class="divider ng-hide" ></div>
                                    <div class="ui-select-choices-group-label dropdown-header ng-hide">
                                        
                                    </div>
                                </li>
                            </ul>
                        <ui-select-single></ui-select-single>
                        
                        </div></div></div>
                        <div class="col-sm-6 no-padding session-user-filter margin-top-sm-phone">
                            <form class="italki-autocomplete-container ng-pristine ng-valid">
                                <input type="text" placeholder="Search by name" class="form-control search no-boder-radius">
                                <ul class="dropdown-menu ng-hide" style="display: block;;display: block;">

                            </ul> <button type="reset" class="close btn-clear-text">×</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>

</div>

        <!-- Lesson -->
        <div class="container" id="lessons" style="background:  white;">
            <div class="row lesson-item">
                <div class="col-md-7 col-xs-12 lesson-left">
                    <span class="text-bold text-title-phone">Thursday Aug 23, 2018 09:00 - 09:30</span>
                    <span class="fa fa-envelope" style="font-size: 24px;margin-left: 10px;"></span>
                    <p class="text-gray-color text-title-phone">30 minutes trial lesson: Vietnamese Vietnamese #1234566</p>
                </div>
                <div class="col-md-3 col-xs-12 lesson-mid">
                    <div class="student-icon">
                        <img src="/front/images/lessons/student_icon.png"/>
                    </div>
                    <div class="student-infor">
                        <p class="text-bold student-name">Huu Ly</p>
                        <p class="student-title">Student</p>
                    </div>
                </div>
                <div class="col-md-2 col-xs-12 lesson-right">
                    <div class="lesson-action text-right">
                        <button class="btn btn-lesson-action btn-lesson-action-phone">Cancelled</button>
                    </div>
                </div>
                
            </div>

            <div class="row lesson-item">
                <div class="col-md-7 col-xs-12 lesson-left">
                    <span class="text-bold text-title-phone">Thursday Aug 23, 2018 09:00 - 09:30</span>
                    <p class="text-gray-color text-title-phone">30 minutes trial lesson: Vietnamese Vietnamese #1234566</p>
                </div>
                <div class="col-md-3 col-xs-12 lesson-mid">
                    <div class="student-icon">
                        <img src="/front/images/lessons/student_icon.png"/>
                    </div>
                    <div class="student-infor">
                        <p class="text-bold student-name">Wryne</p>
                        <p class="student-title">Student</p>
                    </div>
                </div>
                <div class="col-md-2 col-xs-12 lesson-right">
                    <div class="lesson-action text-right">
                        <button class="btn btn-lesson-action btn-completed btn-lesson-action-phone">Completed</button>
                    </div>
                </div>
            </div>

            <div class="row lesson-item">
                <div class="col-md-7 col-xs-12 lesson-left">
                    <span class="text-bold text-title-phone">Thursday Aug 23, 2018 09:00 - 09:30</span>
                    <p class="text-gray-color text-title-phone">Textbook VSL1 Giáo trình Tiếng Việt Cho Người Nước Ngoài - Cuốn 1 - Vietnamese #9042477667</p>
                </div>
                <div class="col-md-3 col-xs-12 lesson-mid">
                    <div class="student-icon">
                        <!-- <img src="/front/images/lessons/student_icon.png"/> -->
                    </div>
                    <div class="student-infor">
                        <p class="text-bold student-name">Viki</p>
                        <p class="student-title">Student</p>
                    </div>
                </div>
                <div class="col-md-2 col-xs-12 lesson-right">
                    <div class="lesson-action text-right">
                        <button class="btn btn-lesson-action btn-completed btn-lesson-action-phone">Completed</button>
                    </div>
                </div>
            </div>


            <div class="row lesson-item">
                <div class="col-md-7 col-xs-12 lesson-left">
                    <span class="text-bold text-title-phone">Thursday Aug 23, 2018 09:00 - 09:30</span>
                    <p class="text-gray-color text-title-phone">Textbook VSL1 Giáo trình Tiếng Việt Cho Người Nước Ngoài - Cuốn 1 - Vietnamese #9042477667</p>
                    <button class="btn btn-lesson-action btn-package hidden-xs text-title-phone">Package</button>
                </div>
                <div class="col-md-3 col-xs-12 lesson-mid">
                    <div class="student-icon">
                        <img src="/front/images/lessons/student_icon.png"/>
                    </div>
                    <div class="student-infor">
                        <p class="text-bold student-name">Viki</p>
                        <p class="student-title">Student</p>
                    </div>
                </div>
                <div class="col-md-2 col-xs-12 lesson-right">
                    <div class="lesson-action text-right">
                        <button class="btn btn-lesson-action btn-completed btn-lesson-action-phone">Completed</button>
                    </div>
                </div>
            </div>

        </div>
        <!-- End of Lesson -->


        <!-- Package -->
        <div class="container" id="packages" style="background:  white;display:  none;">
            <div class="row packages-item">
                <div class="col-md-7 col-xs-12 packages-left">
                    <span class="text-bold text-title-phone">Complete beginner (10% Discount Package)</span>
                    <span class="text-gray-color text-title-phone">Vietnamese 123456678</span>
                    <p class="text-gray-color no-margin-b margin-top-sm text-title-phone">Completed 5, Not Schedule 0, Request 0, Problems 0</p>
                    <p class="text-danger margin-top-sm text-title-phone">Expiration Date: 2018-11-28</p>
                </div>
                <div class="col-md-3 col-xs-12 packages-mid">
                    <div class="student-icon">
                        <img src="/front/images/lessons/student_icon.png"/>
                    </div>
                    <div class="student-infor">
                        <p class="text-bold student-name">Huu Ly</p>
                        <p class="student-title">Student</p>
                    </div>
                </div>
                <div class="col-md-2 col-xs-12 packages-right">
                    <div class="lesson-action text-right">
                        <button class="btn btn-packages-action btn-package-action-phone">Terminated</button>
                    </div>
                </div>
            </div>
            <div class="row packages-item">
                <div class="col-md-7 col-xs-12 packages-left">
                    <span class="text-bold text-title-phone">Complete beginner (10% Discount Package)</span>
                    <span class="text-gray-color text-title-phone">Vietnamese 123456678</span>
                    <p class="text-gray-color no-margin-b margin-top-sm text-title-phone">Completed 5, Not Schedule 0, Request 0, Problems 0</p>
                    <p class="text-danger margin-top-sm text-title-phone">Expiration Date: 2018-11-28</p>
                </div>
                <div class="col-md-3 col-xs-12 packages-mid">
                    <div class="student-icon">
                        <img src="/front/images/lessons/student_icon.png"/>
                    </div>
                    <div class="student-infor">
                        <p class="text-bold student-name">Andrew</p>
                        <p class="student-title">Student</p>
                    </div>
                </div>
                <div class="col-md-2 col-xs-12 packages-right">
                    <div class="lesson-action text-right">
                        <button class="btn btn-packages-action btn-completed btn-package-action-phone">Completed</button>
                    </div>
                </div>
            </div>
            <div class="row packages-item">
                <div class="col-md-7 col-xs-12 packages-left">
                    <span class="text-bold text-title-phone">Complete beginner (10% Discount Package)</span>
                    <span class="text-gray-color text-title-phone">Vietnamese 123456678</span>
                    <p class="text-gray-color no-margin-b margin-top-sm text-title-phone">Completed 5, Not Schedule 0, Request 0, Problems 0</p>
                    <p class="text-danger margin-top-sm text-title-phone">Expiration Date: 2018-11-28</p>
                </div>
                <div class="col-md-3 col-xs-12 packages-mid">
                    <div class="student-icon">
                        <img src="/front/images/lessons/student_icon.png"/>
                    </div>
                    <div class="student-infor">
                        <p class="text-bold student-name">Andrew</p>
                        <p class="student-title">Student</p>
                    </div>
                </div>
                <div class="col-md-2 col-xs-12 packages-right">
                    <div class="lesson-action text-right">
                        <button class="btn btn-packages-action btn-completed btn-package-action-phone">Completed</button>
                    </div>
                </div>
            </div>
            <div class="row packages-item">
                <div class="col-md-7 col-xs-12 packages-left">
                    <span class="text-bold text-title-phone">Complete beginner (10% Discount Package)</span>
                    <span class="text-gray-color text-title-phone">Vietnamese 123456678</span>
                    <p class="text-gray-color no-margin-b margin-top-sm text-title-phone">Completed 5, Not Schedule 0, Request 0, Problems 0</p>
                    <p class="text-danger margin-top-sm text-title-phone">Expiration Date: 2018-11-28</p>
                </div>
                <div class="col-md-3 col-xs-12 packages-mid">
                    <div class="student-icon">
                        <img src="/front/images/lessons/student_icon.png"/>
                    </div>
                    <div class="student-infor">
                        <p class="text-bold student-name">Andrew</p>
                        <p class="student-title">Student</p>
                    </div>
                </div>
                <div class="col-md-2 col-xs-12 packages-right">
                    <div class="lesson-action text-right">
                        <button class="btn btn-packages-action btn-completed btn-package-action-phone">Completed</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Package -->

        <!-- Problems -->
        <div class="container" id="problems" style="background:  white;display:  none;height:  500px;">
            <div class="problems-list no-border-t text-center" style="height:100%;">      
                <img class="rounded" src="/front/images/lessons/icon_norecord.png"><br>
                <span class="text-lg">Nothing found.</span>

            </div>
        </div>
        <!-- End of Problems -->

        <!-- Calendar -->
        <div class="container" id="calendar" style="background:  white;display:  none;">
            <div id='calendar-item'>

            </div>
        </div>
        <!-- End of Calendar -->
</div>

@endsection
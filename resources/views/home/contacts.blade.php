@extends('layouts.frontend')
@section('content')
    
<div class="contacts-teacher-page" >
    <div class="container">
    <h2 style="margin-bottom: 22px;">Contacts</h2>

    <div class="panel loading-layout">
        <div class="panel-contact-teacher-heading">
            <div class="row">
                <div class="col-md-9" style="line-height: 28px">
                    <a>
                        <span class="label label-click label-warning">Bookmarked</span>
                    </a>
                    <a>
                        <span class="label label-click label-tags">Contacted</span>
                    </a>
                    <a>
                        <span class="label label-click free">Trial</span>
                    </a>
                    <a>
                        <span class="label label-click session">Current</span>
                    </a>
                    <a>
                        <span class="label label-click label-tags">Past</span>
                    </a>
                    <a class="label-all">Show All</a>
                </div>
                <div class="col-md-3">
                    <form class="ng-pristine ng-valid">
                        <input class="form-control no-border-radius" type="text" placeholder="Search by name"> 
                        <button type="reset" class="close" style="margin-top: -26px;margin-right: 10px;outline: none">×</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="noresult-text text-lg text-center text-muted ng-hide">
            <img class="rounded" src="/static/images/icon_norecord.png"><br>Teachers that you have saved, contacted or had lessons may be seen here.<br>
            <span class="text-lb">No teachers yet. Find your first teacher and take a lesson!</span><br>
            <button class="btn btn-primary" ui-sref="teachers" href="/teachers">Find a Teacher</button>
        </div>
        <div class="panel-body no-padding-b">
            <div class="">
                <div class=""></div>
                <div class="">
                    <div class="stat-panel" style="overflow: inherit">
                        <div class="stat-cell bg-panel valign-middle card-item yes-cursor cursor-over" style="overflow: inherit">
                            <div class="item-icon">
                                <div class="online-layout">
                                    <div class="offline" title="Offline"></div>
                                </div>
                                <a class="" href="#">
                                    <img width="50" class="rounded" alt="Khai Dao" src="/front/images/contacts/teacher_icon.png">
                                </a>
                            </div>
                            <div class="item-info">
                                <div class="row">
                                    <div class="col-md-6 grid-gutter-margin-b5">
                                        <div class="right-btn">
                                            <span class="label label-warning">Bookmarked</span>
                                        </div>
                                        <ul class="list-inline no-margin-b">
                                            <li>
                                                <a class="text-lg" href="/teacher/4495655">Khai Dao</a>
                                            </li>
                                            <li>
                                                <!-- <i class="text-lg flag-icon flag-icon-vn" title="From Vietnam" style="width: 1em"></i> -->
                                                <img src="/front/images/contacts/vn.svg" style="height: 17px;width: 20px;">
                                            </li>
                                        </ul>
                                        <ul class="list-inline">
                                            <li class="color-tutor">
                                                <i class="fa fa-home" title="Community Tutor" style="vertical-align: middle"></i>&nbsp; 
                                                <span translate="TP004" style="vertical-align: middle">Community Tutor</span>
                                            </li>
                                            <li>
                                                <span class="">Vietnamese
                                                    <span class="ng-hide">,&nbsp;</span>
                                                </span>
                                            </li>
                                            <li>
                                                <span>223 lesson(s)</span>
                                            </li>
                                        </ul>
                                        <div class="">
                                            <div class="btn-group btn-group-sm">
                                                <button class="btn btn-action no-border-radius">
                                                    <span class="btn-txt">View all lessons</span>
                                                </button>&nbsp;
                                            </div>
                                            <div class="btn-group btn-group-sm dropdown" dropdown="" style="vertical-align: top">
                                                <button type="button" class="btn btn-action no-border-radius">
                                                    <span class="btn-txt">Contact Teacher</span>
                                                </button>&nbsp; 
                                                <button type="button" class="btn dropdown-toggle btn-action no-border-radius" dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-caret-down"></i>
                                                </button>
                                                <ul class="dropdown-menu right list" style="margin-top: 12px">
                                                    <li>
                                                        <a href="#">Remove</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 hidden-phone">
                                        <p>Language Skills:&nbsp; 
                                            <span class="">Vietnamese<em class="l-level l-level7"></em> 
                                            <span>,&nbsp;</span></span>
                                            <span class="">English<em class="l-level l-level7"></em> 
                                            <span>,&nbsp;</span></span>
                                            <span class="">French<em class="l-level l-level7"></em> 
                                            <span>,&nbsp;</span></span>
                                            <span class="">Thai<em class="l-level l-level7"></em> 
                                            <span>,&nbsp;</span></span>
                                            <span class="">Korean<em class="l-level l-level7"></em> 
                                        </p>
                                        <span class="text-muted">
                                            I have a passion for languages and I'd like to share with the world the beauty of
                                             my mother tongue Vietnamese. Let me guide you through interesting stories with music and imagination.
                                              Wish you all the best of luck. Xin cảm ơn!
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center" ui-sref="teachers" href="/teachers">
                    <div class="dropzone grid-gutter-margin-b yes-cursor cursor-over" style="height: 130px; padding: 50px 0">
                        <div class="dropzone-message text-center" style="overflow: inherit;position: absolute;top: 50%; margin-top: -30px;width: 100%; text-align: center">
                            <i class="fa fa-plus text-xlg text-muted"></i><br>
                            <span class="text-lb">Find more teachers</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
          
</div>


@endsection
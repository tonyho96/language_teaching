@extends('layouts.frontend')
@section('content')

    <div class="main-content container account-settings">
        <h2 class="grid-gutter-margin-b container" style="font-weight: bold;margin-top:0px">Account Settings</h2>
        <div class="container">
            <div class="panel-account-settings no-margin-b no-border-b" style=" height:  50px;">
                <ul class="content-block-tabs js-tabs-tabs no-margin-b">
                    <li class="content-block-tab">
                        <a id="account-setting-menu" onclick="onClickAccount()" class="content-block-tab-link account-setting-selected"  href="/settings/account">Account</a>
                    </li>
                    <li class="content-block-tab">
                        <a id="notification-setting-menu" onclick="onClickNotification()" class="content-block-tab-link js-tab-link" href="/settings/notification">Notification</a>
                    </li>
                </ul>
            </div>

            <!-- Account Settings -->
            <div id="account-panel" class="panel-account-settings form-horizontal form-bordered no-border-t">
                <div ui-view="" class="">
                    <div class="form-group no-margin-hr panel-padding-h">
                            <div class="row">
                                <label class="col-sm-3 edit-title">Email</label>
                                <div class="col-sm-9">
                                    <div id="entered-email">
                                        <span class="font-sm">{{$user->email}}</span>&nbsp; 
                                        <span onclick="onClickEditEmail()" class="fa fa-pencil yes-cursor pull-right edit-icon"></span>
                                    </div>
                                    <div id="edit-email-panel" style="display:  none;">
                                        <p style="font-size:  13px;">Your email address will not be displayed on the site and is only used to log in.</p>
                                        <div class="input-group col-md-6 form-group no-margin-hr no-padding-t no-border-t" style="margin-bottom: 5px;margin-top:  0px;padding-top:  0px !important;">
                                            <label class="edit-title">New email</label>
                                            <input type="text" class="form-control ng-pristine ng-untouched ng-valid">
                                        </div>
                                        <span class="alert-checking-infor" style="">Please check your email address.</span> 
                                        <div class="input-group col-md-6 form-group no-margin-hr no-padding-t no-border-t" style="margin-bottom: 5px">
                                            <label class="edit-title">Enter your password</label>
                                            <input type="password" class="form-control ng-pristine ng-untouched ng-valid">
                                        </div>
                                        <span class="alert-checking-infor" style="margin-bottom: 15px">Please enter between 6 and 20 characters.</span> 
                                        <div class="input-group col-md-6 form-group no-margin-hr no-padding-t no-border-t">
                                            <button class="btn btn-sm" stext="C0055" disabled="disabled">
                                                <span class="btn-txt">Save</span>
                                                <span class="loader loader--white">
                                                    <span class="loader_"></span>
                                                </span>
                                            </button> 
                                            <button class="btn btn-sm btn-cancel-edit" onclick="onCancelEditEmail()">Cancel</button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group no-margin-hr panel-padding-h">
                        <div class="row">
                            <label class="col-sm-3 edit-title">Password</label>
                            <div class="col-sm-9">
                                <div id="entered-password">
                                    <span>******</span>&nbsp; 
                                    <span onclick="onClickEditPassword()" class="fa fa-pencil yes-cursor pull-right edit-icon">
                                    </span>
                                </div>
                            <div id="edit-password-panel" style="display:  none;">
                                <div class="input-group col-md-6 form-group no-margin-hr no-padding-t no-border-t">
                                    <div>
                                        <label class="edit-title">Old Password</label>
                                        <input type="password" class="form-control ng-pristine ng-untouched ng-valid">
                                    </div>
                                    <span class="text-danger alert-checking-infor" style="margin-top: 9px">Incorrect password. Passwords are case sensitive.</span>
                                </div>
                                <div class="input-group col-md-6 form-group no-margin-hr no-padding-t no-border-t">
                                    <div>
                                        <label class="edit-title">New Password</label>
                                        <input type="password" class="form-control ng-pristine ng-untouched ng-valid">
                                    </div>
                                    <span class="text-danger alert-checking-infor" style="margin-top: 9px">Please enter between 6 and 20 characters.</span>
                                </div>
                                <div class="input-group col-md-6 form-group no-margin-hr no-padding-t no-border-t">
                                    <div>
                                        <label class="edit-title">Confirm New Password</label>
                                        <input type="password" class="form-control ng-pristine ng-untouched ng-valid">
                                    </div>
                                    <span style="margin-top: 9px" class="text-danger alert-checking-infor">Passwords entered do not match.</span>
                                </div>
                                <div class="form-group no-margin-hr no-padding-t no-border-t">
                                    <button class="btn btn-sm" disabled="disabled">
                                        <span class="btn-txt" ng-if="!noe">Save</span>
                                            <span class="loader loader--white">
                                                <span class="loader_"></span>
                                            </span>
                                    </button> 

                                    <button class="btn btn-sm btn-cancel-edit" onclick="onCancelEditPassword()">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group no-margin-hr panel-padding-h">
                        <div class="row">
                            <label class="col-sm-3 edit-title">Display Language</label>
                            <div class="col-sm-9">
                                <div id="entered-language">
                                    <span class="font-sm">English</span>&nbsp; 
                                    <span onclick="onClickEditLanguage()" class="fa fa-pencil yes-cursor pull-right edit-icon"></span>
                                </div>
                                    <div id="edit-language-panel" style="display:  none;">
                                        <div class="input-group col-md-6 form-group no-margin-hr no-padding-t no-border-t">
                                            <label class="edit-title">This selects the language in which the italki website will be displayed. </label>
                                            <select class="form-control ng-pristine ng-untouched ng-valid">
                                                <option value="">Choose</option>
                                                <option value="0" label="English">English</option>
                                                <option value="1" label="English">Vietnamese</option>
                                                <option value="2" label="English">Japanese</option>
                                            </select>

                                            <span style="z-index:2" class="help-block ng-hide">Required field can not be left blank</span>
                                        </div>
                                        <div class="form-group no-margin-hr no-padding-t no-border-t">
                                            <button class="btn btn-connect-infor btn-sm">Save</button> 
                                            <button class="btn btn-sm btn-cancel-edit" onclick="onCancelEditLanguage()">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                            
                    <div class="form-group no-margin-hr panel-padding-h">
                        <div class="row">
                            <label class="col-sm-3 edit-title">Email language</label>
                            <div class="col-sm-9">
                                <div id="entered-email-language">
                                    <span class="font-sm">English</span>&nbsp; 
                                    <span onclick="onClickEditEmailLanguage()" class="fa fa-pencil yes-cursor pull-right edit-icon"></span>
                                </div>
                                <div id="edit-email-language-panel" style="display:  none;">
                                    <div class="input-group col-md-6 form-group no-margin-hr no-padding-t no-border-t">
                                        <label class="edit-title">This selects the language in which emails you receive from italki will be displayed. </label>
                                        <select class="form-control ng-pristine ng-untouched ng-valid">
                                            <option value="">Choose</option>
                                            <option value="0" label="English">English</option>
                                            <option value="1" label="中文简体">中文简体</option>
                                            <option value="2" label="中文繁體">中文繁體</option>
                                            <option value="3" label="Español">Español</option>
                                            <option value="4" label="Français">Français</option>
                                        </select>
                                        <span style="z-index:2" class="help-block ng-hide">Required field can not be left blank</span>
                                    </div>
                                    <div class="form-group no-margin-hr no-padding-t no-border-t">
                                        <button class="btn btn-primary btn-sm btn-connect-infor">Save</button> 
                                        <button class="btn btn-sm btn-cancel-edit" onclick="onCancelEditEmailLanguage()">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group no-margin-hr panel-padding-h">
                        <div class="row">
                            <label class="col-sm-3 edit-title">Time Zone</label>
                            <div class="col-sm-9">
                                <div id="entered-timezone">
                                    <span class="font-sm">(UTC+06:00) Novosibirsk<br>Local time 
                                    <span class="label label-warning font-sm">August 30, 2018 10:03 AM</span></span>&nbsp; 
                                    <span onclick="onClickEditTimeZone()" class="fa fa-pencil yes-cursor pull-right edit-icon"></span>
                                </div>
                                <div id="edit-timezone-panel" style="display:  none;">
                                    <div class="input-group col-md-6 form-group no-margin-hr no-padding-t no-border-t">
                                        <label class="edit-title">This information helps other users know when to contact you for online chats, teaching lessons, etc.</label>
                                        <select id="selTZ" class="form-control ng-pristine ng-untouched ng-valid">
                                            <option value="">Choose</option>
                                            <option value="0" label="(UTC-12:00) International Date Line West">(UTC-12:00) International Date Line West</option>
                                            <option value="1" label="(UTC-11:00) Coordinated Universal Time-11">(UTC-11:00) Coordinated Universal Time-11</option>
                                            <option value="2" label="(UTC-10:00) Hawaii">(UTC-10:00) Hawaii</option>
                                            <option value="3" label="(UTC-09:00) Alaska">(UTC-09:00) Alaska</option>
                                            <option value="4" label="(UTC-08:00) Pacific Time (US &amp; Canada)">(UTC-08:00) Pacific Time (US &amp; Canada)</option>
                                        </select>
                                    </div>
                                    <div class="form-group no-margin-hr no-padding-t no-border-t">
                                        <button class="btn btn-connect-infor btn-sm">
                                            <span class="btn-txt">Save</span>
                                            <span class="loader loader--white">
                                                <span class="loader_"></span>
                                            </span>
                                        </button> 
                                        <button class="btn btn-sm btn-cancel-edit" onclick="onCancelEditTimeZone()">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group no-margin-hr panel-padding-h">
                        <div class="row">
                            <label class="col-sm-3 edit-title">Currency</label>
                                <div class="col-sm-9">
                                    <div>
                                        <span class="font-sm">USD</span>&nbsp;
                                    </div>
                                <div class="ng-hide">
                                    <div class="input-group col-md-6 form-group no-margin-hr no-padding-t no-border-t">
                                        <select class="form-control ng-pristine ng-untouched ng-valid">
                                            <option value="">Default select</option>
                                            <option value="AED">AED</option>
                                            <option value="ARS">ARS $</option>
                                            <option value="AUD">AUD $</option>
                                        </select>
                                    </div>
                                    <div class="form-group no-margin-hr no-padding-t no-border-t">
                                        <button class="btn btn-primary btn-sm">
                                            <span class="btn-txt">Save</span>
                                            <span class="loader loader--white">
                                                <span class="loader_"></span>
                                            </span>
                                        </button> 
                                        <button class="btn btn-sm">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group no-margin-hr panel-padding-h">
                        <div class="row">
                            <label class="col-sm-3 edit-title">Time Format</label>
                            <div class="col-sm-9">
                                <div class="no-margin no-padding-t no-border-t btn-group">
                                    <label id="12h-time-format" onclick="onSelectTimeFormat('12h')" class="btn" style="width: auto;background: #f1f1f1;">12H</label>
                                    <label id="24h-time-format" onclick="onSelectTimeFormat('24h')" class="btn btn-primary time-format-selected" style="width: auto;background: #f1f1f1;color:black;border-color:#f1f1f1;border-radius:0px;">24H</label>
                                </div>
                            </div>
                        </div>
                    </div>

 

                    <div class="form-group no-margin-hr panel-padding-h">
                        <div class="row">
                            <a class="col-sm-3 font-sm">Account Deactivation</a> 
                            <a class="col-md-9 text-right font-sm" style="padding-bottom: 12px">Download a copy of your italki data</a>
                        </div>
                    </div>

                    </div>
                </div>
            </div>

            <!-- End of Account Settings -->


        </div>


    </div>

</div>



@endsection
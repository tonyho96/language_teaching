@extends('layouts.frontend')
@section('content')

    <div class="main-content container account-settings">
        <h2 class="grid-gutter-margin-b container" style="font-weight: bold;margin-top:0px">Account Settings</h2>
        <div class="container">
            <div class="panel-account-settings no-margin-b no-border-b" style=" height:  50px;">
                <ul class="content-block-tabs js-tabs-tabs no-margin-b">
                    <li class="content-block-tab">
                        <a id="account-setting-menu" onclick="onClickAccount()" class="content-block-tab-link"  href="/settings/account">Account</a>
                    </li>
                    <li class="content-block-tab">
                        <a id="notification-setting-menu" ui-sref-active="selected" onclick="onClickNotification()" class="content-block-tab-link js-tab-link  account-setting-selected" href="/settings/notification">Notification</a>
                    </li>
                </ul>
            </div>

            <!-- Notifications -->
            <div id="notifications-panel">
                <div class="panel-account-settings form-horizontal form-bordered no-border-t">
                    <div ui-view="" class="">
                        <div class="panel-body no-padding-hr">
                            <div class="form-group no-margin-hr panel-padding-h no-padding-t no-border-t">
                                <div class="row">
                                    <label class="col-xs-5">Choose the notifications you would like to receive</label>
                                    <label class="col-xs-3 text-center">Notify me at italki</label>
                                    <label class="col-xs-4 text-center">Send me an email</label>
                                </div>
                            </div>
                            <div class="form-group no-margin-hr panel-padding-h">
                                <div class="row">
                                    <span class="col-xs-5">Lesson requests/notifications</span>
                                    <div class="col-xs-3 text-center">
                                        <label class="margin30">
                                            <input disabled="disabled" checked="checked" type="checkbox" class="checkbox-notification">
                                            <span class="lbl">&nbsp;</span>
                                        </label>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <label class="margin30">
                                            <input disabled="disabled" checked="checked" type="checkbox" class="checkbox-notification">
                                            <span class="lbl">&nbsp;</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group no-margin-hr panel-padding-h">
                                <div class="row">
                                    <span class="col-xs-5">Someone sends me a lesson message</span>
                                    <div class="col-xs-3 text-center">
                                        <label class="margin30">
                                            <input checked="checked" type="checkbox" class="checkbox-notification">
                                            <span class="lbl">&nbsp;</span>
                                        </label>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <label class="margin30">
                                            <input checked="checked" type="checkbox" class="checkbox-notification ">
                                            <span class="lbl">&nbsp;</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group no-margin-hr panel-padding-h">
                                <div class="row">
                                    <span class="col-xs-5">Someone sends me a friend request</span>
                                    <div class="col-xs-3 text-center">
                                        <label class="margin30">
                                            <input checked="checked" type="checkbox" class="checkbox-notification">
                                            <span class="lbl">&nbsp;</span>
                                        </label>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <label class="margin30">
                                            <input checked="checked" type="checkbox" class="checkbox-notification">
                                            <span class="lbl">&nbsp;</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group no-margin-hr panel-padding-h">
                                <div class="row">
                                    <span class="col-xs-5">Someone sends me a message on italki</span>
                                    <div class="col-xs-3 text-center">
                                        <label class="margin30">
                                            <input checked="checked" type="checkbox" class="checkbox-notification">
                                            <span class="lbl">&nbsp;</span>
                                        </label>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <label class="margin30">
                                            <input checked="checked" type="checkbox" class="checkbox-notification">
                                            <span class="lbl">&nbsp;</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group no-margin-hr panel-padding-h">
                                <div class="row">
                                    <span class="col-xs-5">Someone answers a question I have asked</span>
                                    <div class="col-xs-3 text-center">
                                        <label class="margin30">
                                            <input checked="checked" type="checkbox" class="checkbox-notification">
                                            <span class="lbl">&nbsp;</span>
                                    </label>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <label class="margin30">
                                            <input checked="checked" type="checkbox" class="checkbox-notification">
                                            <span class="lbl">&nbsp;</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                                                                
                            <div class="form-group no-margin-hr panel-padding-h">
                                <div class="row">
                                    <span class="col-xs-5">Someone comments on a question I have asked</span>
                                    <div class="col-xs-3 text-center">
                                        <label class="margin30">
                                            <input checked="checked" type="checkbox" class="checkbox-notification">
                                            <span class="lbl">&nbsp;</span>
                                        </label>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <label class="margin30">
                                            <input checked="checked" type="checkbox" class="checkbox-notification">
                                            <span class="lbl">&nbsp;</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group no-margin-hr panel-padding-h">
                                <div class="row">
                                    <span class="col-xs-5">Someone comments on an answer I have written</span>
                                    <div class="col-xs-3 text-center"><label class="margin30">
                                        <input checked="checked" type="checkbox" class="checkbox-notification">
                                            <span class="lbl">&nbsp;</span>
                                        </label>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <label class="margin30">
                                            <input checked="checked" type="checkbox" class="checkbox-notification">
                                            <span class="lbl">&nbsp;</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                                            
                            <div class="form-group no-margin-hr panel-padding-h">
                                <div class="row">
                                    <span class="col-xs-5">Someone corrects a notebook entry I have written</span>
                                    <div class="col-xs-3 text-center">
                                        <label class="margin30">
                                            <input checked="checked" type="checkbox" class="checkbox-notification">
                                            <span class="lbl">&nbsp;</span>
                                        </label>
                                    </div>
                            
                                    <div class="col-xs-4 text-center">
                                        <label class="margin30">
                                            <input checked="checked" type="checkbox" class="checkbox-notification">
                                            <span class="lbl">&nbsp;</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group no-margin-hr panel-padding-h">
                                <div class="row">
                                    <span class="col-xs-5">Someone comments on a notebook entry I have written</span>
                                    <div class="col-xs-3 text-center">
                                        <label class="margin30">
                                            <input checked="checked" type="checkbox" class="checkbox-notification">
                                            <span class="lbl">&nbsp;</span>
                                        </label>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <label class="margin30">
                                            <input checked="checked" type="checkbox" class="checkbox-notification">
                                            <span class="lbl">&nbsp;</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                                                                        
                            <div class="form-group no-margin-hr panel-padding-h">
                                <div class="row">
                                    <span class="col-xs-5">Someone comments on a correction I have written</span>
                                        <div class="col-xs-3 text-center">
                                            <label class="margin30">
                                                <input checked="checked" type="checkbox" class="checkbox-notification">
                                                <span class="lbl">&nbsp;</span>
                                            </label>
                                        </div>
                                    <div class="col-xs-4 text-center">
                                        <label class="margin30">
                                            <input checked="checked" type="checkbox" class="checkbox-notification">
                                            <span class="lbl">&nbsp;</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                                            
                            <div class="form-group no-margin-hr panel-padding-h">
                                <div class="row">
                                    <span class="col-xs-5">Someone comments on a discussion I have created</span>
                                    <div class="col-xs-3 text-center">
                                        <label class="margin30">
                                            <input checked="checked" type="checkbox" class="checkbox-notification">
                                            <span class="lbl">&nbsp;</span>
                                        </label>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <label class="margin30">
                                            <input checked="checked" type="checkbox" class="checkbox-notification">
                                            <span class="lbl">&nbsp;</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group no-margin-hr no-margin-b panel-padding-h">
                                <div class="row">
                                    <span class="col-xs-5">italki Newsletters/italki Updates</span>
                                    <div class="col-xs-3 text-center">&nbsp;</div>
                                        <div class="col-xs-4 text-center">
                                            <label class="margin30">
                                                <input checked="checked" type="checkbox" class="checkbox-notification">
                                                <span class="lbl">&nbsp;</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        <div class="panel-footer" style="background: white !important;">
                            <button class="btn btn-connect-infor set-button-mobile">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Notifications -->


        </div>


    </div>

</div>



@endsection
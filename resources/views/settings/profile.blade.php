@extends('layouts.frontend')
@section('content')

    <div class="main-content profile container">
        <h2 class="grid-gutter-margin-b margin-top-negative-sm">Edit Profile</h2>
        {!! Form::open(['action' => ['ProfileController@update_information'], 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'container1']) !!}
        {!! Form::token() !!}
        <div class="container1" style="background:  white;">
            <div class="panel-profile-header">
                <h4 class="panel-profile-title">Basic Information</h4>
            </div>
            <div class="panel-body no-padding-hr">
                <div class="form-group no-margin-hr panel-padding-h no-padding-t no-border-t">
                    <div class="row">
                        <div class="col-sm-3 text-center">
                            <p>
                                <img src="/front/images/profile/no_pic150.jpg" width="150" class="rounded">
                            </p>
                            <p><a class=""><i class="fa fa-pencil"></i> Edit Profile Photo</a>
                            </p>
                        </div>
                        <div class="col-sm-9">

                            <div class="form-group no-margin-hr no-padding-t no-border-t">
                                <div class="row">
                                    <label class="col-sm-3 control-label">Name</label>
                                    <div class="col-sm-9">
                                        <div class="form-group no-margin no-padding-t no-border-t">
                                            <input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" name="full_name" value="{{$user->full_name}}" maxlength="20">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group no-margin-hr no-padding-t no-border-t">
                                <div class="row">
                                    <label class="col-sm-3 control-label">From</label>
                                    <div class="col-sm-9">
                                        <div class="form-group no-margin no-padding-t no-border-t">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <select name="from_country" id="from" name="from" class="form-control ng-pristine ng-untouched ng-valid">
                                                    @foreach ($countries as $country)                                  
                                                    <option  value="{{$country->code}}" >{{$country->name}}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 margin-top-sm no-margin-t-md">
                                                    <select id="from_city" name="from_city" class="form-control ng-pristine ng-untouched ng-valid">
                                                        <option value="">Select a city</option>
                                                        <option value="Tafuna(Tafuna)" label="Tafuna(Tafuna)">Tafuna(Tafuna)</option>
                                                        <option value="Other(other)" label="Other(other)">Other(other)</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group no-margin-hr no-padding-t no-border-t">
                                <div class="row">
                                    <div class="col-sm-9 col-md-offset-3">
                                        <div>
                                            <div class="form-group no-margin no-padding-t no-border-t">
                                                <div class="row">
                                                    <div class="col-sm-6 col-sm-offset-6">
                                                        <input id="street_from" name="street_from" type="text" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" style="display: none;" maxlength="100">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group no-margin-hr no-padding-t no-border-t">
                                <div class="row">
                                    <label class="col-sm-3 control-label">Living in</label>
                                        <div class="col-sm-9">
                                        <div>
                                        <div class="form-group no-margin no-padding-t no-border-t">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="">
                                                        <div class="ui-select-container ui-select-bootstrap dropdown ng-valid">
                                                            <select name="country" id="living" class="form-control ng-pristine ng-untouched ng-valid" >
                                                                @foreach ($countries as $country)                                  
                                                                <option  value="{{$country->code}}" >{{$country->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 margin-top-sm no-margin-t-md">
                                                    <select id="living_city" name="living_city" class="form-control ng-pristine ng-untouched ng-valid">
                                                        <option value="">Select a city</option>
                                                        <option value="Tafuna(Tafuna)" label="Tafuna(Tafuna)">Tafuna(Tafuna)</option>
                                                        <option value="Other(other)" label="Other(other)">Other(other)</option>
                                                      </select>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group no-margin-hr no-padding-t no-border-t">
                                <div class="row">
                                    <div class="col-sm-9 col-md-offset-3">
                                        <div>
                                            <div class="form-group no-margin no-padding-t no-border-t">
                                                <div class="row">
                                                    <div class="col-sm-6 col-sm-offset-6">
                                                        <input id="street" name="street" type="text" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" style="display: none;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group no-margin-hr no-padding-t no-border-t">
                                <div class="row">
                                    <label class="col-sm-3 control-label">Time Zone</label>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <select name="time_zone" id="timezone"  class="form-control ng-pristine ng-untouched ng-valid">
                                                    <option value="0">Choose</option>
                                                    <option value="Africa/Abidjan">Africa/Abidjan</option>
                                                </select>
                                            </div>
											<div class="col-sm-6 text-lb text-warning" ng-bind="getUserTime(user.timezone_iana)">September 4, 2018 11:28 PM</div>
                                        </div>
										<span class="text-muted" style="font-size: 13px;">This information helps other users know when to contact you for online chats, teaching lessons, etc.</span>
                                    </div>
                                </div>
                            </div>
						
                            <div class="form-group no-margin-hr no-padding-t no-border-t">
                                <div class="row">
                                    <label class="col-sm-3 control-label">Birth date</label>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <select name="year" id="year" class="form-control col-sm-1 ng-pristine ng-untouched ng-valid">
                                                    <option value="">Year</option>
                                                    <option value="2018" label="2018">2018</option>
                                                    <option value="2017" label="2017">2017</option>
                                                    <option value="2016" label="2016">2016</option>
                                                    <option value="2015" label="2015">2015</option>
                                                    <option value="2014" label="2014">2014</option>
                                                    <option value="2013" label="2013">2013</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-3">
                                                <select name="month" id="month" class="form-control ng-pristine ng-untouched ng-valid">
                                                    <option value="">Month</option>
                                                    <option value="1" label="1">1</option>
                                                    <option value="2" label="2">2</option>
                                                    <option value="3" label="3">3</option>
                                                    <option value="4" label="4">4</option>
                                                    <option value="5" label="5">5</option>
                                                    <option value="6" label="6">6</option>
                                                    <option value="7" label="7">7</option>
                                                    <option value="8" label="8">8</option>
                                                    <option value="9" label="9">9</option>
                                                    <option value="10" label="10">10</option>
                                                    <option value="11" label="11">11</option>
                                                    <option value="12" label="12">12</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-3">
                                                <select name="day" id="day" class="form-control ng-pristine ng-untouched ng-valid">
                                                    <option value="">Day</option>
                                                    <option value="1" label="1">1</option>
                                                    <option value="2" label="2">2</option>
                                                    <option value="3" label="3">3</option>
                                                    <option value="4" label="4">4</option>
                                                    <option value="5" label="5">5</option>
                                                    <option value="6" label="6">6</option>
                                                    <option value="7" label="7">7</option>
                                                    <option value="8" label="8">8</option>
                                                    <option value="9" label="9">9</option>
                                                    <option value="10" label="10">10</option>
                                                    <option value="11" label="11">11</option>
                                                    <option value="12" label="12">12</option>
                                                    <option value="13" label="13">13</option>
                                                    <option value="14" label="14">14</option>
                                                    <option value="15" label="15">15</option>
                                                    <option value="16" label="16">16</option>
                                                    <option value="17" label="17">17</option>
                                                    <option value="18" label="18">18</option>
                                                    <option value="19" label="19">19</option>
                                                    <option value="20" label="20">20</option>
                                                    <option value="21" label="21">21</option>
                                                    <option value="22" label="22">22</option>
                                                    <option value="23" label="23">23</option>
                                                    <option value="24" label="24">24</option>
                                                    <option value="25" label="25">25</option>
                                                    <option value="26" label="26">26</option>
                                                    <option value="27" label="27">27</option>
                                                    <option value="28" label="28">28</option>
                                                    <option value="29" label="29">29</option>
                                                    <option value="30" label="30">30</option>
                                                    <option value="31" label="31">31</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group no-margin-hr no-padding-t no-border-t">
                                <div class="row">
                                    <label class="col-sm-3 control-label">Gender</label>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <select name="gender" id="gender" class="form-control ng-pristine ng-untouched ng-valid">
                                                    <option value="0">Please specify your Gender.</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="panel-profile-footer text-right">
                <button class="btn btn-save-profile-infor set-button-mobile no-boder-radius">
                    <span class="btn-txt">Save</span>
                    <span class="loader loader--white"><span class="loader_"></span></span>
                </button>
            </div>

        </div>
        {!! Form::close() !!}
        <!-- Language part -->
        
        {!! Form::open(['action' => ['ProfileController@update_language_information'], 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'container2']) !!}
        {!! Form::token() !!}
        <div class="container2" style="margin-top: 30px;padding-left:  0px;padding-right:  0px;">
            <div class="panel form-horizontal form-bordered">
                <div class="panel-profile-header">
                    <h4 class="panel-profile-title">Languages</h4>
                </div>
                <div class="panel-body no-padding-hr">
                    <div class="panel-padding-h no-padding-t no-border-t">
                        <div class="row">
                            <label class="col-sm-3 control-label">Native Language</label>
                            <div class="col-sm-9">
                                <ul class="list-inline margin-top-xs">
                                    <li class="">
                                        <select id="language_id" name="language_id" class="form-control ng-pristine ng-untouched ng-valid">
                                            <option value="0">Vietnamese</option>
                                            <option value="1">English</option>
                                            <option value="2">Chinesey</option>
                                        </select>        
                                    </li>
									<li>
										<select id="native_language" name="language_native_id" class="form-control ng-pristine ng-untouched ng-valid" style="display: none">
											<option value="">Please choose your native language</option>
                                            <option value="0">Vietnamese</option>
                                            <option value="1">English</option>
                                            <option value="2">Chinesey</option>
                                        </select>  
									</li>
                                </ul>
                                <a class="native_language_add">+ Add Native Language</a>
								<a class="native_language_cancle" style="display: none">- Cancel</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-padding-h no-padding-t no-border" style="margin-top: 20px;">
                        <div class="row hidden-phone">
                            <div class="col-sm-3">&nbsp;</div>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-sm-4">&nbsp;</div>
                                            <div class="col-sm-4">&nbsp;</div>
                                            <div class="col-sm-2 text-center">
                                                <strong>Learning</strong>
                                            </div>
                                            <div class="col-sm-2 text-center">
                                                <strong>Primary</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">&nbsp;</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-3 control-label">Languages you speak or learn</label>
                            <div class="col-sm-9 margin-top-xs">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="row" style="margin-bottom: 10px">
                                            <div class="col-sm-4">
                                                <select id="other_language_id" name="other_language_id" class="form-control ng-pristine ng-untouched ng-valid">
                                                    <option value="0">Vietnamese</option>
                                                    <option value="1">English</option>
                                                    <option value="2">Chinesey</option>
                            
                                                </select>
                                                
                                                <div class="ui-select-container ui-select-bootstrap dropdown ng-valid" theme="bootstrap">
                                                    <div class="ui-select-match" placeholder="Choose">
                                                        <a aria-label="Select box clear" style="margin-right: 10px" class="btn-link pull-right ng-hide">
                                                            <i class="fa fa-times" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                    <input type="text" tabindex="-1" class="form-control ui-select-search ng-pristine ng-untouched ng-valid ng-hide" placeholder="Choose">
                                                        <ul class="kp-adjust-select-scale ui-select-choices ui-select-choices-content ui-select-dropdown dropdown-menu" role="listbox">
                                                            <li class="ui-select-choices-group" id="ui-select-choices-2">
                                                                <div class="divider ng-hide"></div>
                                                                <div class="ui-select-choices-group-label dropdown-header ng-hide"></div>
                                                            </li>
                                                        </ul>
                                                    <ui-select-single></ui-select-single>
                                                </div>
                                                
                                            </div>
                                            <div class="col-sm-4">
                                                <select id="language_level" name="language_level" class="form-control margin-top-sm-phone">
                                                    <option value="0">Level</option>
                                                    <option value="1">A1:Beginner</option>
                                                    <option value="2">A2:Elementary</option>
                                                    <option value="3">B1:Intermediate</option>
                                                    <option value="4">B2:Upper Intermediate</option>
                                                    <option value="5">C1:Advanced</option>
                                                    <option value="6">C2:Proficient</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-2 text-center">
                                                <input type="checkbox" class="learning-primary-icon"> 
                                                <strong class="hidden-sm hidden-md hidden-lg padding-left-sm" style="position:  absolute;margin-top:  5px;">Learning</strong>
                                            </div>
                                            <div class="col-sm-2 text-center">
                                                <input type="radio" class="learning-primary-icon">
                                                <strong class="hidden-sm hidden-md hidden-lg padding-left-sm" style="position:  absolute;margin-top:  5px;">Primary</strong>
                                            </div>
                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">&nbsp;</div>
                                <div class="col-sm-9">
                                    <a href="javascript:void(0)" class="">+ Add more languages</a>
                                </div>        
                            </div>
                        </div>
                    </div>
                <div class="panel-profile-footer text-right" >
                    <button class="btn btn-save-profile-infor set-button-mobile no-boder-radius">
                        <span class="btn-txt" >Save</span>
                        <span class="loader loader--white">
                            <span class="loader_"></span>
                            </span>
                    </button>
                </div>
            </div>

        </div>
        {!! Form::close() !!}
        <!-- End of language part -->

        {!! Form::open(['action' => ['ProfileController@update_student_information'], 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'container3']) !!}
        {!! Form::token() !!}
        <!-- Student profile information -->
        <div class="container3" style="margin-top: 30px;padding-left:  0px;padding-right:  0px;">
            <div class="panel form-horizontal form-bordered">
                <div class="panel-profile-header">
                    <h4 class="panel-profile-title">Student Profile Information</h4>
                </div>
                <div class="panel-body no-padding-hr">
                    <div class="form-group no-margin-hr panel-padding-h no-padding-t no-border-t form-mobile-padding">
                        <div class="row">
                            <label class="col-sm-3 control-label">What are you looking for</label>
                            <div class="col-sm-9 margin-top-xs-phone">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <input id="looking_for" name="looking_for" type="text" class="form-control ng-pristine ng-untouched ng-valid" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group no-margin-hr panel-padding-h no-padding-t no-border-t form-mobile-padding">
                        <div class="row">
                            <label class="col-sm-3 control-label">Student Short Introduction</label>
                            <div class="col-sm-9 margin-top-xs-phone">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <textarea id="short_introduction" name="short_introduction" class="form-control text-area-style" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group no-margin-hr panel-padding-h no-padding-t no-border-t form-mobile-padding">
                        <div class="row">
                            <label class="col-sm-3 control-label">Student Long Introduction</label>
                            <div class="col-sm-9 margin-top-xs-phone">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <textarea id="long_introduction" name="long_introduction" class="form-control text-area-style" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-profile-footer text-right">
                    <button type="submit" class="btn btn-save-profile-infor set-button-mobile no-border-radius">
                        <span class="btn-txt">Save</span>
                            <span class="loader loader--white">
                                <span class="loader_">    
                            </span>
                        </span>
                    </button>
                </div>
            </div>

        </div>
        <!-- End of Student profile information -->
        {!! Form::close() !!}

        {!! Form::open(['action' => ['ProfileController@update_comunication'], 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'container4']) !!}
        {!! Form::token() !!}
        <!-- Edit communication Tool -->
        <div class="container4">
                <div class="panel form-horizontal form-bordered">
                    <div class="panel-profile-header">
                        <h4 class="panel-profile-title">Edit Communication Tools</h4>
                    </div>
                    <div class="panel-body no-padding-hr">
                        <div class="form-group no-margin-hr panel-padding-h no-padding-t no-border-t form-mobile-padding">
                            <div class="row">
                                <label class="col-sm-3 control-label">Skype</label>
                                <div class="col-sm-9 margin-top-xs-phone">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <input id="skype_id" name="skype_id" type="text" class="form-control ng-pristine ng-untouched ng-valid" rows="5">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group no-margin-hr panel-padding-h no-padding-t no-border-t form-mobile-padding">
                            <div class="row">
                                <label class="col-sm-3 control-label">FaceTime</label>
                                <div class="col-sm-9 margin-top-xs-phone">
                                    <div class="row"><div class="col-sm-9">
                                        <input  id="face_time" name="face_time" type="text" class="form-control ng-pristine ng-untouched ng-valid" rows="5">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group no-margin-hr panel-padding-h no-padding-t no-border-t form-mobile-padding">
                        <div class="row">
                            <label class="col-sm-3 control-label">Google Hangouts</label>
                            <div class="col-sm-9 margin-top-xs-phone">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <input id="google_hangout" name="google_hangout"  type="text" class="form-control ng-pristine ng-untouched ng-valid" rows="5">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group no-margin-hr panel-padding-h no-padding-t no-border-t form-mobile-padding">
                        <div class="row">
                            <label class="col-sm-3 control-label">QQ</label>
                            <div class="col-sm-9 margin-top-xs-phone">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <input id="qq" name="qq" type="text" class="form-control ng-pristine ng-untouched ng-valid" rows="5">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group no-margin-hr panel-padding-h no-padding-t no-border-t form-mobile-padding">
                        <div class="row">
                            <label class="col-sm-3 control-label">Wechat</label>
                            <div class="col-sm-9 margin-top-xs-phone">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <input id="we_chat" name="we_chat" type="text" class="form-control ng-pristine ng-untouched ng-valid" rows="5">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-profile-footer text-right">
                    <button type="submit" class="btn btn-save-profile-infor set-button-mobile no-border-radius">
                        <span class="btn-txt">Save</span>
                        <span class="loader loader--white">
                            <span class="loader_"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
        <!-- End of Edit communication Tool -->


</div>
<script>
jQuery(document).ready(function(){
	if(jQuery("#from_city").val() == "Other(other)" ){
		jQuery('#street_from').show();
	}
	if(jQuery("#living_city").val() == "Other(other)" ){
		jQuery('#street').show();
	}
	jQuery("#from_city").change(function(){
		if(jQuery("#from_city").val() == "Other(other)" ){
			jQuery('#street_from').show();
		}
		else{
			jQuery('#street_from').hide();
			jQuery('#street_from').val("");
		}
	})
	jQuery("#living_city").change(function(){
		if(jQuery("#living_city").val() == "Other(other)" ){
			jQuery('#street').show();
		}
		else{
			jQuery('#street').hide();
			jQuery('#street').val("");
		}
	})
	
	jQuery(".native_language_add").click(function(){
		jQuery(this).hide();
		jQuery(".native_language_cancle").show();
		jQuery("#native_language").show();
		
	})
	jQuery(".native_language_cancle").click(function(){
		jQuery(this).hide();
		jQuery(".native_language_add").show();
		jQuery("#native_language").val("");
		jQuery("#native_language").hide();
	})
	jQuery(".other_language_id").change(function(){
		console.log(jQuery(".other_language_id").val());
		
	})
	
});
</script>
<script>

    document.addEventListener("DOMContentLoaded", function(event) {     
        document.getElementById('from').value="{{$user->from_country_code}}";
        document.getElementById('living').value="{{$user->country_code}}";
        document.getElementById('timezone').value="{{$user->time_zone}}";
        var birth_day=new Date('{{$user->birth_day}}');
        document.getElementById('year').value=birth_day.getFullYear();
        document.getElementById('month').value=birth_day.getMonth()+ 1;
        document.getElementById('day').value=birth_day.getDate();
        document.getElementById('gender').value="{{$user->gender}}";
        document.getElementById('year').value=birth_day.getFullYear();
        document.getElementById('day').value=birth_day.getDate();
        var street_address = "{{$user->street_address}}";
        street_address=street_address.split("|");
        document.getElementById('living_city').value=street_address[0];
        document.getElementById('street').value=street_address[1];  
        var street_from = "{{$user->street_from}}";
        street_from=street_from.split("|");
        document.getElementById('from_city').value=street_from[0];
		console.log(street_from[0]);
        document.getElementById('street_from').value=street_from[1];      
        document.getElementById('face_time').value="{{$user->face_time}}";
        document.getElementById('qq').value="{{$user->qq}}";
        document.getElementById('skype_id').value="{{$user->skype_id}}";
        document.getElementById('google_hangout').value="{{$user->google_hangout}}";
        document.getElementById('we_chat').value="{{$user->we_chat}}";
        document.getElementById('looking_for').value="{{$user->looking_for}}";
        document.getElementById('short_introduction').value="{{$user->short_introduction}}";
        document.getElementById('long_introduction').value="{{$user->long_introduction}}";
        document.getElementById('language_id').value="{{$user->language_id}}";
        document.getElementById('other_language_id').value="{{$user->other_language_id}}";
        document.getElementById('language_level').value="{{$user->language_level}}";
});



    </script>


@endsection
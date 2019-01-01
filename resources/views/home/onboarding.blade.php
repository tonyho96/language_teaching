@extends('layouts.login')
@section('content')

    <div class="onboarding" style="background-color: #f1f1f1;padding-top: 20px;padding-bottom: 40px;">
        {!! Form::open(['action' => ['OnBoardingController@store'], 'method' => 'POST','name'=>'OnBoardingForm']) !!}
        {!! Form::token() !!}
        <div style="margin-top: 10px;">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if (session('warning'))
                <div class="alert alert-warning">
                    {{ session('warning') }}
                </div>
            @endif
        </div>
        <div id="step1" class="modal-box">
            <div class="modal-header text-center welcome-header">
                <p class="text-welcome">Welcome {{ $current_user->full_name }}!</p>
                <span ng-hide="teacherOnboarding">We just need a few things to get started.</span>
            </div>

            <div class="modal-body">
                <div class="text-lb text-bold text-center" style="padding: 10px 0 20px">
                    What is your native language?
                </div>
                <div class="select-language">
                    <select class="select-picker" id="language_id" name="language_id" onchange="hideError()">

                        {{--<optgroup label="">--}}
                            @foreach($all_languages as $all_language)
                            <option value="{{$all_language->id}}">{{$all_language->name}}</option>
                            @endforeach
                        {{--</optgroup>--}}

                    </select>
                </div>
                <div class="text-center select-language-intro">
                    You can add other languages later if you want.
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-xs-6 text-left" style="line-height: 30px">
                        <span class="text-muted">Step 1 of 3</span>
                    </div>
                    <div class="col-xs-6">
                        <button class="btn btn-next is-relative" style="padding-right: 20px" type="button" onclick="onClickStep1()">
                            <span class="btn-txt">NEXT</span>
                            <i class="fa fa-angle-right is-absolute" style="right: 8px; font-weight:700; top: 5px"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div id="step2" class="modal-box">
            <div class="modal-header text-center">
                <p class="text-welcome">Welcome {{ $current_user->full_name }}!</p>
                <span ng-hide="teacherOnboarding">We just need a few things to get started.</span>
            </div>

            <div class="modal-body">
                <div class="text-lb text-bold text-center" style="padding: 10px 0 20px">
                    Is this the correct time zone?
                </div>
                <div class="select-language">


                    <select class="select-picker" id="time_zones" name="time_zones">
                        @foreach($timeZones as $key => $value)
                        <option value="{{$value}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="text-center select-language-intro">
                    Local time from your device: <?php echo date(' F d Y H:i A', time());?>
                </div>

                <div class="text-lb text-bold text-center" style="padding: 10px 0 20px">
                    Which country are you in now?
                </div>
                <div class="select-language">
                    <select class="select-picker" id="location_id" name="location_id">
                        <option value="">Which country are you in now?</option>
                        @foreach($countries as $country)
                            <option value="{{$country->code}}">{{$country->name}}</option>
                        @endforeach
                    </select>
                </div>
            
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-xs-6 text-left" style="line-height: 30px">
                        <span class="text-muted">Step 2 of 3</span>
                    </div>
                    <div class="col-xs-6">
                        <button class="btn btn-next is-relative" style="padding-right: 20px" type="button" onclick="onClickStep2()">
                            <span class="btn-txt">NEXT</span>
                            <i class="fa fa-angle-right is-absolute" style="right: 8px; font-weight:700; top: 5px"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div id="step3" class="modal-box">
            <div class="modal-header text-center">
                <p class="text-welcome">Welcome {{ $current_user->full_name }}!</p>
                <span ng-hide="teacherOnboarding">We just need a few things to get started.</span>
            </div>

            <div class="modal-body">
                <div class="text-lb text-bold text-center" style="padding: 10px 0 20px">
                    Which language are you learning?
                    You can add other languages later if you want.
                </div>
                <div class="select-language">
                    <select class="select-picker" id="other_language_id" name="other_language_id">
                        <optgroup label="POPULAR">
                            @foreach($languages as $language)
                            <option value="{{$language->id}}">{{$language->name}}</option>
                            @endforeach
                        </optgroup>
                    </select>
                </div>

                <div class="text-lb text-bold text-center select-english-title" style="padding: 10px 0 20px">
                    What is your current level in Vietnamese?
                </div>

                <div class="select-english-level row">
                    <div class="col-sm-3">
                        <div class="radio-wrapper teacher clearfix" style="height: auto">
                            <div class="content">Beginner</div>
                            <div class="radio-icon"><span></span></div>
                            <input type="radio" class="select-level-radio"  name="language_level" value="{{config('language.language_level.beginner')}}">
                        </div>

                    </div>
                    <div class="col-sm-3">
                        <div class="radio-wrapper teacher clearfix" style="height: auto">
                            <div class="content">Elementary</div>
                            <div class="radio-icon"><span></span>
                            </div>
                            <input type="radio" class="select-level-radio"  name="language_level" value="{{config('language.language_level.elementary')}}">

                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="radio-wrapper teacher clearfix" style="height: auto">
                            <div class="content">Intermediate</div>
                            <div class="radio-icon"><span></span></div>
                            <input type="radio" class="select-level-radio"name="language_level" value="{{config('language.language_level.intermediate')}}">

                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="radio-wrapper teacher clearfix" style="height: auto">
                            <div class="content">Advanced</div>
                            <div class="radio-icon"><span></span>
                            </div>
                            <input type="radio" class="select-level-radio" name="language_level"  value="{{config('language.language_level.advanced')}}">
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-xs-6 text-left" style="line-height: 30px">
                        <span class="text-muted">Step 3 of 3</span>
                    </div>
                    <div class="col-xs-6">
                        <button class="btn btn-next is-relative" style="padding-right: 20px" type="button" onclick="onClickStep3()">
                            <span class="btn-txt">NEXT</span>
                            <i class="fa fa-angle-right is-absolute" style="right: 8px; font-weight:700; top: 5px"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div id="step4" class="modal-box find-teacher">
            <div class="find-teacher-header text-center">
                <img src="/front/images/find_teacher.png"/>
            </div>

            <div class="find-teacher-body">
                <div class="text-center" style="padding: 10px 0 20px">
                    <p class="teacher-title">Let's find you a teacher</p>

                    <span>italki has more than 4000 teachers. </span><br>
                    <span>The next three questions will help us to find the best one for you.</span>

                </div>
            </div>

            <div class="find-teacher-footer text-center" style="position: relative;padding: 0 0 30px">
                <button type="button" class="btn find-teacher-btn" onclick="onClickStep4()" style="background-color: #fff; border:none;border-radius: 2px">
                        <span class="btn-txt" style="color: #01B1AE; border:none; background-color: #fff">
                            <i class="fa fa-search"></i>&nbsp;&nbsp;FIND A TEACHER
                        </span>
                </button>
            </div>
            <div class="find-teacher-footer text-center" style="position: relative;padding: 50px 0 20px 0">
                <button type="submit" class="btn find-teacher-btn"  style="background-color: #15b1af; border: solid 1px #ffffff;border-radius: 2px">
                        <span class="btn-txt" style="color: #ffffff; border:none;background-color: #15b1af;color: #ffffff">
                            I'M NOT LOOKING FOR A TEACHER
                        </span>
                </button>
            </div>
        </div>


        <div id="step5" class="modal-box">
            <div class="let-find-teacher-header text-center">
                <p class="let-find-teacher-title">Let's find you a teacher</p>
            </div>
            <div class="find-teacher-body">
                <div class="text-center" style="padding: 10px 0 0px">
                    <p class="type-teacher-title">Which type of teacher would you prefer?</p>
                </div>
            </div>

            <div class="row pro-teacher">
                <div class="col-md-6 col-sm-6">
                    <div class="radio-wrapper teacher pro-teacher clearfix">
                        <div class="icon">
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <div class="content">
                            <h4>Professional Teacher</h4>
                            <p>Certified professionals who provide structured lessons and
                                materials or conversation practice for you.
                            </p>
                        </div>
                        <div class="radio-icon">
                            <span></span>
                            <input type="radio" name="teacher_type" class="type-teacher-radio custom-control-input"
                                   value="dont_save">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 teacher">
                    <div class="radio-wrapper teacher com-tutor clearfix">
                        <div class="icon">
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <div class="content">
                            <h4>Community Tutor</h4>
                            <p>Fluent speakers who are friendly, helpful and great at informal
                                tutoring or conversation practice.
                            </p>
                        </div>
                        <div class="radio-icon">
                            <span></span>
                            <input type="radio" name="teacher_type" class="type-teacher-radio custom-control-input"
                                   value="dont_save">
                        </div>
                    </div>
                </div>
            </div>

            <div class="pro-teacher-footer">
                <div class="row">
                    <div class="col-xs-6"></div>
                    <div class="col-xs-6">
                            <span class="is-relative">
                                <button class="btn select-type-teacher-active is-relative" onclick="onClickStep5()" style="padding-right: 20px" type="button">Next
                                </button>
                                <i class="fa fa-angle-right next-type-teacher is-absolute is-relative"></i>
                            </span>
                    </div>
                </div>
            </div>


        </div>


        <div id="step6" class="modal-box">
            <div class="let-find-teacher-header text-center">
                <p class="let-find-teacher-title">Let's find you a teacher</p>
            </div>
            <div class="find-teacher-body">
                <div class="text-center" style="padding: 10px 0 20px">
                    <p class="language-title">Are you interested in being contacted for language exchange?</p>

                    <span>If you select “Yes”, your profile will be visible on the language partner search page.</span><br>
                    <span>You will be able to change this setting later.</span>

                </div>
            </div>

            <div class="row pro-teacher">
                <div class="col-md-6 col-sm-6">
                    <div class="radio-wrapper radio-language-exchange teacher clearfix">
                        <div class="content">
                            <h5>Yes</h5>
                            <p>Let other students on italki find me and contact me for language exchange.
                            </p>
                        </div>
                        <div class="radio-icon">
                            <span></span>
                            <input type="radio" name="student_profile_status" class="type-teacher-radio custom-control-input"
                                   value="{{config('auth.student_profile_status.public')}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 teacher">
                    <div class="radio-wrapper radio-language-exchange teacher com-tutor clearfix">
                        <div class="content">
                            <h5>No</h5>
                            <p>I prefer to study with a teacher or a tutor
                            </p>
                        </div>
                        <div class="radio-icon">
                            <span></span>
                            <input type="radio" name="student_profile_status" class="type-teacher-radio custom-control-input"
                                   value="{{config('auth.student_profile_status.private')}}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="pro-teacher-footer">
                <div class="row">
                    <div class="col-xs-6"></div>
                    <div class="col-xs-6">
                            <span class="is-relative">
                                <button class="btn select-type-teacher-active is-relative" onclick="onClickStep6()" style="padding-right: 20px" type="button">Next
                                </button>
                                <i class="fa fa-angle-right next-type-teacher is-absolute is-relative"></i>
                            </span>
                    </div>
                </div>
            </div>


        </div>

        {{--Không có step này trên italki.com--}}
        {{--<div id="step6_1" class="modal-box">--}}
            {{--<div class="let-find-teacher-header text-center">--}}
                {{--<p class="let-find-teacher-title">Let's find you a teacher xádasd</p>--}}
            {{--</div>--}}
            {{--<div class="find-teacher-body">--}}
                {{--<div class="text-center" style="padding: 10px 0 20px">--}}
                    {{--<p class="language-title">Would you prefer a teacher from a particular country?</p>--}}

                    {{--<span>You will be able to change this setting later.</span><br>--}}

                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="row pro-teacher radio">--}}



                    {{--<div class="col-md-6 col-sm-6">--}}
                        {{--<div class="radio-wrapper radio-country">--}}
                            {{--<div class="content">--}}
                                {{--<p></p>--}}
                            {{--</div>--}}
                            {{--<div class="radio-icon">--}}
                                {{--<span></span>--}}
                                {{--<input value="" type="radio" name="teacher_location_id"--}}
                                       {{--class="type-teacher-radio custom-control-input">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}



                {{--<div class="col-md-6 col-sm-6">--}}
                    {{--<div class="radio-wrapper radio-country ">--}}
                        {{--<div class="content">--}}
                            {{--<p>I do not have a preference</p>--}}
                        {{--</div>--}}
                        {{--<div class="radio-icon">--}}
                            {{--<span></span>--}}
                            {{--<input type="radio" name="teacher_location_id" class="type-teacher-radio custom-control-input"--}}
                                   {{--value="null">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="pro-teacher-footer">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-xs-6"></div>--}}
                    {{--<div class="col-xs-6">--}}
                            {{--<span class="is-relative">--}}
                                {{--<button class="btn select-type-teacher-active is-relative" onclick="onClickStep6_1()" style="padding-right: 20px" type="button">Next--}}
                                {{--</button>--}}
                                {{--<i class="fa fa-angle-right next-type-teacher is-absolute is-relative"></i>--}}
                            {{--</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}


        {{--</div>--}}

        <div id="step7" class="modal-box">
            <div class="let-find-teacher-header text-center">
                <p class="let-find-teacher-title">Let's find you a teacher</p>
            </div>
            <div class="find-teacher-body">
                <div class="text-center" style="padding: 10px 0 20px">
                    <p class="language-title">Do you want your teacher to specialize in anything?</p>
                    <span>You will be able to change this setting later.</span><br>

                </div>
            </div>

            <div class="row pro-teacher">
                @foreach($teacher_subjects as $teacher_subject)
                <div class="col-md-6 col-sm-6">
                    <div class="radio-wrapper radio-country">
                        <div class="content">
                            <p>{{$teacher_subject->name}}</p>
                        </div>
                        <div class="radio-icon">
                            <span></span>
                            <input value="{{$teacher_subject->id}}" type="radio" name="subject_id"
                                   class="type-teacher-radio custom-control-input">
                        </div>
                    </div>
                </div>
                @endforeach



                <div class="col-md-6 col-sm-6">
                    <div class="radio-wrapper radio-country ">
                        <div class="content">
                            <p>None of the above</p>
                        </div>
                        <div class="radio-icon">
                            <span></span>
                            <input type="radio" name="subject_id"  value="null" class="type-teacher-radio custom-control-input">
                        </div>
                    </div>
                </div>
            </div>
            <div class="pro-teacher-footer">
                <div class="row">
                    <div class="col-xs-6"></div>
                    <div class="col-xs-6">
                            <span class="is-relative">
                                <button class="btn select-type-teacher-active is-relative" onclick="onClickStep7()" style="padding-right: 20px" type="button">Next
                                </button>
                                <i class="fa fa-angle-right next-type-teacher is-absolute is-relative"></i>
                            </span>
                    </div>
                </div>
            </div>


        </div>


        <div id="step8" class="modal-box">
            <div class="send-email-header text-center">
                <img src="/front/images/send_email.png"/>
            </div>
            <div class="find-teacher-body">
                <div class="text-center" style="padding: 10px 0 20px">
                    <p class="send-email-title">
                        Check your email to complete your registration!</p>
                    <span>Please verify your email address before scheduling your first lesson with an italki teacher.</span><br>

                </div>
            </div>

            <div class="send-email-footer">
                <div class="row text-center">
                    <span class="is-relative">
                        <button class="btn btn-view-teacher" style="padding-right: 20px"  type="submit">VIEW TEACHERS
                        </button>
                    </span>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>

@endsection

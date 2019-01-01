@extends('layouts.login')
@section('register_login_btn')
    <a class="btn btn-outline btn-login text-up signin-button"
       style="margin: 10px 0px;height: 36px;line-height:inherit;border-radius: 2px" href="{{route('login')}}">LOGIN</a>
@endsection
@section('content')
    <div class="register-content">
        <div class="register-box-body">
            <p class="register-title">Sign up</p>
            <form action="{{ url(config('adminlte.register_url', 'register')) }}" method="post" autocomplete="off">
                {!! csrf_field() !!}

                <div class="form-group has-feedback">
                    <input type="text" name="full_name" class="form-control input-lg" value="{{ old('name') }}"
                           placeholder="{{ trans('adminlte::adminlte.full_name') }}" required>
                    <span class="glyphicon glyphicon-user form-control-feedback form-email-icon"></span>

                    @if ($errors->has('name'))
                        <span class="help-block">
                                <p>Between 3 and 20 characters with no more than 5 numbers.</p>
                            </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                    <input type="email" name="email" class="form-control input-lg" value="{{ old('email') }}"
                           placeholder="{{ trans('adminlte::adminlte.email') }}" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback form-email-icon"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                                <p>Please provide a valid email address.</p>
                            </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                    <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                        <input type="password" name="password" class="form-control input-lg"
                               placeholder="{{ trans('adminlte::adminlte.password') }}" required>
                        <span class="glyphicon glyphicon-lock form-control-feedback form-email-icon"></span>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <p>Password must be between 6 to 20 characters; capitalization matters!</p>
                            </span>
                        @endif
                    </div>
                </div>
                <?php
                $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                $becomeTeacher = 'teacher';
                $checkRole = strpos($actual_link, $becomeTeacher);

                if ($checkRole == false) {//user is student
                    echo '<input type="hidden" name="teacherOnBoarding" value="false">';
                } else {//user is teacher
                    echo ' <input type="hidden" name="teacherOnBoarding" value="true">';
                }
                ?>


                <button type="submit" class="btn btn-block btn-register">SIGN UP WITH EMAIL</button>
            </form>
            <div class="auth-links">
                    <span>By creating an account, you agree to our
                        <a href="#">Terms of Service</a> and other policies.
                        <a href="#">Learn more</a>
                    </span>
            </div>
        </div>
    </div>
@endsection

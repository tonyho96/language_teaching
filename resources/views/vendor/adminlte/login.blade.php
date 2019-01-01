@extends('layouts.login')
@section('register_login_btn')
    <a class="btn btn-outline btn-login text-up signin-button"
       style="margin: 10px 0px;height: 36px;line-height:inherit;border-radius: 2px" href="/register">SIGN UP</a>
@endsection
@section('content')
    <div class="login-content">

        <div class="login-box-body">
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

            <h4 class="login-title" translate="C0206" style="font-weight: bold">Log in</h4>
            <form action="{{ url(config('adminlte.login_url', 'login')) }}" method="post">
                {!! csrf_field() !!}
                <hr style="margin: 8px 0 16px">

                <p style="font-size: 12px;margin-bottom: 16px; margin-top: 4px"><strong>Log In with Email</strong></p>

                <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                    <input type="email" name="email" class="form-control input-lg" value="{{ old('email') }}"
                           placeholder="{{ trans('adminlte::adminlte.email') }}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback form-email-icon"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                    <input type="password" name="password" class="form-control input-lg"
                           placeholder="{{ trans('adminlte::adminlte.password') }}">
                    <span class="glyphicon glyphicon-lock form-control-feedback form-email-icon"></span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="form-group" style="color: #777777;height: 48px;margin-top: 30px">
                    <input type="checkbox" class="custom-control-input col-sm-1"> </input>
                    <span class="keep-me-title lbl col-sm-9 col-sm-offset-1"> Keep me logged in</span>

                </div>

                <div class="form-group">
                    <button id="login" type="submit" class="btn btn-primary btn-lg btn-block"
                            style="font-weight: bold;border-radius: 3px">
                        LOG IN
                    </button>
                </div>

            </form>
            <div class="auth-links">
                <a href="{{ url(config('adminlte.password_reset_url', 'password/reset')) }}"
                   class="text-center">Forgot your password?</a>
                <br>
                @if (config('adminlte.register_url', 'register'))
                @endif
            </div>
        </div>
    </div>
@endsection

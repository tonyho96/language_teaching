@extends('layouts.login')
@section('register_login_btn')
    <a class="btn btn-outline btn-login text-up signin-button"
       style="margin: 10px 0px;height: 36px;line-height:inherit;border-radius: 2px" href="/register">SIGN UP</a>
@endsection
@section('content')

    <div class="login-content">
        <div class="login-box-body">
            <h4 class="login-title" translate="C0206" style="font-weight: bold">Reset Password</h4>
            <form action="{{ url(config('adminlte.password_reset_url', 'password/reset')) }}" method="post">
                {!! csrf_field() !!}
                <hr style="margin: 8px 0 16px">

                <p style="font-size: 12px;margin-bottom: 16px; margin-top: 4px"><strong>Reset Password with Email</strong></p>

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


                <div class="form-group">
                    <button id="login" type="submit" class="btn btn-primary btn-lg btn-block"
                            style="font-weight: bold;border-radius: 3px">
                        {{ trans('adminlte::adminlte.send_password_reset_link') }}
                    </button>
                </div>

            </form>

        </div>
    </div>


@stop


@extends('layout.front.front')
@section('title','Customer Login')
@section('content')

    {{--testimonial--}}
    {{--@include('layout.front.lib._extra.testimonial')--}}
    <div class="container">
        <div class="row mt-3">
            <div class="col-sm-6 mt-5">
                <form method="POST" action="{{ url('/customer/login') }}">
                    {{ csrf_field() }}
                    <h2>Customer Login</h2>
                    <div class="form-group">
                        <label class="control-label" for="input-email">E-Mail</label>
                        <input type="text" name="email" value="" placeholder="E-Mail" id="input-email"
                               class="form-control">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="input-password">Password</label>
                        <input type="password" name="password" value="" placeholder="Password" id="input-password"
                               class="form-control">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
{{--                        <a href="forgetpassword.html" class="forgot">Forgotten Password</a></div>--}}
                    <input type="submit" value="Login" id="button-login" data-loading-text="Loading..."
                           class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>

@endsection

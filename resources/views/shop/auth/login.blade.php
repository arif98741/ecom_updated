<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('asset/shop/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{ asset('asset/shop/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/shop/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/shop/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body>

<div class="splash-container">
    <div class="card ">
        <div class="card-header text-center"><a href="#" class=""><h3>Shop Login</h3></a>
            <span class="splash-description">Please enter your user information.</span></div>
        <div class="card-body">
            <form method="POST" action="{{ url('/shop/login') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <input id="email" type="email" name="email" class="form-control form-control-lg" id="username"
                           type="text" placeholder="Username"
                           autocomplete="off" value="{{ old('email') }}" autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input name="password" class="form-control form-control-lg" id="password" type="password"
                           placeholder="Password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-group" style="display:none;">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
            </form>
        </div>
        <div class="card-footer bg-white p-0  ">
            <div class="card-footer-item card-footer-item-bordered">
                <a href="{{ url('shop/register') }}" class="footer-link">Register new shop</a></div>
            <div class="card-footer-item card-footer-item-bordered">
                <a href="#" class="footer-link">Forgot Password</a>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('asset/shop/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
<script src="{{ asset('asset/shop/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
</body>

</html>

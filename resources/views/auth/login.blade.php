<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Login</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/')}}assets/dist/css/adminlte.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('/')}}assets/plugins/iCheck/square/blue.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>

<body class="hold-transition login-page">
<div class="login-box" style="margin-top: 50px">

    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign In to Start Your Journey</p>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group has-feedback">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                    <span class="text-danger"> {{$errors->has('email') ? $errors->first('email'):''}} </span>

                </div>

                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" required autocomplete="current-password" placeholder="Password">
                    <span class="text-danger"> {{$errors->has('password') ? $errors->first('password'):''}} </span>

                </div>

                <div class="row">

                    <div class="col-8">
                        <div class="checkbox icheck">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>


                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>

                </div>

            </form>

            <div class="social-auth-links text-center mb-3">

                <p>- OR -</p>

                <!--Social-Auth-Links -->

                <a href="{{url('login/github')}}" class="btn btn-block btn-dark">
                    <i class="fa fa-github mr-2"></i> Sign in using GitHub
                </a>

            </div>

            @if (Route::has('password.request'))
                <p class="mb-1">
                    <a href="{{ route('password.request') }}" style="margin-left: 88px">I forgot my password</a>
                </p>
            @endif

            <p class="mb-0">
                <a href="{{route('register')}}" style="margin-left: 65px">Register a new membership</a>
            </p>
        </div>

    </div>
</div>


<!-- jQuery -->
<script src="{{asset('/')}}assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/')}}assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="{{asset('/')}}assets/plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        })
    })
</script>
</body>
</html>

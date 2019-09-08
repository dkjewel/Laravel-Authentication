<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Registration Page</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/')}}assets/dist/css/adminlte.min.css">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>

<body class="hold-transition register-page">

<div class="register-box" style="margin-top: 40px">
    <div class="card">
        <div class="card-body register-card-body">

            <p class="login-box-msg">Register as New Member</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                           placeholder="Your Name">
                    <span class="text-danger"> {{$errors->has('name') ? $errors->first('name'):''}} </span>
                </div>

                <div class="form-group has-feedback">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                           placeholder="Email">
                    <span class="text-danger"> {{$errors->has('email') ? $errors->first('email'):''}} </span>

                </div>

                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <span class="text-danger"> {{$errors->has('password') ? $errors->first('password'):''}} </span>

                </div>

                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password_confirmation"
                           placeholder="Retype password">
                    <span
                        class="text-danger"> {{$errors->has('password_confirmation') ? $errors->first('password_confirmation'):''}} </span>

                </div>

                <div>
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                </div>

            </form>

            <div class="social-auth-links text-center">

                <p>- OR -</p>

                <a href="#" class="btn btn-block btn-primary">
                    <i class="fa fa-facebook mr-2"></i>
                    Sign up using Facebook
                </a>

                <a href="#" class="btn btn-block btn-danger">
                    <i class="fa fa-google-plus mr-2"></i>
                    Sign up using Google+
                </a>
            </div>

            <a href="{{route('login')}}" style="margin-left: 50px">I already have a membership</a>
        </div>

    </div>

</div>


<!-- jQuery -->
<script src="{{asset('/')}}assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/')}}assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>
</html>

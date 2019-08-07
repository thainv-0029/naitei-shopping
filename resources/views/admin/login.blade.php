<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@lang('admin_auth.title.login')</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{ asset('bower_components/admin_template/apple-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('bower_components/admin_template/favicon.ico') }}">
    <link rel="stylesheet"
        href="{{ asset('bower_components/admin_template/vendors/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('bower_components/admin_template/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('bower_components/admin_template/vendors/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet"
        href="{{ asset('bower_components/admin_template/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/admin_template/vendors/selectFX/css/cs-skin-elastic.css') }}">

    <link rel="stylesheet" href="{{ asset('bower_components/admin_template/assets/css/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body class="bg-dark">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="{{ asset('bower_components/admin_template/images/logo.png') }}" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form action="{{ route('admin_login') }}" method="POST">
                        @csrf
                        @if ( isset($err) )
                        <div class="col-sm-12">
                            <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                                <span class="badge badge-pill badge-danger">@lang('admin.error')</span> {{ $err }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        @elseif ( $errors->any() )
                        <div class="col-sm-12">
                            @foreach ( $errors->all() as $error )
                            <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                                <span class="badge badge-pill badge-danger">@lang('admin.error')</span> {{ $error }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endforeach
                        </div>
                        @endif
                        <div class="form-group">
                            <label>@lang('admin.loginForm.email')</label>
                            <input type="text" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <label>@lang('admin.loginForm.pass')</label>
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">@lang('admin.login')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('bower_components/admin_template/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('bower_components/admin_template/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('bower_components/admin_template/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bower_components/admin_template/assets/js/main.js') }}"></script>
</body>

</html>

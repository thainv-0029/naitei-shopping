<!DOCTYPE html>
<html>
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--CSS============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('bower_components/naitei-shopping/shopping-assets/images/favicon.ico') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/naitei-shopping/shopping-assets/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('bower_components/naitei-shopping/shopping-assets/fonts/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('bower_components/naitei-shopping/shopping-assets/fonts/icon-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/naitei-shopping/shopping-assets/css/util.css') }}">
    <!--===============================================================================================-->
    <title>Fast food</title>
    <!-- CSS ============================================= -->
    <link rel="stylesheet" href="{{ asset('bower_components/naitei-shopping/shopping-assets/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/naitei-shopping/shopping-assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/naitei-shopping/shopping-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/naitei-shopping/shopping-assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/naitei-shopping/shopping-assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/naitei-shopping/shopping-assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/naitei-shopping/shopping-assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/naitei-shopping/shopping-assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/naitei-shopping/shopping-assets/css/custom.css') }}">

</head>

<body>
    <div id="app">
        <main class="py-4">
            <div class="limiter">
                <div class="container-login100 login-form-backgound">
                    <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">

                        @yield('content')

                    </div>
                </div>
            </div>

        </main>
    </div>
</body>

</html>

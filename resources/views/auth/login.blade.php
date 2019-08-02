@extends('auth.app')

@section('content')

<form class="login100-form validate-form flex-sb flex-w" action="{{ route('login') }}" method="POST">
    @csrf
    @foreach ($errors->all() as $error)
    <p class="alert alert-danger form-alert">{{ $error }}</p>
    @endforeach
    <span class="login100-form-title p-b-53">
        {{ __('auth.login') }}
    </span>

    <a href="#" class="btn-face m-b-20">
        <i class="fa fa-facebook-official"></i>
        Facebook
    </a>

    <a href="#" class="btn-google m-b-20">
        <img src="{{ asset('bower_components/naitei-shopping/shopping-assets/images/icon-google.png') }}" alt="GOOGLE">
        Google
    </a>

    <div class="p-t-31 p-b-9">
        <span class="txt1">
            {{ __('form.email') }}
        </span>
    </div>
    <div class="wrap-input100 validate-input">
        <input class="input100" type="text" name="email" placeholder="{{ __('form.email') }}">
        <span class="focus-input100"></span>
    </div>

    <div class="p-t-13 p-b-9">
        <span class="txt1">
            {{ __('form.password') }}
        </span>

        <a href="" class="txt2 bo1 m-l-5">
            {{ __('form.forgot').'?' }}
        </a>
    </div>
    <div class="wrap-input100 validate-input">
        <input class="input100" type="password" name="password" placeholder="{{ __('form.password') }}">
        <span class="focus-input100"></span>
    </div>

    <div class="container-login100-form-btn m-t-17">
        <button class="login100-form-btn">
            {{ __('auth.login') }}
        </button>
    </div>

    <div class="w-full text-center p-t-55">
        <span class="txt2">
            {{ __('auth.not-member').'?' }}
        </span>

        <a href="register" class="txt2 bo1">
            {{ __('auth.register') }}
        </a>
    </div>
</form>
@endsection

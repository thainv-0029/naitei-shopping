@extends('auth.app')

@section('content')

<form class="login100-form validate-form flex-sb flex-w" action="{{ route('register') }}" method="POST">
    @csrf
    @foreach ($errors->all() as $error)
        <p class="alert alert-danger form-alert">{{ $error }}</p>
    @endforeach

    <span class="login100-form-title p-b-53">
        {{ __('auth.register') }}
    </span>
    <div class="p-t-31 p-b-9">
        <span class="txt1">
            {{ __('form.name') }}
        </span>
    </div>
    <div class="wrap-input100 validate-input">
        <input class="input100" type="text" name="name">
        <span class="focus-input100"></span>
    </div>
    <div class="p-t-31 p-b-9">
        <span class="txt1">
            {{ __('form.email') }}
        </span>
    </div>
    <div class="wrap-input100 validate-input">
        <input class="input100" type="text" name="email">
        <span class="focus-input100"></span>
    </div>

    <div class="p-t-31 p-b-9">
        <span class="txt1">
            {{ __('form.phone-number') }}
        </span>
    </div>
    <div class="wrap-input100 validate-input">
        <input class="input100" type="text" name="phone_number">
        <span class="focus-input100"></span>
    </div>

    <div class="p-t-13 p-b-9">
        <span class="txt1">
            {{ __('form.password') }}
        </span>
    </div>

    <div class="wrap-input100 validate-input">
        <input class="input100" type="password" name="password">
        <span class="focus-input100"></span>
    </div>
    <div class="p-t-13 p-b-9">
        <span class="txt1">
            {{ __('form.confirm-password') }}
        </span>
    </div>
    <div class="wrap-input100 validate-input">
        <input class="input100" type="password" name="password_confirmation">
        <span class="focus-input100"></span>
    </div>

    <div class="container-login100-form-btn m-t-17">
        <button class="login100-form-btn">
            {{ __('auth.register') }}
        </button>
    </div>

    <div class="w-full text-center p-t-55">
        <span class="txt2">
            {{ __('form.have-account').'?' }}
        </span>

        <a href="{{ route('login') }}" class="txt2 bo1">
            {{ __('auth.login') }}
        </a>
    </div>
</form>
@endsection

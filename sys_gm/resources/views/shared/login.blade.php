@extends('welcome')

@section('title', 'login/Register')

@section('content')
<!-- Session Status -->
<x-auth-session-status class="" :status="session('status')" />

<form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email Address -->
    <div>
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="">
        <x-input-label for="password" :value="__('Password')" />

        <x-text-input id="password" class=""
                        type="password"
                        name="password"
                        required autocomplete="current-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Remember Me -->
    <div class="">
        <label for="remember_me" class="">
            <input id="remember_me" type="checkbox" class="" name="remember">
            <span class="">{{ __('Remember me') }}</span>
        </label>
    </div>

    <div class="">
        @if (Route::has('password.request'))
            <a class="" href="{{ route('password.request') }}">
                Forgot your password? 
            </a>
        @endif

        <x-primary-button class="">
            {{ __('Log in') }}
        </x-primary-button>
    </div>
</form>
@endsection

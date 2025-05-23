@extends('welcome')

@section('title', 'login/Register')

@section('content')

<div class="">
    {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
</div>

<form method="POST" action="{{ route('password.confirm') }}">
    @csrf

    <!-- Password -->
    <div>
        <x-input-label for="password" :value="__('Password')" />

        <x-text-input id="password" class=""
                        type="password"
                        name="password"
                        required autocomplete="current-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <div class="">
        <x-primary-button>
            {{ __('Confirm') }}
        </x-primary-button>
    </div>
</form>


@endsection
    


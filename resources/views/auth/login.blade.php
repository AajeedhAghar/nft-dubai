@extends('layouts.master')
@section('metaDesc')
@endsection

@section('links')
    <style>
    </style>
@endsection
@section('pageName') @lang('pagesname.website') @endsection

@section('body')

{{--<x-guest-layout>--}}
{{--    <x-jet-authentication-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <x-jet-authentication-card-logo />--}}
{{--        </x-slot>--}}

{{--        <x-jet-validation-errors class="mb-4" />--}}

{{--        @if (session('status'))--}}
{{--            <div class="mb-4 font-medium text-sm text-green-600">--}}
{{--                {{ session('status') }}--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        <form method="POST" action="{{ route('login') }}">--}}
{{--            @csrf--}}

{{--            <div>--}}
{{--                <x-jet-label value="{{ __('Email') }}" />--}}
{{--                <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-jet-label value="{{ __('Password') }}" />--}}
{{--                <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />--}}
{{--            </div>--}}

{{--            <div class="block mt-4">--}}
{{--                <label class="flex items-center">--}}
{{--                    <input type="checkbox" class="form-checkbox" name="remember">--}}
{{--                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--                </label>--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                @if (Route::has('password.request'))--}}
{{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
{{--                        {{ __('Forgot your password?') }}--}}
{{--                    </a>--}}
{{--                @endif--}}

{{--                <x-jet-button class="ml-4">--}}
{{--                    {{ __('Login') }}--}}
{{--                </x-jet-button>--}}

{{--                <a href="{{ url('auth/google') }}" style="margin-top: 0px !important;background: green;color: #ffffff;padding: 5px;border-radius:7px;" class="ml-4">--}}
{{--                  <strong>Google Login</strong>--}}
{{--                </a>--}}

{{--                <a href="{{ url('auth/facebook') }}" style="margin-top: 0px !important;background: rgb(5, 126, 219);color: #ffffff;padding: 5px;border-radius:7px;" class="ml-4">--}}
{{--                    <strong>FB Login</strong>--}}
{{--                  </a>--}}
{{--            </div>--}}

{{--        </form>--}}
{{--    </x-jet-authentication-card>--}}
{{--</x-guest-layout>--}}
<div class="login-main">
    <div class="container-fluid">
        <div class="log-in">
            <div class="row row-login">
                <div class="col-lg-6 col-md-8 col-login-otr">
                    <div class="col-login-inr">
                        <div class="content">
                            <h3 class="head heading-h3">Login to Ethoz</h3>
                            <div class="login-social">
                                <span class="line"></span>
                                <p class="desc body-s">Login with socials</p>
                                <span class="line"></span>
                            </div>
                            <div class="btn-main">
                                <div class="btn-otr">
                                    <a href="{{ url('auth/google') }}" class="btn">
                                        <svg class="icon" width="19" height="18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.5 9h8a8 8 0 11-2.343-5.657" stroke="#366CE3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        <p class="text body-sb">Google</p>
                                    </a>
                                </div>
                                <div class="btn-otr">
                                    <a href="{{ url('auth/facebook') }}" class="btn">
                                        <svg class="icon" width="22" height="22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11 21c5.523 0 10-4.477 10-10S16.523 1 11 1 1 5.477 1 11s4.477 10 10 10z" stroke="#366CE3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M15.167 6.833H13.5a2.5 2.5 0 00-2.5 2.5V21M7.664 12.667h6.667" stroke="#366CE3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        <p class="text body-sb">Facebook</p>
                                    </a>
                                </div>
                            </div>
                            <div class="login-social">
                                <span class="line"></span>
                                <p class="desc body-s">Or login with email</p>
                                <span class="line"></span>
                            </div>
                            <x-jet-validation-errors class="mb-4" />

                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form class="form-main" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="input-otr ">
                                    <input class="input" type="email" id="email" name="email" placeholder="Your Email Address" required>
                                </div>
                                <div class="input-otr input-otr-2">
                                    <input class="input" type="password" id="password" name="password" placeholder="Enter your password" required>
                                </div>
                                <div class="check-main">
                                    <div class="check">
                                        <label>
                                                    <span class="check-inner">
                                                        <input type="checkbox"  id="remember_me" name="remember" class="input-check opacity-0 absolute">
                                                        <svg class="fill-current" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="12" fill="#366CE3"/><path d="M16.521 8.938l-6.125 6.125L7.335 12" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                    </span>
                                            <span class="select-none body-sb">Remember Me</span>
                                        </label>
                                    </div>
                                    <a href="{{route('password.request')}}" class="forget body-sb">Forgot Password?</a>
                                </div>
                                <div class="action-otr">
                                    <input class="button body-sb" type="submit" value="Login">
                                </div>
                            </form>
                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script>

    </script>
@endsection

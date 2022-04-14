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

{{--        <form method="POST" action="{{ route('register') }}">--}}
{{--            @csrf--}}

{{--            <div>--}}
{{--                <x-jet-label for="name" value="{{ __('Name') }}" />--}}
{{--                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-jet-label for="email" value="{{ __('Email') }}" />--}}
{{--                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-jet-label for="password" value="{{ __('Password') }}" />--}}
{{--                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />--}}
{{--                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())--}}
{{--                <div class="mt-4">--}}
{{--                    <x-jet-label for="terms">--}}
{{--                        <div class="flex items-center">--}}
{{--                            <x-jet-checkbox name="terms" id="terms"/>--}}

{{--                            <div class="ml-2">--}}
{{--                                {!! __('I agree to the :terms_of_service and :privacy_policy', [--}}
{{--                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',--}}
{{--                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',--}}
{{--                                ]) !!}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </x-jet-label>--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">--}}
{{--                    {{ __('Already registered?') }}--}}
{{--                </a>--}}

{{--                <x-jet-button class="ml-4">--}}
{{--                    {{ __('Register') }}--}}
{{--                </x-jet-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-jet-authentication-card>--}}
{{--</x-guest-layout>--}}




<div class="signup-main">
    <div class="container-fluid">
        <div class="sign-up">
            <div class="row row-login">
                <div class="col-lg-6 col-login-otr">
                    <div class="col-login-inr">
                        <div class="content">
                            <h3 class="head heading-h3">Sign Up to Ethoz</h3>
                            <div class="login-social">
                                <span class="line"></span>
                                <p class="desc body-s">Sign up with socials</p>
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
                                <p class="desc body-s">Or sign up with email</p>
                                <span class="line"></span>
                            </div>
                            <x-jet-validation-errors class="mb-4"/>
                            <form class="form-main" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="input-otr">
                                    <label for="password" value="{{ __('name') }}">{{ __('name') }} </label>
                                    <input class="input" id="name"  type="text" name="name"  required autofocus autocomplete="name">
                                </div>
                                <div class="input-otr">
                                    <label for="password" value="{{ __('email') }}">{{ __('email') }} </label>
                                    <input class="input" id="email"  type="email" name="email"  required>
                                </div>
                                <div class="input-otr input-otr-2">
                                    <label for="password" value="{{ __('Password') }}">{{ __('Password') }} </label>
                                    <input class="input"  id="password" type="password" name="password"  required autocomplete="new-password">
                                </div>
                                <br>
                                <div class="input-otr input-otr-2">
                                    <label for="password" value="{{ __('password_confirmation') }}">{{ __('Confirm Password') }} </label>
                                    <input class="input"  id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <div class="check-main">
                                    <div class="check">
                                        <label for="terms">
                                                    <span class="check-inner">
                                                        <input type="checkbox" class="input-check opacity-0 absolute" name="terms" id="terms">
                                                        <svg class="fill-current" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="12" fill="#366CE3"/><path d="M16.521 8.938l-6.125 6.125L7.335 12" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                    </span>
                                            <span class="select-none body-sb">I agree to the <a href="" class="link body-sb"> Privacy Policy </a> & <a href="" class="link body-sb"> Terms of Service </a></span>
                                        </label>
                                    </div>
                                </div>
{{--                                <div class="check-main">--}}
{{--                                    <div class="check">--}}
{{--                                        <label for="terms">--}}
{{--                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">--}}
{{--                                    {{ __('Already registered?') }}--}}
{{--                                </a>--}}
{{--                                        </label></div></div>--}}
                                <div class="action-otr">
                                    <input class="button body-sb" type="submit" value="{{ __('Register') }}">
                                </div>
                            </form>
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


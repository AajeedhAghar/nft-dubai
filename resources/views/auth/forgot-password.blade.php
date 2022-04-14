@extends('layouts.master')
@section('metaDesc')
@endsection

@section('links')
    <style>
    </style>
@endsection
@section('pageName') @lang('pagesname.website') @endsection

@section('body')
    <div class="login-main">
        <div class="container-fluid">
            <div class="log-in">
                <div class="row row-login">
                    <div class="col-lg-6 col-md-8 col-login-otr">
                        <div class="col-login-inr">
                            <div class="content">
                                <div class="mb-4 text-sm text-gray-600">
                                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                                </div>

                                @if (session('status'))
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <x-jet-validation-errors class="mb-4"/>

                                <form class="form-main" method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    {{--            <div class="block">--}}
                                    {{--                <x-jet-label for="email" value="{{ __('Email') }}" />--}}
                                    {{--                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
                                    {{--            </div>--}}
                                    <div class="input-otr lg:px-8 ">
                                        <label for="email" value="{{ __('Email') }}"/>
                                        <input class="input" type="email" id="email" type="email" name="email"
                                               :value="old('email')" required autofocus>
                                    </div>
                                    <div class="action-otr">
                                        <input class="button " type="submit"
                                               value="  {{ __('Email Password Reset Link') }}">
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

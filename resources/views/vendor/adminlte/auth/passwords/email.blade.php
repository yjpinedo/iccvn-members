@extends('adminlte::auth.auth-page', ['auth_type' => 'login'])

@php($password_email_url = View::getSection('password_email_url') ?? config('adminlte.password_email_url', 'password/email'))
@php($login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login'))

@if (config('adminlte.use_route_url', false))
    @php($login_url = $login_url ? route($login_url) : '')
    @php($password_email_url = $password_email_url ? route($password_email_url) : '')
@else
    @php( $login_url = $login_url ? url($login_url) : '' )
    @php($password_email_url = $password_email_url ? url($password_email_url) : '')
@endif

@section('auth_header', __('adminlte::adminlte.password_reset_message'))

@section('auth_body')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form action="{{ $password_email_url }}" method="post">
        @csrf

        {{-- Email field --}}
        <div class="input-group mb-3">
            <p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset
                link that will allow you to choose a new one.</p>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}" autofocus>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- Send reset link button --}}
        <button type="submit" class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
            <span class="fas fa-share-square"></span>
            {{ __('adminlte::adminlte.send_password_reset_link') }}
        </button>

        <p class="my-0 mt-1 text-center">
            <a href="{{ $login_url }}">
                {{ __('adminlte::adminlte.sign_in') }}
            </a>
        </p>
    </form>

@stop

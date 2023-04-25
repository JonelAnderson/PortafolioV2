@extends('auth.contenido')

@section('content')
<div class="container">
        <div class="signin-sign-up">
            <form method="POST" action="{{ route('password.confirm') }}" class="sign-in-form">
            @csrf
                <h2 class="title">{{ __('Confirm Password') }}</h2><br>
                <i class="fas fa-user-lock icon" aria-hidden="true"></i>
                <h4>{{ __('Please confirm your password before continuing.') }}</h4>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>&nbsp;
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}"></br>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-field">
                <input type="submit" value="{{ __('Confirm Password') }}" class="btn-reset">
                @if (Route::has('password.request'))
                    <a class="btn-reset" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </form>
            
        </div>
    </div>
@endsection

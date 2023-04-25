@extends('auth.contenido')

@section('content')
<div class="container">
        <div class="signin-sign-up">
            <form method="POST" action="{{ route('register') }}" class="sign-in-form">
            @csrf
                <figure class="card-title text-center text-green">
                    <!--<i class="fa fa-user-circle fa-3x" aria-hidden="true"></i>-->
                    <img src="images/033.png" width="100" height="100" alt="">
                </figure>
                <h2 class="title">{{ __('Register') }}</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>&nbsp;
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="{{ __('Name') }}"><br>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>&nbsp;
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('E-Mail Address') }}"><br>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>&nbsp;
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}" autofocus></br>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>&nbsp;
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
                </div>
                
                <input type="submit" value="{{ __('Register') }}" class="btn">
            </form>
            
        </div>
    </div>
@endsection
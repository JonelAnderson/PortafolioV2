@extends('auth.contenido')

@section('content')
    <main>
        <div class="container-xl px-4">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <!-- Basic login form-->
                    <div class="card border-0 rounded-lg mt-5" style="box-shadow: 5px 5px 5px hsl(0deg 0% 0% /0.5);">
                        <div class="card-header justify-content-center"><h3 class="fw-light my-4">Login</h3></div>
                        <div class="card-body">
                            <!-- Login form-->
                            <form method="POST" action="{{ route('login') }}" class="sign-in-form" autocomplete="off">
                                @csrf
                                <!-- Form Group (email address)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputEmailAddress">Email</label>
                                    <input id="inputEmailAddress" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" placeholder="{{ __('E-Mail Address') }}" /></br>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- Form Group (password)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputPassword">Password</label>
                                    <input id="inputPassword" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}" autofocus></br>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- Form Group (remember password checkbox)-->
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" id="rememberPasswordCheck" type="checkbox" value="" />
                                        <label class="form-check-label" for="rememberPasswordCheck">Remember password</label>
                                    </div>
                                </div>
                                <!-- Form Group (login box)-->
                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    @if (Route::has('password.request'))
                                        <a class="small" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                    <input class="btn btn-primary" type="submit" value="{{ __('To access') }}">
                                </div>
                            </form>
                        </div>
                        <!--<div class="card-footer text-center">
                            <div class="small"><a href="auth-register-basic.html">Need an account? Sign up!</a></div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </main>
<!--<div class="container">
        <div class="signin-sign-up">
            <form method="POST" action="{{ route('login') }}" class="sign-in-form" autocomplete="off">
            @csrf
                <figure class="card-title text-center text-green">
                    <img src="images/033.png" width="120" height="120" alt="">
                </figure>
                <h2 class="title">{{ __('Log in') }}</h2>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input id="email" type="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" placeholder="{{ __('E-Mail Address') }}" autofocus></br>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}" autofocus></br>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                @if (Route::has('password.request'))
                    <a class="forgot-password" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                <input type="submit" value="{{ __('To access') }}" class="btn">
            </form>
            
        </div>
    </div>-->
@endsection

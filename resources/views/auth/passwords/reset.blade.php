@extends('auth.contenido')

@section('content')
<main>
    <div class="container-xl px-4">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <!-- Basic login form-->
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header justify-content-center"><h3 class="fw-light my-4">Login</h3></div>
                    <div class="card-body">
                        <!-- Login form-->
                        <form method="POST" action="{{ route('password.update') }}" class="sign-in-form">
                        @csrf
                
                            <input type="hidden" name="token" value="{{ $token }}">
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="off" placeholder="{{ __('E-Mail Address') }}" autofocus><br>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Form Group (password)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputPassword">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('Password') }}"><br>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <!-- Form Group (confirm-password)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputPassword">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
                                
                            </div>
                            
                            <!-- Form Group (login box)-->
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                <input class="btn btn-primary"  type="submit" value="{{ __('Reset Password') }}" >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


@endsection

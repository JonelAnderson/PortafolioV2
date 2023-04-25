@extends('auth.contenido')

@section('content')
<main>
    <div class="container-xl px-4">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <!-- Basic forgot password form-->
                <div class="card border-0 rounded-lg mt-5" style="box-shadow: 5px 5px 5px hsl(0deg 0% 0% /0.5);">
                    <div class="card-header justify-content-center"><h3 class="fw-light my-4">Password Recovery</h3></div>
                    <div class="card-body">
                        <div class="small mb-3 text-muted">Enter your email address and we will send you a link to reset your password.</div>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <!-- Forgot password form-->
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off"  placeholder="{{ __('E-Mail Address') }}"><br>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Form Group (submit options)-->
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                <a class="small" href="/public/login">Return to login</a>
                                <input class="btn btn-primary" type="submit" value="{{ __('Send Password Reset Link') }}" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>






@endsection

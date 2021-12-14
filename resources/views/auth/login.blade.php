@extends('layouts.backend.authmaster')

@section('content')



<div class="auth-content my-auto">
    <div class="text-center">
        <h5 class="mb-0">Welcome Back !</h5>
        <p class="text-muted mt-2">Sign in to continue to {{config('app.name')}}.</p>
    </div>
    <form class="mt-4 pt-2" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-floating form-floating-custom mb-4">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
            </span>
              @enderror
            <label for="input-username">{{ __('E-Mail Address') }}</label>

            <div class="form-floating-icon">
                <i data-feather="users"></i>
             </div>


        </div>

        <div class="form-floating form-floating-custom mb-4 auth-pass-inputgroup">
            {{-- <input type="password" class="form-control pe-5" id="password-input" placeholder="Enter Password"> --}}
            <input  type="password" id="password-input"   class="form-control pe-5 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
            </button>
            <label for="input-password">Password</label>
            <div class="form-floating-icon">
                <i data-feather="lock"></i>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <div class="form-check font-size-15">
                    <input class="form-check-input" type="checkbox" id="remember-check">
                    <label class="form-check-label font-size-13" for="remember-check">
                        Remember me
                    </label>
                </div>
            </div>

        </div>
        <div class="mb-3">
            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log In</button>
        </div>
    </form>

    <div class="mt-4 pt-2 text-center">
        <div class="signin-other-title">
            <h5 class="font-size-14 mb-3 text-muted fw-medium">- Sign in with -</h5>
        </div>

        <ul class="list-inline mb-0">
            <li class="list-inline-item">
                <a href="javascript:void()"
                    class="social-list-item bg-primary text-white border-primary">
                    <i class="mdi mdi-facebook"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="javascript:void()"
                    class="social-list-item bg-info text-white border-info">
                    <i class="mdi mdi-twitter"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="javascript:void()"
                    class="social-list-item bg-danger text-white border-danger">
                    <i class="mdi mdi-google"></i>
                </a>
            </li>
        </ul>
    </div>

    <div class="mt-5 text-center">
        <p class="text-muted mb-0">Don't have an account ? <a href="auth-register.html"
                class="text-primary fw-semibold"> Signup now </a> </p>
    </div>
</div>
@endsection

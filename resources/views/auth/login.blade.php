@extends('layouts.header')

@section('content')
<div class="form-container">
    <form action="{{ route('login') }}" method="POST">

        @csrf
        <h3>login now</h3>
        <!--  <input type="email"name="email" placeholder="enter your email" required class="box"/>-->
        <div class="col-md-6">
            <input id="email" type="email" placeholder="enter your email" class="box form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <!-- <input type="password" name="password" placeholder="enter your password" required class="box"/>-->
        <div class="row mb-3">
            <div class="col-md-6">
                <input id="password" type="password" placeholder="enter your password"class="box form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>
        <div class="row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('login now') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </div>
        <p>don't have an account? <a href="{{ route('register') }}">register now</a></p>
    </form>
</div>
<script src="js/script.js"></script>
@endsection

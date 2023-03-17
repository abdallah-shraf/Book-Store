
@extends('layouts.header')
@section('content')

<div class="form-container">
    <form action="{{ route('register') }}" method="POST">
        @csrf
      <h3>register now</h3>
      <!--<input type="text" name="name" placeholder="enter your name" required class="box"/>-->

        <div class="">
            <input id="name" type="text" placeholder="enter your name" class="box form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>




      <!--<input type="email"  name="email"  placeholder="enter your email"  require  class="box"/>-->

        <div class="row mb-3">
            <div class="">
                <input id="email" type="email"placeholder="enter your email" class="box form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>



      <!--<input type="password" name="password" placeholder="enter your password" required class="box"/>-->

      <div class="row mb-3">

            <div class="">
                <input id="password" type="password" placeholder="enter your password" class="box form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


     <!-- <input  type="password"  name="cpassword"  placeholder="confirm your password"  required  class="box"/>-->


        <div class="row mb-3">

            <div class="">
                <input id="password-confirm" type="password"placeholder="confirm your password" class="box form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>
        <!--boolian create data base -->
      <select name="user_type" class="box">
        <option value="user">user</option>
        <option value="admin">admin</option>
      </select>


      <input type="submit" name="submit" value="register now" class="btn  " />

      <p>already have an account? <a href="{{ route('login') }}">login now</a></p>
    </form>
</div>
<script src="js/script.js"></script>

@endsection

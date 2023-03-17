@extends('layouts.header')
@section('title')
Contact Us
@endsection
@section('content')
<section class="contact">
    @include('../layouts.minneheader2')
    <form action="{{ route('contact.submit') }}" method="POST">

        @csrf
      <h3>say something!</h3>

      <input type="text" name="name" required placeholder="enter your name" class="box"/>


      <input type="email" name="email" required placeholder="enter your email" class="box" />


      <input type="text" name="phone" required placeholder="enter your number" class="box" />
      <textarea name="message" class="box" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
      <input type="submit" value="send message" name="send" class="btn" />
    </form>
  </section>

@endsection


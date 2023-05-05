@extends('layouts.header')
@section('title')
Contact Us
@endsection
@section('content')
@include('../layouts.minneheader2')
<section class="contact">
    <form action="{{ route('contact.submit') }}" method="POST">

        @csrf
      <h3>say something!</h3>

      <input type="text" id="name" name="name" required placeholder="enter your name" class="box"/>


      <input type="email" id="email" name="email" required placeholder="enter your email" class="box" />


      <textarea name="message" class="box" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
      <input type="submit" value="send" id="message"  name="send" class="btn" />
    </form>
  </section>
  @include('layouts.minefooter')

@endsection


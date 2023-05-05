@extends('layouts.header')
@section('title')
    About
@stop

@section('content')
@include('layouts.minneheader2')
<section class="about">
    <div class="flex">
      <div class="image">
        <img src="{{ asset('images/about-img.jpg') }}" alt="" />
      </div>

      <div class="content">
        <h3>why choose us?</h3>
        <p>
            We have grown our own unique library and we would like to share it and make the most rare and unique books
            to be accessible to ever person seeking it
        </p>

        <a href="{{ route('mile.contactUs') }}" class="btn">contact us</a>
      </div>
    </div>
  </section>

  <section class="reviews">
    <h1 class="title">client's reviews</h1>

    <div class="box-container">
      <div class="box">
        <img src="{{ asset('images/Abdallah_Ashraf.jpeg') }}" alt="" />
        <p>
             Responsible for the back end of the
            website and the implementation of the data base.
        </p>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>Abdallah Ashraf</h3>
      </div>

      <div class="box">
        <img src="{{ asset('images/Ahmed_Mamdoah.jpeg') }}" alt="" />
        <p>
            Responsible for the Data base design
            and structure.
        </p>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>Ahmed Mamdouh</h3>
      </div>

      <div class="box">
        <img src="{{ asset('images/Ahmed_Samir.jpg') }}" alt="" />
        <p>
            Responsible for the UI design and market
            research.
        </p>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>Ahmed Samir </h3>
      </div>

      <div class="box">
        <img src="{{ asset('images/Belal_Baha.jpeg') }}" alt="" />
        <p>
            Responsible for the front end of the website
            and the implementation of the UI design.
        </p>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>Belal Bahaa</h3>
      </div>



      <div class="box">
        <img src="{{ asset('images/Ali_Taek.jpeg') }}" alt="" />
        <p>
            Responsible for providing a suitable environment
            and managing our meeting, calibration and ensures that
            we meet the deadlines .
        </p>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>Ali Tarek</h3>
      </div>
    </div>
  </section>

  <section class="authors">
    <h1 class="title">greate authors</h1>

    <div class="box-container">
      <div class="box">
        <img src="{{ asset('images/Abdallah_Ashraf.jpeg') }}" alt="" />
        <div class="share">
          <a href="https://www.facebook.com/abdalla.ashraf.1829/" class="fab fa-facebook-f"></a>
          <a href="https://twitter.com/Abdalla54220254" class="fab fa-twitter"></a>
          <a href="https://github.com/abdallah-shraf" class="fab fa-github"></a>
          <a href="https://www.instagram.com/abdalla.ashraf.1829/?hl=en" class="fab fa-instagram"></a>
          <a href="https://www.linkedin.com/in/abdallah-ashraf-b6a5b7204/" class="fab fa-linkedin"></a>
        </div>
        <h3>Abdallah Ashraf</h3>
      </div>

      <div class="box">
        <img src="{{ asset('images/Ahmed_Mamdoah.jpeg') }}" alt="" />
        <div class="share">
          <a href="https://www.facebook.com/PcAbove" class="fab fa-facebook-f"></a>
          <a href="#" class="fab fa-twitter"></a>
          <a href="#" class="fab fa-instagram"></a>
          <a href="#" class="fab fa-linkedin"></a>
        </div>
        <h3>Ahmed Mamdouh</h3>
      </div>

      <div class="box">
        <img src="{{ asset('images/Ahmed_Samir.jpg') }}" alt="" />
        <div class="share">
          <a href="https://www.facebook.com/profile.php?id=100019217715639&mibextid=ZbWKwL" class="fab fa-facebook-f"></a>
         <!-- <a href="#" class="fab fa-twitter"></a>
          <a href="#" class="fab fa-linkedin"></a>
         -->
          <a href="https://instagram.com/ahmed._elghandour?igshid=ZDdkNTZiNTM=" class="fab fa-instagram"></a>

        </div>
        <h3>Ahmed Samir</h3>
      </div>

      <div class="box">
        <img src="{{ asset('images/Belal_Baha.jpeg') }}" alt="" />
        <div class="share">
          <a href="https://www.facebook.com/belal.bahaa.39/" class="fab fa-facebook-f"></a>
          <a href="https://github.com/belalbahaa1" class="fab fa-github"></a>
          <a href="https://www.instagram.com/belalbahaa1/" class="fab fa-instagram"></a>
          <a href="https://www.linkedin.com/in/belal-bahaa-a300261b6/" class="fab fa-linkedin"></a>
        </div>
        <h3>Belal Bahaa</h3>
      </div>

      <div class="box">
        <img src="{{ asset('images/Ali_Taek.jpeg') }}" alt="" />
        <div class="share">
          <a href="#" class="fab fa-facebook-f"></a>
          <a href="#" class="fab fa-twitter"></a>
          <a href="#" class="fab fa-instagram"></a>
          <a href="#" class="fab fa-linkedin"></a>
        </div>
        <h3>Ali Tarek</h3>
      </div>


    </div>
  </section>

  @include('layouts.minefooter')

@endsection



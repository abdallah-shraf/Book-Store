@extends('layouts.header')
@section('title')
Home
@endsection


@section('content')
@include('layouts.minneheader')








<!-- Home page -->
<section class="home">
    <div class="content">

<div class="row">

    <!--div-->
    <div class="col-xl-12">
        <div class="card mg-b-20">

            <div class="card-body">
                @if (Session::has('card'))

                    <script>
                        window.onload = function() {
                            notif({
                                msg: "تم أرشفه الفاتورة بنجاح",
                                type: "success"
                            })
                        }
                    </script>


                @endif
            </div>
        </div>
    </div>
</div>
      <h3>Hand Picked Book to your door.</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi,
        quod? Reiciendis ut porro iste totam.
      </p>
      <a href="{{ url('/about') }}" class="white-btn">discover more</a>
    </div>
</section>
<!-- products-->
<section class="products">
    <h1 class="title">latest products</h1>


    <div class="box-container">
        <?php $i=0;?>
        @foreach ($prducts as $product)
            <?php $i++;?>



                <form action="{{route('cart.add', $product->id) }}" method="post" class="box">
                    @csrf
                    <input type="hidden" value="{{$product->UnitePrice}}" name="price">
                    <input type="hidden"name="user_ID" value="{{Auth::user()->id}}">



                    <a href="{{ route('products.show',$product->id ) }}"><img class="image" src="{{asset('images/Product/'.$product->ProductImage)}}" alt="" /></a>

                    <div class="name" name="name">{{$product->ProductsName}}</div>
                    <div class="price" name ="price">{{$product->UnitePrice}}</div>

                    <input type="number"min="1"name="quantity"value="1"class="qty"/>


                    <button type="submit"  name="add_to_cart" class="btn" >Add To Cart</button>

                </form>

        @endforeach

    <div class="load-more" style="margin-top: 2rem; text-align: center">
      <a href="shop.html" class="option-btn">load more</a>
    </div>
  </section>
  <section class="about">
    <div class="flex">
      <div class="image">
        <img src="images/about-img.jpg" alt="" />
      </div>

      <div class="content">
        <h3>about us</h3>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit
          quos enim minima ipsa dicta officia corporis ratione saepe sed
          adipisci?
        </p>
        <a href="{{ url('/about') }}" class="btn">read more</a>
      </div>
    </div>
  </section>
  <section class="home-contact">
    <div class="content">
      <h3>have any questions?</h3>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque cumque
        exercitationem repellendus, amet ullam voluptatibus?
      </p>
      <a href="{{ route('mile.contactUs') }}" class="white-btn">contact us</a>
    </div>
  </section>

@endsection

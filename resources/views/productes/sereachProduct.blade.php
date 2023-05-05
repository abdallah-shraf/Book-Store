@extends('../layouts.header')
@section('content')

@section('title')
searsh Product
@endsection
@include('../layouts.minneheader2')
<section class="search-form">
    <form action="research" method="get">
        @csrf
      <input  type="text"  name="search"  placeholder="search products..."  class="box"/>
      <input type="submit" name="submit" value="search" class="btn" />
    </form>
  </section>

  <section class="products" style="padding-top: 0">
    <div class="box-container">
        @foreach ($products as $product )
        <form action="{{route('cart.add', $product->id) }}" method="post" class="box">
            @csrf
            <a href="{{ route('products.show',$product->id ) }}"><img class="image" src="{{asset('images/Product/'.$product->ProductImage)}}" alt="" /></a>
            <div class="name">{{$product->ProductsName}}</div>
            <div class="price">{{$product->UnitePrice}} $</div>
            <input  type="number"  class="qty"  name="product_quantity"  min="1"  value="1"/>


            <input type="hidden"name="user_ID" value="{{Auth::user()->id}}">
            <input type="hidden" name="product_Id" value="{{$product->id}}">
            <input type="hidden" value="{{$product->UnitePrice}}" name="price">

            <input  type="submit"  class="btn"  value="add to cart"  name="add_to_cart"/>
          </form>
        @endforeach

    </div>
  </section>
  @include('layouts.minefooter')

@endsection



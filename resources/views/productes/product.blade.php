@extends('layouts.header')
@section('content')
<!-- product page -->
@section('title')
Products
@endsection

<section class="products">
    @include('../layouts.minneheader2')
    <h1 class="title">latest products</h1>

    <div class="box-container">
        @foreach ($prducts as $product)




            <form action="{{route('cart.add', $product->id) }}" method="post" class="box">
                @csrf
                <input type="hidden" value="{{$product->UnitePrice}}" name="price">
                <input type="hidden"name="user_ID" value="{{Auth::user()->id}}">
                <input type="hidden" name="product_Id" value="{{$product->id}}">



                <a href="{{ route('products.show',$product->id ) }}"><img class="image" src="{{asset('images/Product/'.$product->ProductImage)}}" alt="" /></a>

                <div class="name" name="name">{{$product->ProductsName}}</div>
                <div class="price" name ="price">{{$product->UnitePrice}}</div>

                <input type="number"min="1"name="quantity"value="1"class="qty"/>


                <button type="submit"  name="add_to_cart" class="btn" >Add To Cart</button>

            </form>

        @endforeach
    </div>

  </section>

@endsection

@extends('../layouts.header')

@section('title')
Cart
@endsection
@section('content')

    @include('../layouts.minneheader2')
    <section class="shopping-cart">

        <h1 class="title">products added</h1>

        <div class="box-container">
                @foreach ($cartItem as $cartItems)
                @php
                    $product = App\Models\Prouducts::find($cartItems->product_id);
                @endphp
                <div class="box">



                    <form class="delete-form-cart" action="{{ route('cart.remove',$cartItems->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$cartItems->product_id}}">
                        <input type="submit" value="X" class="fas fa-times">
                    </form>
                    <img src="{{asset('images/Product/'.$product->ProductImage)}}" alt="">
                    <div class="name price">Book Name : {{ $product->ProductsName }}</div>
                    <div  class="price" >product price : {{$cartItems->unit_price}}$</div>

                    <div class="price">cart  quantity :{{$cartItems['quantity']}} </div>
                    <!--update of quantity-->
                    <form action="{{ route('cart.update',$cartItems->id) }}" method="post">
                        @csrf
                        @method('put')
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <input type="number" min="1" name="quantity" value="{{$cartItems['quantity']}}">
                        <button type="submit" class="option-btn">Update</button>
                    </form>

                    <div class="sub-total"> sub total :{{$cartItems->total_price}} <span>$</span> </div>

                </div>
                @endforeach
          



        </div>

        <div style="margin-top: 2rem; text-align:center;">
        </div>

        <div class="cart-total">
            @php

             $user= Auth::user()->id;

             $order=App\Models\order::where('UserId',$user)->where('surly' , '1')->first()->id;
             if (isset($order)) {
                $product = App\Models\CartItem::where('order_Id', $order)->sum('total_price');

            }else {
                $product = '0';
            }


             @endphp
        <p>grand total :  {{ $product}}<span> $</span></p>
        <div class="flex">
            <a href="{{ url('/product/shop') }}" class="option-btn">continue shopping</a>

            <a href=" {{route('carte.conferm',$order)}}" class="btn">proceed to checkout</a>
        </div>
        </div>

    </section>
@endsection

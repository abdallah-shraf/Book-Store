@extends('../layouts.header')

@section('title')
Cart
@endsection
@section('content')

    @include('../layouts.minneheader2')
    <section class="shopping-cart">

        <h1 class="title">products added</h1>

        <div class="box-container">
            <p>{{$data}}</p>
        </div>


        <div class="cart-total">
            @php

             $user= Auth::user()->id;

             if (isset(App\Models\order::where('UserId',$user)->where('surly' , '1')->first()->id)) {
                $order=App\Models\order::where('UserId',$user)->where('surly' , '1')->first()->id;
                $product = App\Models\CartItem::where('order_Id', $order)->sum('total_price');

            }else {
                $product = '0';
            }


             @endphp
        <p>grand total :  {{ $product}}<span> $</span></p>
            <div class="flex">
                <a href="{{ url('/product/shop') }}" class="option-btn">continue shopping</a>

            </div>
        </div>

    </section>
@endsection

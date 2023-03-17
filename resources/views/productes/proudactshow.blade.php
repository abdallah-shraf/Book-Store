@extends('../layouts.header')
@section('title')
Product Detaels
@endsection
@section('content')
    @include('../layouts.minneheader2')

<section class="book">
    <div class="book-container">

      <div class="left">
        <img src="{{asset('images/Product/'.$product->ProductImage)}}" alt="" />
      </div>
        <div class="right">
            @php
                $secion = App\Models\Sections::find($product->sectionID);
            @endphp
            <h3 class="name">product Name : {{$product->ProductsName}}</h3>
            <h4 class="price">product Price : {{$product->UnitePrice}}</h4>
            <h4 class="price">product Price : {{$secion->Section_Name}}</h4>
            <h4 class="price">product Genre : {{$product->Author}}</h4>
            <p>{{$product->AboutProduct}}</p>
            <!--<p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus,
            unde enim! Dignissimos inventore libero facilis deleniti eius
            aliquid est dolorem quam molestias sapiente voluptatum quos sunt
            voluptatem hic, esse maxime.
            </p>-->
            <form action="{{route('cart.add', $product->id) }}" method="post" class="box">
                @csrf

                <input type="hidden"name="user_ID" value="{{Auth::user()->id}}">
                <input type="hidden" name="product_Id" value="{{$product->id}}">
                <input type="hidden"min="1"name="quantity"value="1"class="qty"/>
                <input type="hidden" value="{{$product->UnitePrice}}" name="price">

                <input type="submit" value="add to cart" name="add_to_cart" class="btn" />
            </form>
        </div>
    </div>
  </section>


@endsection

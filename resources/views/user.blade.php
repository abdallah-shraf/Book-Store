@extends('../layouts.header')
@section('content')
    @section('title')
    Create Product
    @endsection

    @include('../layouts.minneheader2')

    <main>

        <section id="user-details">
          <div><h2>User Details</h2></div>
            <div class="data">
                <div >

                    <p><strong>Name  : </strong>     {{ Auth::user()->name }}</p>
                    <p><strong>Email : </strong>   {{ Auth::user()->email }}</p>
                    <p><strong>Location :     </strong>   {{Auth::user()->country }}, {{Auth::user()->city}}, {{Auth::user()->addressName}}</p>
                    <p><strong>Joined : </strong>  {{ Auth::user()->updated_at }}</p>
                </div>
            </div>
        </section>
        <section id="order-history">
          <h2>Order History</h2>
          <table>
            <thead>
              <tr>
                <th>Order ID</th>
                <th>Date</th>
                <th>Total Price</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order )
                @php
                    $product_Total = App\Models\CartItem::where('order_Id', $order->id)->sum('total_price');
                @endphp
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->created_at}}</td>
                        <td>{{ $product_Total}}</td>
                    </tr>
                @endforeach

            </tbody>
          </table>
        </section>
      </main>
      @include('layouts.minefooter')

@endsection


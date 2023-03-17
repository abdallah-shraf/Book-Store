<header class="header">
    <div class="header-1">
      <div class="flex">
        <div class="share">
          <a href="#" class="fab fa-facebook-f"></a>
          <a href="#" class="fab fa-twitter"></a>
          <a href="#" class="fab fa-instagram"></a>
          <a href="#" class="fab fa-linkedin"></a>
        </div>

      </div>
    </div>

    <div class="header-2">
      <div class="flex">
        <a href="{{ url('/home') }}" class="logo">5555 books</a>

        <nav class="navbar">
          <a href="{{ url('/home') }}">home</a>
          <a href="{{ url('/about') }}">about</a>
          <a href="{{ url('/product/shop') }}">shop</a>
          <a href="{{ route('mile.contactUs') }}">contact</a>
          <a href="orders.html">orders</a>
        </nav>

        <div class="">
          <div id="menu-btn" class="fas fa-bars"></div>

          <form action="{{route('product.research')}}" style="margin: 0;"  method="get">
                @csrf
                <input  type="text"  name="search" style="width: auto; margin-right: 15px;" placeholder="search products..."  />
                <button type="submit" name="submit" value="search" class="fas fa-search"></button>
            </form>


        </div>


    @guest
        <div class="header-1">
            <div class="flex">

                <p>
                  @if (Route::has('login'))

                           new   <a  href="{{ route('login') }}">{{ __('Login') }}</a>||

                  @endif

                  @if (Route::has('register'))

                          <a  href="{{ route('register') }}">{{ __('Register') }}</a>

                  @endif
                </p>


            </div>
        </div>
        @else
            <div class="icons">
                <div id="user-btn"  class="fas fa-user"></div>
                <a href="{{ route('cart.index') }}">
                    <i class="fas fa-shopping-cart"></i>
                    @php
                        $user= Auth::user()->id;
                        //$product = App\Models\CartItem::where('UserId',$user)->count('product_id');
                        $order=App\Models\order::where('UserId',$user)->where('surly' , '1')->first()->id;
                    if (isset($order)) {
                        $product = App\Models\CartItem::where('order_Id', $order)->count('product_id');
                    }
                        else {
                            $product='0';
                        }

                       // count(session()->get('cart', []))
                    @endphp
                    <span>{{$product}}</span>
                  </a>
            </div>

          <div class="">
              <div class="">
                  <div class="user-box">


                      <p>username : <span>{{ Auth::user()->name }}</span></p>
                      <p>email : <span>{{ Auth::user()->email }}</span></p>

                      <a class="delete-btn" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </div>
          </div>

    @endguest
      </div>
    </div>
</header>

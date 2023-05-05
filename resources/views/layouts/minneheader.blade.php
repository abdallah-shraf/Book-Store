<header class="header">


    <div class="header-2">
      <div class="flex">
        <img src="{{ asset('images/Logo.jpeg') }}" alt="">
        <a href="{{ route('home') }}" class="logo">Eshop World</a>

        <nav class="navbar">
          <a href="{{ route('home') }}">home</a>
          <a href="{{ url('/about') }}">about</a>
          <a href="{{ url('/product/shop') }}">shop</a>
          <a href="{{ route('mile.contactUs') }}">contact</a>
        </nav>

        <div class="">
          <div id="menu-btn" class="fas fa-bars"></div>

          <form action="{{route('product.research')}}" style="margin: 0;"  method="get">
                @csrf
                <input  type="text"  name="search" style="width: auto; margin-right: 15px; padding-left: 5px;"
                placeholder="search products..." required />
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

                    if (isset(App\Models\order::where('UserId',$user)->where('surly' , '1')->first()->id)) {
                        $order=App\Models\order::where('UserId',$user)->where('surly' , '1')->first()->id;
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


                      <p>username : <a href="{{ route('user.order', Auth::user()->id ) }}"><span>{{ Auth::user()->name }}</a></span></p>
                      <p>email : <span>{{ Auth::user()->email }}</span></p>

                      <a class="delete-btn" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" style="background: none; padding: 0px; border: none;" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </div>
          </div>

    @endguest
      </div>
    </div>
</header>

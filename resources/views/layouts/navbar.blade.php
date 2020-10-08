  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{ URL::to('/index') }}">SklepNET</a>
      <a class="nav-link" href="{{ route('account.orders.index') }}">Orders</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

<!-- NAVBAR ON THE MIDDLE WITH CATEGORIES -->

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          @foreach($categories as $category)
            <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('index', $category->id) }}">{{ $category->name }}
                  <span class="sr-only">(current)</span>
                </a>
            </li>
            @endforeach
        </ul>
      </div>

<!-- END OF NAVBAR -->

<!-- NAVBAR ON THE RIGHT WITH HOME, SERVICES ETC -->

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link icontext" href="{{route('cart')}}">Cart <small>({{ Cart::getTotalQuantity() }})</small>
              <div class="icon-wrap icon-xs bg-2 round text-secondary"><i class="fas fa-shopping-cart"></i></div>
              
            </a>
          </li>
            <a class="nav-link" href="{{route('home')}}">Home
              <span class="sr-only">(current)</span>
            </a>
          
          
        

        <!-- TESTING BUTTON LOGIN AND REGISTER IN MY OWN NAVBAR -->
          <!-- Right Side Of Navbar -->
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
          
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   {{ Auth::user()->name }}
                               </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        </ul>
      </div>

<!-- END OF NAVBAR -->

    </div>
  </nav>
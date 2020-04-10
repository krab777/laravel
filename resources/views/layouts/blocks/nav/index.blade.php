  <nav class="navbar navbar-expand-lg navbar-dark bg-dark top mb-3">
    <div class="container">
      <a class="navbar-brand" href="{{ route('homePage')}}">@lang('shop.title')</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('homePage')}}">@lang('shop.home')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about')}}">@lang('shop.about')</a>
          </li>
          <li class="nav-item">          
            <a class="nav-link" href="{{ route('cart.index')}}">Cart ({{$count = App\Models\Cart::where("user_id", Auth::user()->id ?? '')->count()}})</a>
          </li>
          <li class="nav-item">          
            <a class="nav-link" href="{{ route('orders')}}">Orders ({{$count = App\Models\Order::where("user_id", Auth::user()->id ?? '')->count()}})</a>
          </li>  

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
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                      @if (Auth::user()->role_id === 3)
                          <a class="dropdown-item" href="{{ route('dashboard.users.index') }}">
                            Admin
                          </a>
                      @elseif(Auth::user()->role_id === 2)
                          <a class="dropdown-item" href="{{ route('dashboard.') }}">
                            Moderator
                          </a>
                      @endif
                      
                  </div>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                     
                  </div>
              </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>



      
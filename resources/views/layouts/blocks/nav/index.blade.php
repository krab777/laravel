<nav class="navbar navbar-default navbar-trans navbar-expand-lg">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="{{ route('homePage')}}">Phone<span class="color-b">Shop</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('homePage')}}">@lang('shop.home')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about')}}">@lang('shop.about')</a>
          </li>
          <li class="nav-item">          
            <a class="nav-link" href="{{ route('cart.index')}}">Cart (0)</a>
          </li>
          <li class="nav-item">          
            <a class="nav-link" href="{{ route('orders')}}">Orders (0)</a>
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
                          <a class="dropdown-item" href="{{ route('dashboard.') }}">
                            Admin
                          </a>
                      @elseif(Auth::user()->role_id === 2)
                          <a class="dropdown-item" href="{{ route('dashboard.') }}">
                            Moderator
                          </a>
                      @endif
                      
                  </div>
              </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>

 

      
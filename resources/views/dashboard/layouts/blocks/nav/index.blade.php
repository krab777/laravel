<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('homePage') }}">
            {{ config('Shop', 'Shop') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                @if ((Auth::user()->role_id ?? '') === 3)
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('dashboard.users*') ? 'active' : '' }}" href="{{ route('dashboard.users.index') }}">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('dashboard.watchItems*') ? 'active' : '' }}" href="{{ route('dashboard.watchItems') }}">Items</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('dashboard.orders*') ? 'active' : '' }}" href="{{ route('dashboard.orders') }}">Orders</a>
                    </li>
                @elseif((Auth::user()->role_id ?? '') === 2)
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('dashboard.watchItems*') ? 'active' : '' }}" href="{{ route('dashboard.watchItems') }}">Items</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('dashboard.orders*') ? 'active' : '' }}" href="{{ route('dashboard.orders') }}">Orders</a>
                    </li>

                    
                @endif              
                
            </ul>

            <!-- Right Side Of Navbar -->
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
                            @if ((Auth::user()->role_id ?? '') === 3)
                                    Admin 
                                
                            @elseif((Auth::user()->role_id ?? '') === 2)
                                    Moderator 
                            @endif  
                            <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <p class="dropdown-item">
                                {{ Auth::user()->name }} 
                            </p>

                            <p class="dropdown-item">
                                {{ Auth::user()->email }} 
                            </p>
                               
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                            
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

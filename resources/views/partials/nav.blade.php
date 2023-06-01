

<nav class="navbar container">
    <a href="#" class="brand">
        <img src="{{asset('asset/images/logo/logo2.png')}}" alt="">
    </a>
    <div class="burger" id="burger">
       <span class="burger-line"></span>
       <span class="burger-line"></span>
       <span class="burger-line"></span>
    </div>
    <div class="menu" id="menu">
       <ul class="menu-inner">
          <li class="menu-item"><a href="#" class="menu-link">Home</a></li>
          <li class="menu-item"><a href="#" class="menu-link">Jobs</a></li>
          <li class="menu-item"><a href="#" class="menu-link">Ausbildung</a></li>
          <li class="menu-item"><a href="#" class="menu-link">Contact</a></li>
       </ul>
    </div>


    <div>
        <ul class="auth">
                @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <button class="login-button"">
                            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        </button>
                        <button>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="join-button authButton" type="submit">Logout</button>
                            </form>
                        </button>
                    @else
                    <button class="login-button "">
                        <a href="{{ route('login') }}" class="authButton">Login</a>
                    </button>
                    @if (Route::has('register'))
                        <button class="join-button"">
                            <a href="{{ route('register') }}" class="authButton">Join</a>
                        </button>
                    @endif
                    @endauth
                </div>
            @endif
        </ul>
    </div>

 </nav>

{{--nav voor een donkere achtergrond--}}

<section id="position-navbar" class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-flex justify-content-between">
        <a class="navbar-brand xxl-font-300" href="{{ env('URL') }}/home">FERNWEH</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse large-font-300" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ env('URL') }}/home">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-target="{{ env('URL') }}/shop" href="{{ env('URL') }}/shop" id="navbarDrop" role="button" aria-haspopup="true" aria-expanded="false">
                        Destinations
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDrop">
                        <a class="dropdown-item" href="#">Africa</a>
                        <a class="dropdown-item" href="#">Asia</a>
                        <a class="dropdown-item" href="#">Australia</a>
                        <a class="dropdown-item" href="#">Europe</a>
                        <a class="dropdown-item" href="#">North America</a>
                        <a class="dropdown-item" href="#">South America</a>
                    </div>
                </li>
                {{--<li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>--}}
                <li class="nav-item dropdown">
                   {{-- <a class="nav-link ml-30pr d-none d-lg-block" href="{{route('checkout')}}"><i class="fa fa-shopping-cart"></i></a>
                    <a class="d-block d-lg-none nav-link" href="{{route('checkout')}}">Shopping cart</a>--}}
{{--                    bovenstaande regel is voor mobile !!!!!!!!!!!!!!!!!!!--}}
                    <a class="nav-link ml-30pr d-none d-lg-block" href="{{route('checkout')}}">
                        <span class="fa-stack" data-count="{{Session::has('cart') ? Session::get('cart')->totalQuantity:'0'}}">
{{--                            <i class="fa fa-circle fa-stack-2x"></i>--}}
{{--                            deze lijn doet precies niets maar zou normaal de achtergrond zijn van de cart--}}

                            <i class="fa fa-shopping-cart"></i>
                        </span>
                    </a>
                   {{-- <a class="d-block d-lg-none nav-link" href="{{route('checkout')}}">Shopping cart</a>
                    <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                        <p><b>Your shopping cart is empty</b></p>
                        <button class="btn text-white border-none btn-dark mr-5pr w-80 mb-4pr">Go to shop</button>
                        <button class="btn text-white border-none btn-dark mr-5pr w-80">Go to cart</button>
                    </div>--}}
                </li>
                {{--<li class="nav-item dropdown">
                    <a class="d-none d-lg-block nav-link ml-70pr" href="#"><i class="fa fa-user pr-45pr"></i>
                    </a>
                    <a class="d-block d-lg-none nav-link" href="#">Your account</a>
                    <div class="dropdown-menu">
                        <form class="px-4 py-3">
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1"><b>Email address</b></label>
                                <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormPassword1"><b>Password</b></label>
                                <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                <label class="form-check-label" for="dropdownCheck">
                                    <b>Remember me</b>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-dark">Sign in</button>
                        </form>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">New around here? Sign up</a>
                        <a class="dropdown-item" href="#">Forgot password?</a>
                    </div>
                </li>--}}
                <li class="nav-item dropdown">
                    <a class="d-none d-lg-block nav-link ml-70pr" href="{{ env('URL') }}/account"><i class="fa fa-user pr-45pr"></i></a>
                    <a class="d-block d-lg-none nav-link" href="{{ env('URL') }}/account">Your account</a>
                    <div class="dropdown-menu">
                        <form class="px-4 py-3">
                            @guest
                                <a class="nav-link" style="color: black;" href="{{ route('login') }}">{{ __('Login') }}</a>
                                @if (Route::has('register'))
                                    <a class="nav-link" style="color: black;" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            @else
                                {{ Auth::user()->name }}
                                <a class="dropdown-item" href="{{ route('account')}}">Account</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                            @endguest
                        </form>
                    </div>





                </li>


            </ul>
        </div>
    </nav>


{{--
    <nav class="navbar navbar-expand-lg navbar-light d-lg-none">
        <a class="navbar-brand xxl-font-300" href="index.html">FERNWEH</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse large-font-300" id="navSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-target="destinations.html" href="destinations.html" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Destinations
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="africa.html">Africa</a>
                        <a class="dropdown-item" href="asia.html">Asia</a>
                        <a class="dropdown-item" href="australia.html">Australia</a>
                        <a class="dropdown-item" href="europe.html">Europe</a>
                        <a class="dropdown-item" href="north_america.html">North America</a>
                        <a class="dropdown-item" href="south_america.html">South America</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link ml-30pr d-none d-lg-block" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i>
                    </a>
                    <a class="d-block d-lg-none nav-link" href="shopping_cart.html">Shopping cart</a>
                    <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                        <p><b>Your shopping cart is empty</b></p>
                        <button class="btn text-white border-none btn-dark mr-5pr w-80 mb-4pr"><a href="destinations.html" class="btn-proceed">Go to shop</a></button>
                        <button class="btn text-white border-none btn-dark mr-5pr w-80"><a href="shopping_cart.html" class="btn-proceed">Go to cart</a></button>
                    </div>
                </li>





--}}
{{--
                <li class="nav-item dropdown">
                    <a class="d-none d-lg-block nav-link ml-70pr" href="#"><i class="fa fa-user pr-45pr"></i></a>
                    <a class="d-block d-lg-none nav-link" href="#">Your account</a>
                    <div class="dropdown-menu">
                        <form class="px-4 py-3">
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1"><b>Email address</b></label>
                                <input type="email" class="form-control" id="exampleDropFormEmail1" placeholder="email@example.com">
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormPassword1"><b>Password</b></label>
                                <input type="password" class="form-control" id="exampleDropFormPassword1" placeholder="Password">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="dropCheck">
                                <label class="form-check-label" for="dropCheck">
                                    <b>Remember me</b>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-dark">Sign in</button>
                        </form>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">New around here? Sign up</a>
                        <a class="dropdown-item" href="#">Forgot password?</a>
                    </div>
                </li>
--}}{{--









                <li class="nav-item dropdown">
                    <a class="d-none d-lg-block nav-link ml-70pr" href="#"><i class="fa fa-user pr-45pr"></i></a>
                    <a class="d-block d-lg-none nav-link" href="#">Your account</a>
                    <div class="dropdown-menu">
                        <form class="px-4 py-3">
                            @guest
                                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                                @if (Route::has('register'))
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            @elseguest
                                <div class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown"
                                       aria-haspopup="true"
                                       aria-expanded="false" v-pre>
                                        <i class="fas fa-user text-white"></i>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        @if(Auth::user()->role->name == 'admin' && Auth::user()->is_active == '1')

                                            <a class="dropdown-item" href="{{ route('backend') }}">Backend</a>
                                            <a class="dropdown-item" href="{{ route('account') }}">Account</a>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                <i class="fas fa-sign-out-alt mr-3"></i>{{ __('Logout') }}
                                            </a>
                                        @else
                                            <a class="dropdown-item" href="{{ route('account') }}">Account</a>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                <i class="fas fa-sign-out-alt mr-3"></i>{{ __('Logout') }}
                                            </a>
                                        @endif
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                        @endguest
                </li>




            </ul>
        </div>
    </nav>
--}}
</section>





{{--<div class="d-flex ">

    @guest
        <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
        @if (Route::has('register'))
            <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
        @endif
    @else
        <div class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown"
               aria-haspopup="true"
               aria-expanded="false" v-pre>
                <i class="fas fa-user text-white"></i>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                @if(Auth::user()->role->name == 'admin' && Auth::user()->is_active == '1')

                    <a class="dropdown-item" href="{{ route('backend') }}">Backend</a>
                    <a class="dropdown-item" href="{{ route('account') }}">Account</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt mr-3"></i>{{ __('Logout') }}
                    </a>
                @else
                    <a class="dropdown-item" href="{{ route('account') }}">Account</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt mr-3"></i>{{ __('Logout') }}
                    </a>
                @endif
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    @endguest
</div>--}}

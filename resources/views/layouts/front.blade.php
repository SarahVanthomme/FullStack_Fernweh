<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap')}}" rel="stylesheet">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Rajdhani:300,400,500,600,700&display=swap')}}" rel="stylesheet">
{{--    <link rel="stylesheet" href="css/slick.css">--}}
{{--    <link rel="stylesheet" href="css/bootstrap.min.css">--}}

    <link rel="stylesheet" href="{{asset('css/front-app.css')}}">
    <title>@yield('title')</title>
</head>
<body>
<section id="position-navbar" class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-flex">
        <a class="navbar-brand xxl-font-300" href="index.html">FERNWEH</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse large-font-300" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-target="destinations.html" href="destinations.html" id="navbarDrop" role="button" aria-haspopup="true" aria-expanded="false">
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
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link ml-30pr d-none d-lg-block" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i>
                    </a>
                    <a class="d-block d-lg-none nav-link" href="shopping_cart.html">Shopping cart</a>
                    <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                        <p><b>Your shopping cart is empty</b></p>
                        <button class="btn text-white border-none btn-dark mr-5pr w-80 mb-4pr">Go to shop</button>
                        <button class="btn text-white border-none btn-dark mr-5pr w-80">Go to cart</button>
                    </div>
                </li>
                <li class="nav-item dropdown">
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
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input id="background-search" class="form-control mr-sm-2 border-none" type="search"
                       placeholder="Search"
                       aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>

    </nav>
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
                <li class="nav-item dropdown">
                    <a class="d-none d-lg-block nav-link ml-70pr" href="#"><i class="fa fa-user pr-45pr"></i>
                    </a>
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
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 border-grey" type="search"
                       placeholder="Search"
                       aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>

    </nav>
</section>

@yield('content')

<footer class="container-fluid bg-darkgrey pt-4pr pb-1pr">
    <div class="row d-flex justify-content-center pb-2pr">
        <div class="col-9 col-lg-11 d-lg-flex justify-content-lg-around text-center text-lg-left">
            <div class="col-lg-2">
                <h5 class="text-secondary pb-1pr">
                    ABOUT US
                </h5>
                <p class="font-small text-secondary m-0">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis repudiandae voluptas. Aspernatur
                    dolorum esse fuga inventore nobis perspiciatis quia sapiente soluta temporibus.
                </p>
            </div>
            <div class="col-lg-2 footer-padding">
                <h5 class="text-secondary pb-1pr">NEWSLETTER</h5>
                <p class="font-small text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet facere placeat.</p>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <input type="email" placeholder="Subscribe">
                    <button type="submit" class="btn text-white btn-dark">GO</button>
                </div>
            </div>
            <div class="col-lg-2 footer-padding">
                <h5 class="text-secondary pb-1pr">INSTAGRAM FEED</h5>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <img src="{{asset('images/frontend/footer1.png')}}" alt="instafeed" class="p-1pr">
                    <img src="{{asset('images/frontend/footer2.png')}}" alt="instafeed" class="p-1pr">
                    <img src="{{asset('images/frontend/footer3.png')}}" alt="instafeed" class="p-1pr">
                </div>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <img src="{{asset('images/frontend/footer4.png')}}" alt="instafeed" class="p-1pr">
                    <img src="{{asset('images/frontend/footer5.png')}}" alt="instafeed" class="p-1pr">
                    <img src="{{asset('images/frontend/footer5.png')}}" alt="instafeed" class="p-1pr">
                </div>
            </div>
            <div class="col-lg-2 footer-padding">
                <h5 class="text-secondary pb-1pr">CONTACT US</h5>
                <p class="font-small text-secondary m-0">Schönhauser Allee<br>167c, 10345 Berlin Germany</p>
                <p class="font-small text-secondary m-0"><span class="text-blue">Email:</span> moin@fernweh.de</p>
                <p class="font-small text-secondary m-0"><span class="text-blue">Telephone:</span> 0123456789</p>
                <div class="row pt-4pr d-flex justify-content-center justify-content-lg-start">
                    <div class="col-4 col-lg-10 d-flex justify-content-between">
                        <a href="#"><i class="fa fa-facebook-f text-secondary footer-icon"></i></a>
                        <a href="#"><i class="fa fa-twitter text-secondary footer-icon"></i></a>
                        <a href="#"><i class="fa fa-instagram text-secondary footer-icon"></i></a>
                        <a href="#"><i class="fa fa-pinterest text-secondary footer-icon"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center footer-border pt-2pr">
        <div class="col-6 col-lg-4 col-xl-3 text-secondary text-center">
            <div class="d-flex align-items-center justify-content-around">
                <p class="m-0 font-small">Home</p><span class="dot"></span><p class="m-0 font-small">Destinations</p><span class="dot"></span><p
                    class="m-0 font-small">Blog</p><span class="dot"></span><p class="m-0 font-small">Shopping Cart</p>
            </div>
            <p class="text-secondary font-small pt-2pr">&copy; Voyage. All Rights Reserved</p>
            <div onclick="call()"><i class="fa fa-arrow-up text-white font-small bounce"></i></div>

        </div>
    </div>

</footer>


{{--<script src="js/jquery.min.js"></script>
<script src="js/script.js"></script>
<script src="js/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js">
</script>--}}

<script src="{{asset('js/front-app.js')}}"></script>
</body>
</html>

<!--bij reviews ook accordion gebruiken -- INTERACTO.COM RFS AUTOMATED APPROACH FOR RESPONSIVE FONT SIZES voor fonts werken met vw ipv
rem want werkt beter-->

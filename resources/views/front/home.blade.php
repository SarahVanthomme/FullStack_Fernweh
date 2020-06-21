@extends('layouts.front')
@section('title')
    Fernweh
@endsection
@section('content')

{{--<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Fernweh</title>

</head>
<body id="top" class="mx-auto d-block">
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
                        <button class="btn text-white border-none btn-dark mr-5pr w-80"><a href="check_out.html" class="btn-proceed">Go to cart</a></button>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="d-none d-lg-block nav-link ml-70pr" href="#"><i class="fa fa-user pr-45pr"></i>
                    </a>
                    <a class="d-block d-lg-none nav-link" href="#">Your account</a>
                    <div class="dropdown-menu">
                        <form class="px-4 py-3">
                            <div class="form-group">
                                <label for="exampleDropFormEmail1"><b>Email address</b></label>
                                <input type="email" class="form-control" id="exampleDropFormEmail1" placeholder="email@example.com">
                            </div>
                            <div class="form-group">
                                <label for="exampleDropFormPassword1"><b>Password</b></label>
                                <input type="password" class="form-control" id="exampleDropFormPassword1" placeholder="Password">
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

</section>--}}
    @foreach($covers as $cover)
        <section style="background-image: url({{$cover->photo ? asset('images/index/' . $cover->photo->file) : "none"}});height: 800px; background-attachment:fixed;
            background-position:center;background-repeat:no-repeat;background-size:cover;">
            <div class="absolute-center row" style="position: center; padding-top: 30%">
                <div class="col-12">
                    <div class="row">
                        <p class="text-center col-12 text-header">{{$cover->name}}</p>
                    </div>
                    <div class="row">
                        <p id="subtext-header" class="text-white text-center col-12">{{$cover->body}}</p>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <a href="destinations.html"><button type="button" class="btn btn-link header-button mr-2">SHOP</button></a>
                        <a href="#"><button type="button" class="btn btn-link header-button">OUR BLOG</button></a>
                    </div>
                </div>
            </div>
        </section>
    @endforeach

{{--
<section class="container-fluid bg-darkgrey search-bar">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <div class="row">
                <div class="col-12 d-lg-flex align-items-center justify-content-around text-center">
                    <p class="text-white border-right m-0 pr-4 d-none d-lg-block">Find your<br><span class="font-large">destination</span></p>
                    <p class="text-white text-center d-lg-none font-large mt-3 mt-lg-0">Find your destination</p>
                    <div class="d-flex justify-content-around">
                        <p class="m-0"><i class="text-secondary fa fa-globe fa-2x"></i></p>
                        <div class="input-group w-75">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary dropdown-toggle input-group-btn" type="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Africa</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Asia</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Australia</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Europe</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">North America</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">South America</a>
                                </div>
                            </div>
                            <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Choose a continent">
                        </div>
                    </div>
                    <div class="d-flex justify-content-around mt-3 mt-lg-0">
                        <p class="m-0"><i class="text-secondary fa fa-map-marker fa-2x"></i></p>
                        <div class="input-group w-75">

                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary dropdown-toggle input-group-btn" type="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Continent</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Continent</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Continent</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Continent</a>
                                </div>
                            </div>
                            <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Choose a country">
                        </div>
                    </div>
                    <a href="#"><button type="button" class="btn btn-link header-button mr-2 my-3 my-lg-0">SEARCH</button></a>
                </div>
            </div>
        </div>
    </div>
</section>
--}}

<section class="container-fluid my-5">
    <div class="row pt-4pr">
        <div class="col-12 text-center mb-5">
            <h2>DISCOVER THE WORLD</h2>
            <p>Explore every day.</p>
        </div>
    </div>
    <div class="row justify-content-around">
        @foreach($continents as $continent)
            <a href="#" id="box"><h1 id="box-title" class="text-center">{{$continent->name}}</h1><img class="mb-5" width="500" height="500" src="{{$continent->photo ? asset('images/continents/' . $continent->photo->file) : "none"}}" alt="" style="object-fit: cover;"></a>
        @endforeach
    </div>
</section>

<section class="container-fluid mb-5">
    <div class="row pt-4pr">
        <div class="col-12 text-center">
            <h2>BEST SELLERS</h2>
            <p>Explore every day.</p>
        </div>
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex justify-content-center">
                    @foreach($products as $product)
                        @if($product->bestseller == "1")
                            <img class="d-block m-4 small" src="{{$product->photo ? asset('images/products/' . $product->photo->file) : "none"}}" alt="First slide">
                        @else
                        @endif
                   @endforeach
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-center">
                    <img class="d-block m-4 small" src="img/bestseller5a.png" alt="First slide">
                    <img class="d-block m-4 small" src="img/bestseller6a.png" alt="First slide">
                    <img class="d-block m-4 small" src="img/bestseller7a.png" alt="First slide">
                    <img class="d-block m-4 small" src="img/bestseller4a.png" alt="First slide">

                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</section>
{{--
<section class="container-fluid travel-type pt-4pr pb-5pr">
    <div class="row">
        <div class="col-12 text-center text-white pb-4pr">
            <h2>TRAVEL TYPE</h2>
            <p>Explore your dreams.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-white d-flex justify-content-around">
            <div class="row">
                <div class="text-center col-3">
                    <a href="#" class="travel">
                        <i class="fa fa-building fa-3x bg-circle text-white"></i>
                        <p class="text-white travel-text">City Breaks</p>
                    </a>
                </div>
                <div class="text-center col-3">
                    <a href="#" class="travel">
                        <i class="fa fa-safari fa-3x bg-circle text-white"></i>
                        <p class="text-white travel-text">Adventure</p>
                    </a>
                </div>
                <div class="text-center col-3">
                    <a href="#" class="travel">
                        <i class="fa fa-anchor fa-3x bg-circle text-white text-white"></i>
                        <p class="text-white travel-text">Beach</p>
                    </a>
                </div>
                <div class="text-center col-3">
                    <a href="#" class="travel">
                        <i class="fa fa-binoculars fa-3x bg-circle text-white"></i>
                        <p class="text-white travel-text">Safari</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
--}}
<section class="pt-4pr pb-5pr d-flex justify-content-around">
    @foreach($categories as $category)
        <a href="#" style="text-decoration: none; color: black">
            <div class="card" style="width: 25rem;">
                <img class="card-img-top mb-5" src="{{$category->photo ? asset('images/categories/' . $category->photo->file) : "none"}}" alt="Card image cap">
                <div class="card-body text-center" style="position:relative;">
                    <div style="border-top: 3px solid grey; width: 2rem; position: absolute; left: 45%;"></div>
                    <p class="card-text pt-5">{{$category->body}}</p>
                </div>
            </div>
        </a>
    @endforeach
</section>

<section class="container pt-4pr pb-5pr">
    <div class="row pb-4pr">
        <div class="col-12 text-center">
            <h2>HAPPY CLIENTS</h2>
            <p>blablablablabla.</p>
        </div>
    </div>
    <div class="row">
        <div class="card-deck">
            <div class="card">
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <small class="text-muted">Name of the client<br>Country</small>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <small class="text-muted">Name of the client<br>Country</small>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <small class="text-muted">Name of the client<br>Country</small>
                </div>
            </div>
        </div>
        <div id="show-more-content">
            <div class="card-deck pt-4pr">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <small class="text-muted">Name of the client<br>Country</small>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <small class="text-muted">Name of the client<br>Country</small>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <small class="text-muted">Name of the client<br>Country</small>
                    </div>
                </div>
            </div>
            <div class="card-deck pt-4pr">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <small class="text-muted">Name of the client<br>Country</small>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <small class="text-muted">Name of the client<br>Country</small>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <small class="text-muted">Name of the client<br>Country</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row">
                <button onclick="ShowMore()" type="button"  id="show-more" class="btn text-white border-none btn-dark mt-1pr col-2 offset-10">SHOW
                    MORE</button>
                <button onclick="ShowMore()" type="button"  id="show-less" class="btn text-white border-none btn-dark mt-1pr col-2 offset-10">SHOW
                    LESS</button>
            </div>
        </div>
    </div>
</section>

{{--<footer class="container-fluid bg-darkgrey pt-4pr pb-1pr">
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
                    <img src="img/footer1.png" alt="instafeed" class="p-1pr">
                    <img src="img/footer2.png" alt="instafeed" class="p-1pr">
                    <img src="img/footer3.png" alt="instafeed" class="p-1pr">
                </div>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <img src="img/footer4.png" alt="instafeed" class="p-1pr">
                    <img src="img/footer5.png" alt="instafeed" class="p-1pr">
                    <img src="img/footer6.png" alt="instafeed" class="p-1pr">
                </div>
            </div>
            <div class="col-lg-2 footer-padding">
                <h5 class="text-secondary pb-1pr">CONTACT US</h5>
                <p class="font-small text-secondary m-0">Schönhauser Allee<br>167c, 10345 Berlin Germany</p>
                <p class="font-small text-secondary m-0">Email: moin@fernweh.de</p>
                <p class="font-small text-secondary m-0">Telephone: 0123456789</p>
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

<script src="../resources/assets/front_assets/vendor/jquery/jquery.min.js"></script>
<script src="../resources/assets/front_assets/vendor/jquery/script.js"></script>
<script src="../resources/assets/front_assets/vendor/jquery/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="../resources/assets/front_assets/vendor/bootstrap/js/bootstrap.min.js">
</script>
</body>
</html>--}}


@endsection

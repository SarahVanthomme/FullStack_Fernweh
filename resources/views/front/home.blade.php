@extends('layouts.front')

@section('title')
    Fernweh
@endsection
@include('partials.header-light')
@section('content')
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
                        <a href="{{ env('URL') }}/shop"><button type="button" class="btn btn-lg btn-link header-button mr-2">SHOP</button></a>
                        <a href="#"><button type="button" class="btn btn-lg btn-link header-button">BLOG</button></a>
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

<section class="container-fluid mt-5">
    <div class="fade-in-section row pt-4pr">
        <div class="col-12 text-center mb-5">
            <h2>DISCOVER THE WORLD</h2>
            <p>Explore every day.</p>
        </div>
    </div>
    <div class="fade-in-section pb-5pr d-flex justify-content-around">
        @foreach($continents as $continent)
            <a href="#" id="box"><h1 id="box-title" class="text-center">{{$continent->name}}</h1><img class="mb-5" width="500" height="500" src="{{$continent->photo ? asset('images/continents/' . $continent->photo->file) : "none"}}" alt="" style="object-fit: cover;"></a>
        @endforeach
    </div>
</section>
<section class="container-fluid mb-5">
    <div class="row">
        <div class="fade-in-section col-12 text-center mb-5">
            <h2>BEST SELLERS</h2>
            <p>Explore Earth's gems.</p>
        </div>
    </div>
    @include('front.slider')
</section>

<section class="container-fluid my-5">
    <div class="row pt-4pr">
        <div class="fade-in-section col-12 text-center pb-4pr">
            <h2>TRAVEL TYPE</h2>
            <p>Explore your dreams.</p>
        </div>
    </div>
    <div class="fade-in-section pb-5pr d-flex justify-content-around">
        @foreach($categories as $category)
            <a href="#" style="text-decoration: none; color: black">
                <div class="card" style="width: 25rem;">
                    <img class="card-img-top mb-5" src="{{$category->photo ? asset('images/categories/' . $category->photo->file) : "none"}}" alt="Card image cap">
                    <div class="card-body text-center" style="position:relative;">
                        <div style="border-top: 3px solid grey; width: 2rem; position: absolute; left: 45%;"></div>
                        <p class="card-text pt-5"><strong>{{$category->name}}</strong><br>{{$category->body}}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
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

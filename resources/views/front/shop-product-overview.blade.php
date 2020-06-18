@extends('layouts.front')
@section('title')
    Destinations
@endsection
@section('content')
    @include('front.shop-banner')
{{--
    <section>
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                </ol>
                <div class="carousel-inner">
                    @foreach($banners as $banner)
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{$banner->photo ? asset('images/banners/' . $banner->photo->file) : "none"}}" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="destination-header">{{$banner->name}}</h5>
                                <p>{{$banner->body}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
    </section>
--}}
{{--<div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('images/frontend/destination-slider-1.png')}}" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="destination-header">Asia</h5>
                            <p>is enduring traditions</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('images/frontend/destination-slider-2.png')}}" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="destination-header">South America</h5>
                            <p>is enduring traditions</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('images/frontend/destination-slider-3.png')}}" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="destination-header">Africa</h5>
                            <p>is enduring traditions</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('images/frontend/destination-slider-4.png')}}" alt="Fourth slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="destination-header">Europe</h5>
                            <p>is enduring traditions</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('images/frontend/destination-slider-5.png')}}" alt="Fifth slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="destination-header">Australia</h5>
                            <p>is enduring traditions</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('images/frontend/destination-slider-6.png')}}" alt="Sixth slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="destination-header">North America</h5>
                            <p>is enduring traditions</p>
                        </div>
                    </div>

                </div>--}}{{--

                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
--}}
    <section class="container-fluid pt-3pr">
        <button type="button" class="filter">Filter</button>
        <div class="row pt-4pr">
            <div class="col-lg-3 col-5 eachfilter z-index-5">
                <div class="inner-filter">
                    {{--<button class="collapsible toggle-icon-1 bg-dark">Categorie<div class="plus-minus-toggle collapsed toggle-1 float-right mt-3pr"></div></button>
                    <div class="content">
                        <div
                            class="d-flex align-items-center pt-3pr pb-3pr"><input class="mb-1pr mr-4pr" type="checkbox"><p class="m-0">Categorie
                            </p></div>
                        <div class="d-flex align-items-center pb-3pr"><input class="mb-1pr mr-4pr" type="checkbox"><p class="m-0">Categorie</p></div>
                        <div class="d-flex align-items-center pb-3pr"><input class="mb-1pr mr-4pr" type="checkbox"><p class="m-0">Categorie</p></div>
                        <div
                            class="d-flex align-items-center pb-3pr pb-3pr"><input class="mb-1pr mr-4pr" type="checkbox"><p class="m-0">Categorie
                            </p></div>
                    </div>--}}
                    <button class="collapsible toggle-icon-2 bg-dark">Continents<div class="plus-minus-toggle collapsed toggle-2 float-right mt-3pr"></div></button>
                    <div class="content">
                        <div class="d-flex align-items-center pb-3pr pt-3pr">
                            <input class="mb-1pr mr-4pr" type="checkbox">
                            <p class="m-0">
                                <a href="{{route('shop')}}">All continents</a>
                            </p>
                        </div>
                        @foreach($continents as $continent)
                            <div class="d-flex align-items-center pb-3pr">

                                <input class="mb-1pr mr-4pr" type="checkbox">
                                <p class="m-0">
                                    <a href="{{route('productsPerContinent', $continent->id)}}">{{$continent->name}}</a>
                                </p>
                            </div>
                        @endforeach

                    </div>
                    <button class="collapsible toggle-icon-3 bg-dark">Country<div class="plus-minus-toggle collapsed toggle-3 float-right mt-3pr"></div></button>
                    <div class="content">
                            <div class="d-flex align-items-center pb-3pr pt-3pr">
                                <input class="mb-1pr mr-4pr" type="checkbox">
                                <p class="m-0">
                                    <a href="{{route('shop')}}">All countries</a>
                                </p>
                            </div>
                            @foreach($countries as $country)
                                <div class="d-flex align-items-center pb-3pr">

                                    <input class="mb-1pr mr-4pr" type="checkbox">
                                    <p class="m-0">
                                        <a href="{{route('productsPerCountry', $country->id)}}">{{$country->name}}</a>
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    <button class="collapsible toggle-icon-4 bg-dark">City<div
                            class="plus-minus-toggle collapsed toggle-4 float-right mt-3pr"></div></button>
                    <div class="content">
                        <div class="d-flex align-items-center pb-3pr pt-3pr">
                            <input class="mb-1pr mr-4pr" type="checkbox">
                            <p class="m-0">
                                <a href="{{route('shop')}}">All cities</a>
                            </p>
                        </div>
                        @foreach($cities as $city)
                            <div class="d-flex align-items-center pb-3pr">

                                <input class="mb-1pr mr-4pr" type="checkbox">
                                <p class="m-0">
                                    <a href="{{route('productsPerCity', $city->id)}}">{{$city->name}}</a>
                                </p>
                            </div>
                        @endforeach
                    </div>
                    <button class="collapsible toggle-icon-5 bg-dark">Category<div
                            class="plus-minus-toggle collapsed toggle-5 float-right mt-3pr"></div></button>
                    <div class="content">
                        <div class="d-flex align-items-center pb-3pr pt-3pr">
                            <input class="mb-1pr mr-4pr" type="checkbox">
                            <p class="m-0">
                                <a href="{{route('shop')}}">All categories</a>
                            </p>
                        </div>
                        @foreach($categories as $category)
                            <div class="d-flex align-items-center pb-3pr">

                                <input class="mb-1pr mr-4pr" type="checkbox">
                                <p class="m-0">
                                    <a href="{{route('productsPerCategory', $category->id)}}">{{$category->name}}</a>
                                </p>
                            </div>
                        @endforeach
                    </div>

 {{--

                     <button class="collapsible toggle-icon-5 bg-dark">Price<div
                             class="plus-minus-toggle collapsed toggle-5 float-right mt-3pr"></div></button>
                     <div class="content">
                         <div class="price-slider-range pt-6pr">
                             <input type="range" min="1" max="25" value="50" class="price-slider" id="myRange">
                             <p>Maximum price: <span id="demo"></span></p>
                         </div>
                     </div>
                     <button class="collapsible toggle-icon-6 bg-dark">Reviews<div
                             class="plus-minus-toggle collapsed toggle-6 float-right mt-3pr"></div></button>
                     <div class="content">
                         <a href="#"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa
                         fa-star"></i><i class="fa fa-star"></i></a><br>
                         <a href="#"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a><br>
                         <a href="#"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></a><br>
                         <a href="#"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></a><br>
                         <a href="#"><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></a>
                     </div>

                </div>
            </div>--}}
                </div>
{{--
        <div class="row pb-2pr pt-4pr">
            <div class="col-lg-9 col-12 offset-lg-3 d-flex justify-content-center">
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <button type="button" class="btn btn-product-page">1</button><p class="m-0 align-self-center">|</p>
                        <button type="button" class="btn btn-product-page">2</button><p class="m-0 align-self-center">|</p>
                        <button type="button" class="btn btn-product-page">3</button>
                    </div>
                </div>
            </div>
        </div>
--}}
            </div>
            <div class="col-lg-9 col-md-12 col-4 offset-4 offset-md-0 filter-content">
                <div class="row justify-content-around d-flex">
                    @foreach($products as $product)
                        <div class="text-center product-overview">
                            <div class="hovereffect product-content">
                                <div class="product-content-overlay"></div>
                                <img class="img-fluid bottom-3" src="{{$product->photo ? asset('/images/products/' . $product->photo->file) : 'NONE'}}" alt="">
                                <div class="overlay">
                                    <p class="icon-links d-flex justify-content-around">
                                        <a href="#"><i class="bg-circle-small-icon product-icon-1 fa fa-heart font-xl text-light"></i></a>
                                        <a href="{{route('addToCart', $product->id)}}"><i class="bg-circle-small-icon product-icon-1 fa fa-shopping-cart font-xl large-font-300 text-white"></i></a>
                                        <a href="product_detail.html"><i class="bg-circle-small-icon product-icon-1 fa fa-search-plus font-xl text-white"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div>
                                <a href="product_detail.html" class="product-title"><h5 class="pt-4pr">{{$product->name}}</h5></a>
                                <p>{{$product->continent ? $product->continent->name : "No continent"}}<br>{{$product->price}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>

@endsection

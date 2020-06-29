@extends('layouts.front')
@section('title')
    {{$translation->where('name','Shop')->value('body')}}
@endsection
@include('partials.header-light')

@section('content')
    @include('front.shop-banner')
    <section class="container-fluid pt-3pr">
        <button type="button" class="filter">Filter</button>
        <div class="row pt-4pr">
            <div class="mt-5 col-lg-3 col-5 eachfilter z-index-5">
                <div class="mt-5 inner-filter">
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
                    <button class="collapsible toggle-icon-1 bg-filter text-dark" style="border-bottom: 1px solid white;">{{$translation->where('name','Continents')->value('body')}}<div class="collapsed toggle-1 float-right mt-3pr"></div></button>
                    <div class="content">
                        <div class="d-flex align-items-center pb-3pr pt-3pr">
                            <input class="mb-1pr mr-4pr" type="checkbox">
                            <p class="m-0">
                                <a class="text-dark text-decoration-none" href="{{route('shop')}}">{{$translation->where('name','AllContinents')->value('body')}}</a>
                            </p>
                        </div>
                        @foreach($continents as $continent)
                            <div class="d-flex align-items-center pb-3pr">

                                <input class="mb-1pr mr-4pr" type="checkbox">
                                <p class="m-0">
                                    <a class="text-dark text-decoration-none" href="{{route('productsPerContinent', $continent->id)}}">{{$continent->name}}</a>
                                </p>
                            </div>
                        @endforeach

                    </div>
                    <button class="collapsible toggle-icon-2 bg-filter text-dark" style="border-bottom: 1px solid white;">{{$translation->where('name','Countries')->value('body')}}<div class="collapsed toggle-2 float-right mt-3pr"></div></button>
                    <div class="content">
                            <div class="d-flex align-items-center pb-3pr pt-3pr">
                                <input class="mb-1pr mr-4pr" type="checkbox">
                                <p class="m-0">
                                    <a class="text-dark text-decoration-none" href="{{route('shop')}}">{{$translation->where('name','AllCountries')->value('body')}}</a>
                                </p>
                            </div>
                            @foreach($countries as $country)
                                <div class="d-flex align-items-center pb-3pr">

                                    <input class="mb-1pr mr-4pr" type="checkbox">
                                    <p class="m-0">
                                        <a class="text-dark text-decoration-none" href="{{route('productsPerCountry', $country->id)}}">{{$country->name}}</a>
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    <button class="collapsible toggle-icon-3 bg-filter text-dark" style="border-bottom: 1px solid white;">{{$translation->where('name','Cities')->value('body')}}<div
                            class="collapsed toggle-3 float-right mt-3pr"></div></button>

                    <div class="content">
                        <div class="d-flex align-items-center pb-3pr pt-3pr">
                            <input class="mb-1pr mr-4pr" type="checkbox">
                            <p class="m-0">
                                <a class="text-dark text-decoration-none" href="{{route('shop')}}">{{$translation->where('name','AllCities')->value('body')}}</a>
                            </p>
                        </div>
                        @foreach($cities as $city)
                            <div class="d-flex align-items-center pb-3pr">

                                <input class="mb-1pr mr-4pr" type="checkbox">
                                <p class="m-0">
                                    <a class="text-dark text-decoration-none" href="{{route('productsPerCity', $city->id)}}">{{$city->name}}</a>
                                </p>
                            </div>
                        @endforeach
                    </div>
                    <button class="collapsible toggle-icon-4 bg-filter text-dark" style="border-bottom: 1px solid white;">{{$translation->where('name','Categories')->value('body')}}<div class="collapsed toggle-4 float-right mt-3pr"></div></button>
                    <div class="content">
                        <div class="d-flex align-items-center pb-3pr pt-3pr">
                            <input class="mb-1pr mr-4pr" type="checkbox">
                            <p class="m-0">
                                <a class="text-dark text-decoration-none" href="{{route('shop')}}">{{$translation->where('name','AllCategories')->value('body')}}</a>
                            </p>
                        </div>
                        @foreach($categories as $category)
                            <div class="d-flex align-items-center pb-3pr">

                                <input class="mb-1pr mr-4pr" type="checkbox">
                                <p class="m-0">
                                    <a class="text-dark text-decoration-none" href="{{route('productsPerCategory', $category->id)}}">{{$category->name}}</a>
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-4 offset-4 offset-md-0 filter-content">
                <h1 class="mb-5 text-center">{{$translation->where('name','OurProducts')->value('body')}}</h1>
                <div class="row justify-content-around d-flex">
                    @foreach($products as $product)
                        <div class="text-center product-overview mb-5">
                            <div class="hovereffect product-content mb-3">
                                <div class="product-content-overlay"></div>
                                <img class="img-fluid bottom-3 product-img-shop" src="{{$product->photo ? asset('/images/products/' . $product->photo->file) : 'NONE'}}" alt="">
                                <div class="overlay">
                                    <p class="icon-links d-flex justify-content-around">
{{--                                        <a href="#"><i class="bg-circle-small-icon product-icon-1 fa fa-heart font-xl text-light"></i></a>--}}
{{--                                        <a href="{{route('addToCart', $product->id)}}"><i class="bg-circle-small-icon product-icon-1 fa fa-shopping-cart font-xl large-font-300 text-white"></i></a>--}}
                                        @guest
                                            <a href="{{route('login')}}"><i class="bg-circle-small-icon product-icon-1 fa fa-shopping-cart font-xl large-font-300 text-white"></i></a>
                                        @else
                                            <a href="{{route('addToCart', $product->id)}}"><i class="bg-circle-small-icon product-icon-1 fa fa-shopping-cart font-xl large-font-300 text-white"></i></a>
                                        @endguest
{{--                                        <a href="{{route('addToCart', $product->id)}}"><i class="bg-circle-small-icon product-icon-1 fa fa-shopping-cart font-xl large-font-300 text-white"></i></a>--}}
                                        <a href="{{route('product_detail', $product->id)}}"><i class="bg-circle-small-icon product-icon-1 fa fa-search-plus font-xl text-white"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div>
                                <a href="{{route('product_detail', $product->id)}}" class="product-title"><h5 class="pt-4pr">{{$product->name}}</h5></a>
                                <p>{{$product->continent ? $product->continent->name : "No continent"}}<br>{{$product->price}}</p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>
    </section>

    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight){
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        }

        $(function() {
            $('.toggle-icon-1').on('click', function() {
                $('.toggle-1').toggleClass('collapsed');
            });
            $('.toggle-icon-2').on('click', function() {
                $('.toggle-2').toggleClass('collapsed');
            });
            $('.toggle-icon-3').on('click', function() {
                $('.toggle-3').toggleClass('collapsed');
            });
            $('.toggle-icon-4').on('click', function() {
                $('.toggle-4').toggleClass('collapsed');
            });
            $('.toggle-icon-5').on('click', function() {
                $('.toggle-5').toggleClass('collapsed');
            });
            $('.toggle-icon-6').on('click', function() {
                $('.toggle-6').toggleClass('collapsed');
            });
        });

    </script>

@endsection

@extends('layouts.front')

@section('title')
    {{$translation->where('name','Fernweh')->value('body')}}
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
                        <a href="{{ env('URL') }}/shop"><button type="button" class="btn btn-lg btn-link header-button mr-2">{{$translation->where('name','buttonShop')->value('body')}}</button></a>
                        <a href="#"><button type="button" class="btn btn-lg btn-link header-button">{{$translation->where('name','buttonContact')->value('body')}}</button></a>
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
            <h2>{{$translation->where('name','Titel1')->value('body')}}</h2>
            <p>{{$translation->where('name','SubTitel1')->value('body')}}</p>
        </div>
    </div>
    <div class="fade-in-section pb-5pr d-flex justify-content-around">
        @foreach($continents as $continent)
            <a href="{{route('shop')}}" id="box"><h1 id="box-title" class="text-center">{{$continent->name}}</h1><img class="mb-5" src="{{$continent->photo ? asset('images/continents/' . $continent->photo->file) : "none"}}" alt=""></a>
        @endforeach
    </div>
</section>
<section class="container-fluid mb-5">
    <div class="row">
        <div class="fade-in-section col-12 text-center mb-5">
            <h2>{{$translation->where('name','Titel2')->value('body')}}</h2>
            <p>{{$translation->where('name','SubTitel2')->value('body')}}</p>
        </div>
    </div>
    @include('front.slider')
</section>

<section class="container-fluid my-5">
    <div class="row pt-4pr">
        <div class="fade-in-section col-12 text-center pb-4pr">
            <h2>{{$translation->where('name','Titel3')->value('body')}}</h2>
            <p>{{$translation->where('name','SubTitel3')->value('body')}}</p>
        </div>
    </div>
    <div class="fade-in-section pb-5pr d-lg-flex justify-content-lg-around d-block justify-content-around>
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

@endsection

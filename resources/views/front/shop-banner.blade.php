<section>

    <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($banners as $banner)
                <div class="carousel-item @if ($loop->first) active @endif">
                    <img class="d-block w-100" src="{{$banner->photo ? asset('images/banners/' . $banner->photo->file) : "none"}}" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="destination-header">{{$banner->name}}</h5>
                        <p>{{$banner->body}}</p>
                    </div>
                </div>
            @endforeach
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





{{--
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($banners as $banner)
                <div class="carousel-item @if ($loop->first) active @endif">
                    <img class="d-block w-100" src="{{$banner->photo ? asset('images/banners/' . $banner->photo->file) : "none"}}" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="destination-header">{{$banner->name}}</h5>
                        <p>{{$banner->body}}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
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
--}}
</section>

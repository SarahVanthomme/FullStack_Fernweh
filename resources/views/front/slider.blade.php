{{--
<div class="customer-logos">
    <div class="slide"><img src="{{$continent->photo ? asset('images/continents/' . $continent->photo->file) : "none"}}"></div>
    <div class="slide"><img src="{{$continent->photo ? asset('images/continents/' . $continent->photo->file) : "none"}}"></div>
    <div class="slide"><img src="{{$continent->photo ? asset('images/continents/' . $continent->photo->file) : "none"}}"></div>
    <div class="slide"><img src="{{$continent->photo ? asset('images/continents/' . $continent->photo->file) : "none"}}"></div>
    <div class="slide"><img src="{{$continent->photo ? asset('images/continents/' . $continent->photo->file) : "none"}}"></div>
    <div class="slide"><img src="{{$continent->photo ? asset('images/continents/' . $continent->photo->file) : "none"}}"></div>
    <div class="slide"><img src="{{$continent->photo ? asset('images/continents/' . $continent->photo->file) : "none"}}"></div>
    <div class="slide"><img src="{{$continent->photo ? asset('images/continents/' . $continent->photo->file) : "none"}}"></div>
</div>


--}}

{{--

<div class="container-fluid">
    <div class="col-md-12">
        <div class="carousel slide" id="myCarousel">
            <div class="carousel-inner d-flex">
                <div class="carousel-item active">
                    <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                        <a href="#"><img src="http://lorempixel.com/400/200/sports" class="img-responsive">1</a></div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                        <a href="#"><img src="http://lorempixel.com/400/200/" class="img-responsive">2</a></div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                        <a href="#"><img src="http://lorempixel.com/400/200/sports" class="img-responsive">3</a></div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                        <a href="#"><img src="http://lorempixel.com/400/200/" class="img-responsive">4</a></div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                        <a href="#"><img src="http://lorempixel.com/400/200/sports" class="img-responsive">5</a></div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev"><i class="fa fa-chevron-right"></i></a>
            <a class="carousel-control-next" href="#myCarousel" data-slide="next"><i class="fa fa-chevron-left"></i></a>
        </div>
    </div>
</div>

<script>
    $('#myCarousel').carousel({
        interval: 40000
    });

    $('.carousel .carousel-item').each(function(){
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length>0) {

            next.next().children(':first-child').clone().appendTo($(this)).addClass('rightest');

        }
        else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));

        }
    });
</script>--}}

<!-- Top content -->
<div class="top-content fade-in-section">
    <div class="container-fluid">
        <div id="carousel-example" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner row w-100 mx-auto" role="listbox">

                @foreach($products as $product)
                    @if($product->bestseller == "1")
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 @if ($loop->first) active @endif">
                            <img src="{{$product->photo ? asset('images/products/' . $product->photo->file) : "none"}}" class="img-fluid mx-auto d-block" alt="img1">
                        </div>
                    @else
                    @endif
                @endforeach

                {{--<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                    <img src="{{$product->photo ? asset('images/products/' . $product->photo->file) : "none"}}" class="img-fluid mx-auto d-block" alt="img1">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="{{$product->photo ? asset('images/products/' . $product->photo->file) : "none"}}" class="img-fluid mx-auto d-block" alt="img2">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="{{$product->photo ? asset('images/products/' . $product->photo->file) : "none"}}" class="img-fluid mx-auto d-block" alt="img3">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="{{$product->photo ? asset('images/products/' . $product->photo->file) : "none"}}" class="img-fluid mx-auto d-block" alt="img4">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="{{$product->photo ? asset('images/products/' . $product->photo->file) : "none"}}" class="img-fluid mx-auto d-block" alt="img5">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="{{$product->photo ? asset('images/products/' . $product->photo->file) : "none"}}" class="img-fluid mx-auto d-block" alt="img6">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="{{$product->photo ? asset('images/products/' . $product->photo->file) : "none"}}" class="img-fluid mx-auto d-block" alt="img7">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="{{$product->photo ? asset('images/products/' . $product->photo->file) : "none"}}" class="img-fluid mx-auto d-block" alt="img8">
                </div>--}}
            </div>
            <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>



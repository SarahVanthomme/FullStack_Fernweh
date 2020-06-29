@extends('layouts.front')
@section('title')
    {{$product->name}}
@endsection
@include('partials.header-dark')
@section('content')

<section class="container-fluid pt-4pr">
    <div class="row">
        <div class="col-12 align-items-center">
            <div class="row d-flex justify-content-around">
                <div class="col-6 col-md-4 col-lg-3 text-center">
                    <img style="height: 40rem" src="{{$product->photo ? asset('images/products/' . $product->photo->file) : "NONE"}}" alt="product1">
                </div>
                <div class="col-6 col-md-8 col-lg-6 d-flex flex-column">
                    <div class="flex-grow-1 flex-lg-grow-0">
                        <h5 class="font-xxl">{{$product->name}}</h5>
                        <p class="m-0 font-xl">€ {{$product->price}}<br>{{$translation->where('name','CategorieShopDetail')->value('body')}}{{$product->category->name}}</p>
                        <p class="font-large pt-5"><b>{{$translation->where('name','Description')->value('body')}}</b></p>
                        <p id="product-content-medium font-large">{{$product->description}}</p>
                        <div class="d-flex mb-4pr d-md-none">
                            <label class="m-0">{{$translation->where('name','Quantity')->value('body')}}</label>
                            <input class="ml-5pr bg-grey input-number" type="number" min="1" max="10">
                        </div>
                    </div>
                    <div>
                        <div class="d-flex mb-4pr d-sm-none d-md-block pt-5">
                            <label class="m-0 font-large"><b>{{$translation->where('name','Quantity')->value('body')}}</b></label>
                            <input class="ml-5pr input-number border-grey" type="number" min="1" max="10">
                        </div>
                        <div class="align-items-center d-flex">

                            @guest
                                <a href="{{route('login')}}" class="btn btn-link btn-lg text-white btn-dark mr-5pr mt-5 text-decoration-none">{{$translation->where('name','ButtonShopDetail')->value('body')}}</a>
                            @else
                                <a href="{{route('addToCart', $product->id)}}" class="btn btn-link btn-lg text-white btn-dark mr-5pr mt-5 text-decoration-none">{{$translation->where('name','ButtonShopDetail')->value('body')}}</a>
                            @endguest




                        </div>
                    </div>
                </div>
            </div>
            <p id="product-content-mobile" class="pt-4pr">{{$product->description}}</p>
        </div>
    </div>
</section>
<section class="container text-center pt-4pr pb-4pr">
    <h2>Reviews</h2>
    <div class="row">
        <div class="col-10 col-md-5 offset-1 text-left">
            <h5>Add a review</h5>
            {!! Form::open(['method'=>'POST', 'action'=>'PostCommentController@store'])!!}
{{--            <input type="hidden" name="post_id" value="{{$postcomment->id}}">--}}
            <div class="d-flex">
                <p class="pr-4pr">Your rating</p>
                <a href="#"><i class="fa fa-star-o"></i><i
                        class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></a>
            </div>

            <div class="form-group">
                {!! Form::text('author', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::email('body', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>3]) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
            </div>
            {{--<input class="input-type-width" type="text" name="full_name" placeholder="Your Full Name"><br>
            <input class="mt-2pr input-type-width" type="email" name="email_address" placeholder="Your Email"><br>
            <input class="mt-2pr input-type-width" type="tel" name="tel" placeholder="Your Mobile Number"><br>
            <input class="mt-2pr input-type-width" type="text" name="review" placeholder="Your Review"><br>
            <button type="submit" class="btn text-white btn-dark mt-3pr">Submit</button>--}}
            {!! Form::close() !!}
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-10 pt-4pr">
            <div class="row d-flex mt-3pr">
                <div class="col-sm-12 col-md-3 col-lg-2 d-flex align-items-sm-center align-items-md-start">
                    <div class="profiel-review mb-2pr"></div>
                    <div class="d-md-none text-left ml-4pr">
                        <p><b>Name</b></p>
                        <i class="fa fa-star-o"></i><i
                            class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
                    </div>
                </div>
                <div class="col-12 col-md-9 text-left">
                    <div class="d-sm-none d-md-inline">
                        <p><b>Name</b></p>
                        <i class="fa fa-star-o"></i><i
                            class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi blanditiis consequatur, cumque delectus dignissimos error et facilis id illo impedit laudantium nemo nisi quisquam sint temporibus totam vero voluptate.</p>
                </div>
            </div>
            <div class="row d-flex mt-3pr">
                <div class="col-sm-12 col-md-3 col-lg-2 d-flex align-items-sm-center align-items-md-start">
                    <div class="profiel-review mb-2pr"></div>
                    <div class="d-md-none text-left ml-4pr">
                        <p><b>Name</b></p>
                        <i class="fa fa-star-o"></i><i
                            class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
                    </div>
                </div>
                <div class="col-12 col-md-9 text-left">
                    <div class="d-sm-none d-md-inline">
                        <p><b>Name</b></p>
                        <i class="fa fa-star-o"></i><i
                            class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi blanditiis consequatur, cumque delectus dignissimos error et facilis id illo impedit laudantium nemo nisi quisquam sint temporibus totam vero voluptate.</p>
                </div>
            </div>
            <div class="row d-flex mt-3pr">
                <div class="col-sm-12 col-md-3 col-lg-2 d-flex align-items-sm-center align-items-md-start">
                    <div class="profiel-review mb-2pr"></div>
                    <div class="d-md-none text-left ml-4pr">
                        <p><b>Name</b></p>
                        <i class="fa fa-star-o"></i><i
                            class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
                    </div>
                </div>
                <div class="col-12 col-md-9 text-left">
                    <div class="d-sm-none d-md-inline">
                        <p><b>Name</b></p>
                        <i class="fa fa-star-o"></i><i
                            class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi blanditiis consequatur, cumque delectus dignissimos error et facilis id illo impedit laudantium nemo nisi quisquam sint temporibus totam vero voluptate.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{--<section class="container mb-5">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <h5 class="col-12 text-center">More books for you</h5>
            </div>
            <div class="row">
                <a href="product_detail.html" class="col-4 col-lg-2 small"><img src="img/product1.png" alt="product1"></a>
                <a href="product_detail.html" class="col-4 col-lg-2 small"><img src="img/product1.png" alt="product1"></a>
                <a href="product_detail.html" class="col-4 col-lg-2 small"><img src="img/product1.png" alt="product1"></a>
                <a href="product_detail.html" class="col-4 col-lg-2 small"><img src="img/product1.png" alt="product1"></a>
                <a href="product_detail.html" class="col-4 col-lg-2 small"><img src="img/product1.png" alt="product1"></a>
                <a href="product_detail.html" class="col-4 col-lg-2 small"><img src="img/product1.png" alt="product1"></a>

            </div>
        </div>
    </div>
</section>--}}

@endsection
{{--
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
--}}

{{--
<script src="../resources/assets/front_assets/vendor/jquery/jquery.min.js"></script>
<script src="../resources/assets/front_assets/vendor/jquery/script.js"></script>
<script src="../resources/assets/front_assets/vendor/jquery/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="../resources/assets/front_assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
<script src="OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
</body>
</html>--}}

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
                        <img style="max-width: 100%; height: auto;"
                             src="{{$product->photo ? asset('images/products/' . $product->photo->file) : "NONE"}}"
                             alt="product1">
                    </div>
                    <div class="col-12 col-xl-6 d-flex flex-column">
                        <div class="flex-grow-1 flex-lg-grow-0">
                            <h5 class="font-xxl">{{$product->name}}</h5>
                            <p class="m-0 font-xl">€ {{$product->price}}
                                <br>{{$translation->where('name','CategorieShopDetail')->value('body')}}{{$product->category->name}}
                            </p>
                            <p class="font-large pt-5">
                                <b>{{$translation->where('name','Description')->value('body')}}</b></p>
                            <p id="product-content-medium font-large">{{$product->description}}</p>
                            <div class="d-flex mb-4pr d-md-none">
                                <label class="m-0">{{$translation->where('name','Quantity')->value('body')}}</label>
                                <input class="ml-5pr bg-grey input-number" type="number" min="1" max="10">
                            </div>
                        </div>
                        <div>
                            <div class="d-flex mb-4pr d-sm-none d-md-block pt-5">
                                <label
                                    class="m-0 font-large"><b>{{$translation->where('name','Quantity')->value('body')}}</b></label>
                                <input class="ml-5pr input-number border-grey" type="number" min="1" max="10">
                            </div>
                            <div class="align-items-center d-flex">

                                @guest
                                    <a href="{{route('login')}}"
                                       class="btn btn-link btn-lg text-white btn-dark mr-5pr mt-5 text-decoration-none">{{$translation->where('name','ButtonShopDetail')->value('body')}}</a>
                                @else
                                    <a href="{{route('addToCart', $product->id)}}"
                                       class="btn btn-link btn-lg text-white btn-dark mr-5pr mt-5 text-decoration-none">{{$translation->where('name','ButtonShopDetail')->value('body')}}</a>
                                @endguest


                            </div>
                        </div>
                    </div>
                </div>
                <p id="product-content-mobile" class="pt-4pr">{{$product->description}}</p>
            </div>
        </div>
    </section>
    <section class="container text-center pt-4pr pb-4pr mt-5">
        <h2>Reviews</h2>
        @if( Auth::check() )
            @if(Session::has('review_message'))
                {{session('review_message')}}
            @endif

            <div class="row mt-5">
                <div class="col-10 offset-1 text-center">
                    <h5>Add a review</h5>
                    <form method="POST" action="{{action('ProductsReviewController@store')}}"
                          enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="user_id" value="{{ Auth::User()->id }}">
                        <div class="form-group">
                            <input type="text" name="name" value="{{ Auth::User()->name }}"
                                   class="form-control form-control-lg">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" value="{{ Auth::User()->email }}"
                                   class="form-control form-control-lg">
                        </div>
                        <div class="form-group">
                            <div class="input-group w-100">
                        <textarea type="text" name="body" rows="10" placeholder="Your review"
                                  class="form-control form-control-lg"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-lg btn-dark"
                                    role="button" type="submit">
                                <span>Submit</span>
                            </button>
                        </div>
                    </form>
                    @include('includes.form_error')
                    @else
                        <div>
                            <p>Please log in to add a review !</p>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row border-top mt-5">
                <div class="col-12 col-md-10 pt-4pr">
                    @if($reviews)
                        @foreach($reviews as $review)
                            <div class="row d-flex mt-3pr">

                                <div class="col-12 col-md-9 text-left">
                                    <div class="d-sm-none d-md-inline">
                                        <p><b>{{$review->name}}</b></p>
                                        <i class="fa fa-star-o"></i><i
                                            class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i
                                            class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
                                    </div>
                                    <p>{{$review->body}}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

    </section>
@endsection


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

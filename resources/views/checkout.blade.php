@extends('layouts.front')
@section('title')
    Checkout
@endsection
@include('partials.header-dark')
@section('content')
    <section class="container-fluid pb-4pr px-2">
        <div class="row d-flex justify-content-center pt-4pr pb-4pr">
            <h1>Check out</h1>
        </div>
       {{-- <div class="row bg-lightgrey mb-2pr">
            <p class="m-0 p-1pr">Returning customer? <a href="#">Click here to log in</a></p>
        </div>
        <div class="row">
            If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to
            the Billing & Shipping section.<br>
            <form action="#" class="mt-2pr mb-2pr">
                <div class="d-flex mb-3">
                    <input type="text" name="fullname" placeholder="Username or Email" required class="mr-3 pl-15px">
                    <input type="password" name="pw" placeholder="Password" required class="pl-15px">
                </div>
                <div class="d-flex">
                    <button type="submit" class="btn btn-dark mr-5pr mb-4pr">Login</button>
                    <div class="d-flex align-items-center">
                        <input type="checkbox"><p class="m-0">Remember me</p>
                    </div>
                </div>
                <a href="#">Lost your password?</a>
            </form>
        </div>
        <div class="row bg-lightgrey mb-2pr mt-4pr">
            <p class="m-0 p-1pr">Have a coupon?</p>
        </div>
        <div class="row">
            <input type="text" placeholder="Enter coupon code" class="w-50 pl-15px">
        </div>
        <div class="row border-bottom">
            <button class="btn btn-dark mt-2pr mb-4pr">Apply coupon</button>
        </div>--}}

        <div class="row mx-1">
            <h2 class="col-12">Billing details</h2>
            <div class="col-12 col-md-7">
                <div class="row mt-2pr mx-1">
                    <form action="#" class="col-12">
                        <div class="row">
                            <input type="text" name="firstname" required placeholder="First name" class="col-5">
                            <input type="text" name="lastname" required placeholder="Last name" class="col-5 offset-1">
                            <div class="col-1"></div>
                        </div>
                    </form>
                </div>
                <div class="row mt-2pr mx-1">
                    <form action="#" class="col-11 p-0">
                        <input type="text" name="companyname" placeholder="Company name" class="w-100 pl-15px">
                    </form>
                </div>
                <div class="row mt-2pr mx-1">
                    <form action="#" class="col-12">
                        <div class="row">
                            <input type="number" name="phonenumber" required placeholder="Phone number" class="col-5">
                            <input type="email" name="email" required placeholder="Email address" class="col-5 offset-1">
                            <div class="col-1"></div>
                        </div>
                    </form>
                </div>
                <div class="row mt-2pr mx-1">
                    <form action="#" class="col-11 p-0">
                        <input type="text" name="country" placeholder="Country" class="w-100 pl-15px">
                    </form>
                </div>

                <div class="row mt-2pr mx-1">
                    <form action="#" class="col-11 p-0">
                        <input type="text" name="address" placeholder="Address line" class="w-100 pl-15px">
                    </form>
                </div>
                <div class="row mt-2pr mx-1">
                    <form action="#" class="col-11 p-0">
                        <input type="text" name="town-city" placeholder="Town/City" class="w-100 pl-15px">
                    </form>
                </div>
                <div class="row mt-2pr mx-1">
                    <form action="#" class="col-11 p-0">
                        <input type="text" name="district" placeholder="District" class="w-100 pl-15px">
                    </form>
                </div>
                <div class="row mt-2pr mx-1">
                    <form action="#" class="col-12">
                        <div class="row">
                            <input type="text" name="postcode" placeholder="Postcode/ZIP" class="col-5">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-5 bg-lightgrey margin-your-order">
                @if(Session::has('cart'))
                <h2 class="mt-3 pb-3pr border-bottom">Your order</h2>
                <div class="row d-flex mt-4pr border-bottom">
                    <p class="col-6">Product</p>
                    <p class="col-6 text-right">Total</p>
                </div>
                @if($cart)
                    @foreach($cart as $item)
                <div class="row d-flex">
                    <div class="col-5">
                        <p>{{$item['product_name']}}</p>
                        <img width="100px" height="170px" src="{{$item['product_image'] ? asset('/images/products/' . $item['product_image']) : 'GEEN FOTO'}}" alt="">
                    </div>
                    <form class="col-2" method="POST" action="{{action('FrontendController@updateQuantity')}}" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <input class="form-control form-control-sm" type="number" name="quantity" value="{{$item['quantity']}}" min="1" max="100">
                        <input class="form-control form-control-sm" type="hidden" name="id" value="{{$item['product_id']}}">
                        <button class="btn btn-primary btn-sm mt-2" type="submit"><i class="fas fa-euro"></i>Update</button>
    {{--
                        <a class="text-danger" href="{{route('removeItem', $item['product_id'])}}">Remove</a>
    --}}
                    </form>
                    <p class="col-5 text-right">€ {{$item['product_price']*$item['quantity']}}</p>
                </div>
                @endforeach
                    @else
                    <p>Looks like your cart is empty.</p>
                    @endif
                <div class="row d-flex mt-4pr">
                    <p class="col-6"><b>Subtotal</b></p>
                    <p class="col-6 text-right">€ {{Session::get('cart')->totalPrice}}</p>
                </div>
                <div class="row d-flex mt-4pr">
                    <p class="col-6"><b>Shipping</b></p>
                    <p class="col-6 text-right">Flat rate  € 5,00</p>
                </div>
                <div class="row d-flex mt-4pr">
                    <p class="col-6"><b>Total</b></p>
                    <p class="col-6 text-right"><b>€ {{(Session::get('cart')->totalPrice)+5}}</b></p>
                </div>
                @endif

                <div class="row d-flex align-items-center pt-4pr">
                    <input type="checkbox" class="col-1">
                    <p class="mb-0 col-11 text">I've read and accept the <a class="text-decoration-none" href="#">terms and conditions</a></p>
                </div>
                <div class="row d-flex justify-content-center pt-4pr pb-4pr">
                    <a href="{{ env('URL') }}/payment" class="btn btn-dark col-11 active" role="button" aria-pressed="true">Proceed to payment</a>
                </div>
            </div>
        </div>
    </section>
@endsection


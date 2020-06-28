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
        <div class="row mx-1">
            <h2 class="col-12">Billing details</h2>
            <div class="col-12 col-md-7">
                <div class="row mt-2pr mx-1">
                    <form action="#" class="col-12">
                        <div class="row">
                            <input type="text" name="firstname" required placeholder="First name" class="col-5 form-control-lg bg-lightgrey border-checkout">
                            <input type="text" name="lastname" required placeholder="Last name" class="col-5 offset-1 form-control-lg bg-lightgrey border-checkout">
                            <div class="col-1"></div>
                        </div>
                    </form>
                </div>
                <div class="row mt-2pr mx-1">
                    <form action="#" class="col-12">
                        <div class="row">
                            <input type="number" name="phonenumber" required placeholder="Phone number" class="col-5 form-control-lg bg-lightgrey border-checkout">
                            <input type="email" name="email" required placeholder="Email address" class="col-5 offset-1 form-control-lg bg-lightgrey border-checkout">
                            <div class="col-1"></div>
                        </div>
                    </form>
                </div>
                <div class="row mt-2pr mx-1">
                    <form action="#" class="col-11 p-0">
                        <input type="text" name="country" placeholder="Country" class="w-100 pl-15px form-control-lg bg-lightgrey border-checkout">
                    </form>
                </div>
                <div class="row mt-2pr mx-1">
                    <form action="#" class="col-11 p-0">
                        <input type="text" name="address" placeholder="Address line" class="w-100 pl-15px form-control-lg bg-lightgrey border-checkout">
                    </form>
                </div>
                <div class="row mt-2pr mx-1">
                    <form action="#" class="col-11 p-0">
                        <input type="text" name="town-city" placeholder="Town/City" class="w-100 pl-15px form-control-lg bg-lightgrey border-checkout">
                    </form>
                </div>
                <div class="row mt-2pr mx-1">
                    <form action="#" class="col-12">
                        <div class="row">
                            <input type="text" name="postcode" placeholder="Postcode/ZIP" class="col-5 form-control-lg bg-lightgrey border-checkout">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-5 bg-lightgrey margin-your-order">
                @if(Session::has('cart'))
                <h2 class="mt-3 pb-3pr border-bottom">Your order</h2>
                <div class="row d-flex mt-4pr mb-3 border-bottom font-large">
                    <p class="col-6 font-xl">Product</p>
                    <p class="col-6 text-right font-xl">Total</p>
                </div>
                @if($cart)
                    @foreach($cart as $item)
                <div class="row d-flex">
                    <div class="col-5">
                        <p class="font-large">{{$item['product_name']}}</p>
                        <img width="100px" height="170px" src="{{$item['product_image'] ? asset('/images/products/' . $item['product_image']) : 'GEEN FOTO'}}" alt="">
                    </div>
                    <form class="col-2" method="POST" action="{{action('FrontendController@updateQuantity')}}" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <input class="form-control form-control-lg" type="number" name="quantity" value="{{$item['quantity']}}" min="1" max="100">
                        <input class="form-control form-control-sm" type="hidden" name="id" value="{{$item['product_id']}}">
                        <button class="btn btn-link btn-sm mt-2 text-decoration-none text-warning font-large p-0" type="submit">Update</button>
                        <a class="text-danger text-decoration-none font-large" href="{{route('removeItem', $item['product_id'])}}">Remove</a>
                    </form>
                    <p class="col-5 text-right font-large">€ {{$item['product_price']*$item['quantity']}}</p>
                </div>
                @endforeach
                    @else
                    <p class="font-large">Looks like your cart is empty.</p>
                    @endif
                <div class="row d-flex mt-5">
                    <p class="col-6 font-large"><b>Subtotal</b></p>
                    <p class="col-6 text-right font-large">€ {{Session::get('cart')->totalPrice}}</p>
                </div>
                <div class="row d-flex mt-4pr">
                    <p class="col-6 font-large"><b>Shipping</b></p>
                    <p class="col-6 text-right font-large"><span class="pr-2">Flat rate</span> € 5,00</p>
                </div>
                <div class="row d-flex mt-4pr">
                    <p class="col-6 font-large"><b>Total</b></p>
                    <p class="col-6 text-right font-large"><b>€ {{(Session::get('cart')->totalPrice)+5}}</b></p>
                </div>
                @endif

                <div class="row d-flex align-items-center pt-4pr">
                    <input type="checkbox" class="col-1">
                    <p class="mb-0 col-11 text font-large">I've read and accept the <a class="text-decoration-none" href="#">terms and conditions</a></p>
                </div>
                <div class="row d-flex justify-content-center pt-4pr pb-4pr">
                    <a href="{{ env('URL') }}/payment" class="btn btn-lg btn-dark col-11 active" role="button" aria-pressed="true">Proceed to payment</a>
                </div>
            </div>
        </div>
    </section>
@endsection


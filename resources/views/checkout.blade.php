@extends('layouts.front')
@section('title')
    Checkout
@endsection
@include('partials.header-dark')
@section('content')
    <section class="container pb-4pr">
    <div class="row d-flex justify-content-center pt-4pr pb-4pr">
        <h1>Check out</h1>
    </div>
    <div class="row bg-lightgrey mb-2pr">
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
    </div>
    <div class="row mt-4">
        <h2>Billing details</h2>
    </div>
    <div class="row">
        <div class="col-12 col-md-7">
            <div class="row mt-2pr">
                <form action="#" class="col-12">
                    <div class="row">
                        <input type="text" name="firstname" required placeholder="First name" class="col-5">
                        <input type="text" name="lastname" required placeholder="Last name" class="col-5 offset-1">
                        <div class="col-1"></div>
                    </div>
                </form>
            </div>
            <div class="row mt-2pr">
                <form action="#" class="col-11 p-0">
                    <input type="text" name="companyname" placeholder="Company name" class="w-100 pl-15px">
                </form>
            </div>
            <div class="row mt-2pr">
                <form action="#" class="col-12">
                    <div class="row">
                        <input type="number" name="phonenumber" required placeholder="Phone number" class="col-5">
                        <input type="email" name="email" required placeholder="Email address" class="col-5 offset-1">
                        <div class="col-1"></div>
                    </div>
                </form>
            </div>
            <div class="row mt-2pr">
                <form action="#" class="col-11 p-0">
                    <select name="Country" class="w-100 pl-15px">
                        <option value="country">Country</option>
                        <option value="country">Country</option>
                        <option value="country">Country</option>
                        <option value="country">Country</option>
                        <option value="country">Country</option>
                        <option value="country">Country</option>
                    </select>
                </form>
            </div>

            <div class="row mt-2pr">
                <form action="#" class="col-11 p-0">
                    <input type="text" name="address" placeholder="Address line" class="w-100 pl-15px">
                </form>
            </div>
            <div class="row mt-2pr">
                <form action="#" class="col-11 p-0">
                    <input type="text" name="town-city" placeholder="Town/City" class="w-100 pl-15px">
                </form>
            </div>
            <div class="row mt-2pr">
                <form action="#" class="col-11 p-0">
                    <input type="text" name="district" placeholder="District" class="w-100 pl-15px">
                </form>
            </div>
            <div class="row mt-2pr">
                <form action="#" class="col-12">
                    <div class="row">
                        <input type="text" name="postcode" placeholder="Postcode/ZIP" class="col-5">
                    </div>
                </form>
            </div>
            <div class="row align-items-center mt-2pr">
                <input type="checkbox" class="mr-4">
                <p class="mb-0 ml-2pr">Create an account?</p>
            </div>
            <div class="row mt-4">
                <h2>Shipping details</h2>
            </div>
            <div class="row align-items-center mt-2pr">
                <input type="checkbox" class="mr-4">
                <p class="mb-0 ml-2pr">Ship to a different address?</p>
            </div>
            <div class="row mt-2pr">
                <form action="#" class="col-11 p-0">
                    <input type="text" name="companyname" placeholder="Order notes" class="w-100 pl-15px">
                </form>
            </div>
        </div>
        <div class="col-12 col-md-5 bg-lightgrey margin-your-order">
            @if(Session::has('cart'))
            <h2 class="mt-3 pb-3pr border-bottom">Your order</h2>
            <div class="row d-flex mt-4pr">
                <p class="col-6">Product</p>
                <p class="col-6 text-right">Total</p>
            </div>
            @foreach($cart as $item)
            <div class="row d-flex">
                <p class="col-5">{{$item['product_name']}}</p>
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
            <div class="row d-flex align-items-center">
                <input type="checkbox" class="col-1">
                <p class="mb-0 col-11">Check payments</p>
            </div>
            <div class="row d-flex justify-content-center pt-2pr">
                <div class="bg-white mx-15px">
                    <p class="px-40px pt-3pr">Please send a check to Store Name, Store Street, Store Town, Store State / County, Store
                        Postcode
                        .</p>
                </div>
            </div>
            <div class="row d-flex align-items-center pt-4pr pb-2pr">
                <input type="checkbox" class="col-1">
                <p class="mb-0 col-11">Paypal</p>
            </div>
            <div class="row d-flex justify-content-center pt-2pr">
                <div class="bg-white mx-15px">
                    <p class="px-40px pt-3pr">Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                </div>
            </div>
            <div class="row d-flex align-items-center pt-4pr">
                <input type="checkbox" class="col-1">
                <p class="mb-0 col-11">I've read and accept the <a href="#">terms and conditions</a></p>
            </div>
            <div class="row d-flex justify-content-center pt-4pr pb-4pr">
                <a href="{{ env('URL') }}/payment" class="btn btn-dark col-11 active" role="button" aria-pressed="true">Proceed to Paypal</a>
            </div>
        </div>
    </div>
</section>
@endsection


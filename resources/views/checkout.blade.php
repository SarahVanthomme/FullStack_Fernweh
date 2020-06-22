{{--<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Check Out</title>

</head>
<body>--}}

@extends('layouts.front')
@section('title')
    Checkout
@endsection
@include('partials.header-dark')

@section('content')

{{--
<section class="container-fluid z-index-5">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand xxl-font-300 text-dark" href="index.html">FERNWEH</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse large-font-300" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-dark" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="destinations.html" data-target="destinations.html" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Destinations
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="africa.html">Africa</a>
                        <a class="dropdown-item" href="asia.html">Asia</a>
                        <a class="dropdown-item" href="australia.html">Australia</a>
                        <a class="dropdown-item" href="europe.html">Europe</a>
                        <a class="dropdown-item" href="north_america.html">North America</a>
                        <a class="dropdown-item" href="south_america.html">South America</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Blog</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link ml-30pr text-dark d-none d-lg-block" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i>
                    </a>
                    <a class="d-block d-lg-none nav-link text-dark" href="shopping_cart.html">Shopping cart</a>
                    <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                        <p><b>Your shopping cart is empty</b></p>
                        <button class="btn text-white border-none btn-dark mr-5pr w-80 mb-4pr"><a href="destinations.html" class="btn-proceed">Go to shop</a></button>
                        <button class="btn text-white border-none btn-dark mr-5pr w-80"><a href="shopping_cart.html" class="btn-proceed">Go to cart</a></button>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link d-none d-lg-block ml-70pr text-dark" href="#"><i class="fa fa-user pr-45pr"></i>
                    </a>
                    <a class="d-block d-lg-none nav-link text-dark" href="#">Your account</a>
                    <div class="dropdown-menu">
                        <form class="px-4 py-3">
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1"><b>Email address</b></label>
                                <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormPassword1"><b>Password</b></label>
                                <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                <label class="form-check-label" for="dropdownCheck">
                                    <b>Remember me</b>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-dark">Sign in</button>
                        </form>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">New around here? Sign up</a>
                        <a class="dropdown-item" href="#">Forgot password?</a>
                    </div>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input id="background-search" class="form-control mr-sm-2" type="search"
                       placeholder="Search"
                       aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>

    </nav>
</section>
--}}
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
{{--            <div class="row d-flex">
                <p class="col-5">Egypt Travel Guide</p>
                <p class="col-2 text-right">X 01</p>
                <p class="col-5 text-right">€ 15,00</p>
            </div>
            <div class="row d-flex">
                <p class="col-5">Egypt Travel Guide</p>
                <p class="col-2 text-right">X 01</p>
                <p class="col-5 text-right">€ 15,00</p>
            </div>--}}
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


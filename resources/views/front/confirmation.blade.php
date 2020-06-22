@extends('layouts.front')
@section('title')
    Checkout
@endsection
@include('partials.header-dark')
@section('content')
    <section class="container mt-5 mb-5">
        <div class="text-center">
            <h2>Thank you!</h2>
            <h2>Your order has been received.</h2>
        </div>
        <div class="row mt-5">
            <div class="col-12 col-md-8 col-lg-4">
                <h5 class="border-bottom pb-4pr">Order Info</h5>
                <div class="row">
                    <p class="col-6">Order number</p>
                    <p class="col-6 text-right text-lg-left">927348</p>
                </div>
                <div class="row">
                    <p class="col-6">Country</p>
                    <p class="col-6 text-right text-lg-left">United States</p>
                </div>
                <div class="row">
                    <p class="col-6">Total</p>
                    <p class="col-6 text-right text-lg-left">€ 45</p>
                </div>
                <div class="row">
                    <p class="col-6">Payment method</p>
                    <p class="col-6 text-right text-lg-left">Paypal</p>
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-4 mt-5 mt-lg-0">
                <h5 class="border-bottom pb-4pr">Billing Address</h5>
                <div class="row">
                    <p class="col-6">Street</p>
                    <p class="col-6 text-right text-lg-left">Name of street</p>
                </div>
                <div class="row">
                    <p class="col-6">City</p>
                    <p class="col-6 text-right text-lg-left">Los Angeles</p>
                </div>
                <div class="row">
                    <p class="col-6">Country</p>
                    <p class="col-6 text-right text-lg-left">United States</p>
                </div>
                <div class="row">
                    <p class="col-6">Postcode</p>
                    <p class="col-6 text-right text-lg-left">36952</p>
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-4 mt-5 mt-lg-0">
                <h5 class="border-bottom pb-4pr">Shipping Address</h5>
                <div class="row">
                    <p class="col-6">Street</p>
                    <p class="col-6 text-right text-lg-left">Name of street</p>
                </div>
                <div class="row">
                    <p class="col-6">City</p>
                    <p class="col-6 text-right text-lg-left">Los Angeles</p>
                </div>
                <div class="row">
                    <p class="col-6">Country</p>
                    <p class="col-6 text-right text-lg-left">United States</p>
                </div>
                <div class="row">
                    <p class="col-6">Postcode</p>
                    <p class="col-6 text-right text-lg-left">36952</p>
                </div>
            </div>
        </div>
    </section>
    <section class="container mb-5">
        <div class="row">
            <div class="col-12 bg-lightgrey margin-your-order">
                <h2 class="mt-3 pb-3pr border-bottom">Your order</h2>
                <div class="row d-flex mt-4pr">
                    <p class="col-6">Product</p>
                    <p class="col-6 text-right">Total</p>
                </div>
                <div class="row d-flex">
                    <p class="col-5">Egypt Travel Guide</p>
                    <p class="col-2 text-right">X 01</p>
                    <p class="col-5 text-right">€ 15,00</p>
                </div>
                <div class="row d-flex">
                    <p class="col-5">Egypt Travel Guide</p>
                    <p class="col-2 text-right">X 01</p>
                    <p class="col-5 text-right">€ 15,00</p>
                </div>
                <div class="row d-flex">
                    <p class="col-5">Egypt Travel Guide</p>
                    <p class="col-2 text-right">X 01</p>
                    <p class="col-5 text-right">€ 15,00</p>
                </div>
                <div class="row d-flex mt-4pr">
                    <p class="col-6"><b>Subtotal</b></p>
                    <p class="col-6 text-right">€ 45,00</p>
                </div>
                <div class="row d-flex mt-4pr">
                    <p class="col-6"><b>Shipping</b></p>
                    <p class="col-6 text-right">Flat rate  € 5,00</p>
                </div>
                <div class="row d-flex mt-4pr">
                    <p class="col-6"><b>Total</b></p>
                    <p class="col-6 text-right"><b>€ 50,00</b></p>
                </div>
            </div>
        </div>
    </section>
@endsection


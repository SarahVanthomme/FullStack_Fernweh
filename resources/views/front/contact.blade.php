@extends('layouts.front')
@section('title')
    Checkout
@endsection
@include('partials.header-dark')
@section('content')
    <h1 class="ml-5 mt-5">Contact us</h1>
    <section class="m-5 p-5bg-light col-6">
        <form action="{{action('ContactController@store')}}" method="POST">
            @csrf
            <div class="form-group d-flex flex-column justify-content-center text-center">
                <input type="text" class="form-control form-control-sm" id="contact_name" name="name" placeholder="Name">
            </div>
            <div class="form-group d-flex flex-column justify-content-center text-center">
                <input type="email" class="form-control form-control-sm" id="contact_email" name="email" placeholder="Email">
            </div>
            <div class="form-group d-flex flex-column justify-content-center text-center">
               <textarea rows="6" cols="80" class="form-control form-control-sm" name="message" id="message" placeholder="Your Message"></textarea>
            </div>
            <div>
                <a href="{{ env('URL') }}/message-sent" class="btn btn-light"> Send </a>
            </div>
        </form>
    </section>
@endsection

@extends('layouts.front')
@section('title')
    Checkout
@endsection
@include('partials.header-dark')
@section('content')
    <h1 class="mt-5 text-center">Contact us</h1>
    <section class="m-5 p-5bg-light row d-flex justify-content-center">
        <form action="{{action('ContactController@store')}}" method="POST">
            @csrf
            <div class="form-group d-flex flex-column justify-content-center text-center">
                <input type="text" class="form-control form-control-lg" id="contact_name" name="name" placeholder="Name">
            </div>
            <div class="form-group d-flex flex-column justify-content-center text-center">
                <input type="email" class="form-control form-control-lg" id="contact_email" name="email" placeholder="Email">
            </div>
            <div class="form-group d-flex flex-column justify-content-center text-center">
               <textarea rows="6" cols="80" class="form-control form-control-lg" name="message" id="message" placeholder="Your Message"></textarea>
            </div>
            <div class="d-flex justify-content-center">
                <a href="{{ env('URL') }}/message-sent" class="btn btn-light btn-lg"> Send </a>
            </div>
        </form>
    </section>
@endsection

@extends('layouts.front')
@section('title')
    Checkout
@endsection
@include('partials.header-dark')
@section('content')
    <h1 class="mt-5 text-center">{{$translation->where('name','ContactUsTitle')->value('body')}}</h1>
    <section class="m-5 p-5bg-light row d-flex justify-content-center">
        <form action="{{action('ContactController@store')}}" method="POST">
            @csrf
            <div class="form-group d-flex flex-column justify-content-center text-center">
                <input type="text" class="form-control form-control-lg" id="contact_name" name="name" placeholder="{{$translation->where('name','Name')->value('body')}}">
            </div>
            <div class="form-group d-flex flex-column justify-content-center text-center">
                <input type="email" class="form-control form-control-lg" id="contact_email" name="email" placeholder="{{$translation->where('name','Email')->value('body')}}">
            </div>
            <div class="form-group d-flex flex-column justify-content-center text-center">
               <textarea rows="6" cols="80" class="form-control form-control-lg" name="message" id="message" placeholder="{{$translation->where('name','YourMessage')->value('body')}}"></textarea>
            </div>
            <div class="d-flex justify-content-center">
                <a href="{{ env('URL') }}/message-sent" class="btn btn-light btn-lg"> {{$translation->where('name','Send')->value('body')}} </a>
            </div>
        </form>
    </section>
@endsection

@extends('layouts.front')
@section('title')
    My Account
@endsection
@include('partials.header-dark')
@section('content')
    <h1 class="mt-5 text-center">My Account</h1>
    <h5 class="text-center">
        @if(Auth::user()->role->name == 'admin' && Auth::user()->is_active == '1')
            <a class="text-decoration-none" href="{{ route('admin') }}">GO TO CMS</a>
        @else
        @endif
    </h5>
    <section class="row d-flex justify-content-center">
    <div class="m-5 row d-flex justify-content-center text-center">
        {!! Form::open(['method'=>'POST', 'action'=>'FrontendController@updateAccount','files'=>true]) !!}
        @csrf
        <div class="form-group text-center mb-5">
            {!! Form::label('name', 'Name',['class'=>'font-large'] )!!}
            {!! Form::text('name', Auth::user()->name,['class'=>'form-control form-control-lg col-12 border-checkout bg-light w-30rem']) !!}
        </div>
        <div class="form-group text-center mb-5">
            {!! Form::label('email', 'Email',['class'=>'font-large'] ) !!}
            {!! Form::text('email', Auth::user()->email,['class'=>'form-control form-control-lg col-12 border-checkout bg-light']) !!}
        </div>
        <div class="form-group text-center mb-5">
            {!! Form::label('address', 'Address',['class'=>'font-large'] ) !!}
            {!! Form::text('address', Auth::user()->address,['class'=>'form-control form-control-lg col-12 border-checkout bg-light']) !!}
        </div>
        <div class="form-group text-center mb-5">
            {!! Form::label('country', 'Country',['class'=>'font-large'] ) !!}
            {!! Form::text('country', Auth::user()->country,['class'=>'form-control form-control-lg col-12 border-checkout bg-light']) !!}
        </div>
        <button class="btn btn-lg btn-light text-center">save</button>
        <p class="text-center">click save to update your information</p>

        {!! Form::close() !!}
    </div>





</section>
@endsection

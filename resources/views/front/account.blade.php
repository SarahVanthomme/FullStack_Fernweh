@extends('layouts.front')
@section('title')
    My Account
@endsection
@include('partials.header-dark')

@section('content')
<section class="container-fluid pt-3pr">
    <h1 class="ml-5">My Account</h1>
    <div class="p-5 m-5 col-6" style="background-color: lightgrey">
        {!! Form::open(['method'=>'POST', 'action'=>'FrontendController@updateAccount','files'=>true]) !!}
        @csrf
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', Auth::user()->name,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', Auth::user()->email,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('address', 'Address:') !!}
            {!! Form::text('address', Auth::user()->address,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('country', 'Country:') !!}
            {!! Form::text('country', Auth::user()->country,['class'=>'form-control']) !!}
        </div>
        <p>click save to update your information</p>
        <button class="btn btn-light">save</button>
    </div>

</section>
@endsection

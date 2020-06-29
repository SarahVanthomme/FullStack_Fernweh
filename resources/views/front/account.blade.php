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
    <div class="col-10 offset-1 text-center">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 col-sm-12">
                <h3 class="mt-5">My info</h3>
                {!! Form::open( ['method'=>'PATCH', 'action'=>['FrontendController@frontUserUpdate', Auth::user()],'files'=>true]) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', Auth::user()->name,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Email:') !!}
                    {!! Form::text('email', Auth::user()->email,['class'=>'form-control']) !!}
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="form-group mr-3">
                            {!! Form::submit('Update',['class' =>'btn btn-dark']) !!}
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <div class="col-10 offset-1 text-center my-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 col-sm-12 d">
                <h3>My Address</h3>

                @if(Auth::user()->address_id == '')
                    {!! Form::open(['method'=>'POST', 'action'=>'FrontendController@frontPostAddress']) !!}
                    <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">
                    <div class="form-group">
                        {!! Form::label('street', 'Street:') !!}
                        {!! Form::text('street', null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('number', 'Number:') !!}
                        {!! Form::text('number', null,['class'=>'form-control']) !!}
                    </div>

                    <div class="row">
                        <div class="col-12 d-flex">
                            <div class="form-group mr-3">
                                {!! Form::submit('Save my address',['class' =>'btn btn-outline-warning rounded-0']) !!}
                            </div>

                            {!! Form::close() !!}
                            @else
                                <form action="{{route('frontUpdate', 'update')}}" method="post">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="address_id" id="address_id"
                                           value="{{Auth::user()->address->id}}">
                                    <div class="form-group">
                                        {!! Form::label('street', 'Street:') !!}
                                        {!! Form::text('street', Auth::user()->address->street,['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('number', 'Number:') !!}
                                        {!! Form::text('number', Auth::user()->address->number,['class'=>'form-control']) !!}
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center">
                                            <div class="form-group mr-3">
                                                {!! Form::submit('Update address',['class' =>'btn btn-dark']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection

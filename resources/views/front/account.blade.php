@extends('layouts.front')
@section('title')
    My Account
@endsection
@include('partials.header-dark')
{{--@section('content')
    <h1 class="mt-5 text-center">My Account</h1>
    <h5 class="text-center">
        @if(Auth::user()->role->name == 'admin' && Auth::user()->is_active == '1')
            <a class="text-decoration-none" href="{{ route('admin') }}">GO TO CMS</a>
        @else
        @endif
    </h5>
    <section class="row d-flex justify-content-center">
        <div class="m-5 row d-flex justify-content-center text-center">
            --}}{{--        User updaten--}}{{--
            {!! Form::open( ['method'=>'PATCH', 'action'=>['FrontendController@frontUserUpdate', Auth::user()],'files'=>true]) !!}
            @csrf
            <div class="form-group text-center mb-5">
                {!! Form::label('name', 'Name',['class'=>'font-large'] )!!}
                {!! Form::text('name', Auth::user()->name,['class'=>'form-control form-control-lg col-12 border-checkout bg-light w-30rem']) !!}
            </div>
            <div class="form-group text-center mb-5">
                {!! Form::label('email', 'Email',['class'=>'font-large'] ) !!}
                {!! Form::text('email', Auth::user()->email,['class'=>'form-control form-control-lg col-12 border-checkout bg-light']) !!}
            </div>
            --}}{{--<div class="d-flex">
                <div class="form-group text-center mb-5">
                    {!! Form::label('street', 'Street',['class'=>'font-large'] ) !!}
                    {!! Form::text('street', Auth::user()->address->street,['class'=>'form-control form-control-lg col-12 border-checkout bg-light']) !!}
                </div>
                <div class="form-group text-center mb-5" style="margin-left: 2rem;">
                    {!! Form::label('no', 'No',['class'=>'font-large'] ) !!}
                    {!! Form::text('no', Auth::user()->address->number,['class'=>'form-control form-control-lg col-12 border-checkout bg-light']) !!}
                </div>
            </div>--}}{{--
            {!! Form::close() !!}


            @if(Auth::user()->address_id != '')
                --}}{{--        Adress updaten--}}{{--

                <form action="{{route('updateinput', 'update')}}" method="post">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="address_id" id="address_id" value="{{Auth::user()->address->id}}">

                    --}}{{--    street    --}}{{--
                    <div class="form-group">
                        {!! Form::label('street', 'Street:') !!}
                        {!! Form::text('street', Auth::user()->address->street,['class'=>'form-control']) !!}
                    </div>
                    <div class="row">

                        --}}{{--    number    --}}{{--
                        <div class="form-group col-8">
                            {!! Form::label('number', 'Number:') !!}
                            {!! Form::text('number', Auth::user()->address->number,['class'=>'form-control  my-0']) !!}
                        </div>
                        --}}{{--                    --}}{{----}}{{--    bus    --}}{{----}}{{--
                                            <div class="form-group col-4">
                                                {!! Form::label('bus', 'Bus:') !!}
                                                {!! Form::text('bus',Auth::user()->address->bus,['class'=>'form-control my-0']) !!}
                                            </div>--}}{{--
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex">
                            <div class="form-group mr-3">
                                {!! Form::submit('Update address',['class' =>'btn btnFilters rounded-0']) !!}
                            </div>
                        </div>
                    </div>
                </form>
            @else
                --}}{{--       Address aanmaken --}}{{--

                {!! Form::open(['method'=>'POST', 'action'=>'FrontendController@frontPostAddress']) !!}
                <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">
                --}}{{--    street    --}}{{--
                <div class="form-group">
                    {!! Form::label('street', 'Street:') !!}
                    {!! Form::text('street', null,['class'=>'form-control']) !!}
                </div>
                --}}{{--    number    --}}{{--
                <div class="form-group">
                    {!! Form::label('number', 'Number:') !!}
                    {!! Form::text('number', null,['class'=>'form-control']) !!}
                </div>
                <div class="row">
                    <div class="col-12 d-flex">
                        <div class="form-group mr-3">
                            {!! Form::submit('Save address',['class' =>'btn btn-outline-warning rounded-0']) !!}
                        </div>
                    </div>
                </div>

                {!! Form::close() !!}
            @endif



            --}}{{--<div class="form-group text-center mb-5">
                {!! Form::label('country', 'Country',['class'=>'font-large'] ) !!}
                {!! Form::text('country', Auth::user()->country,['class'=>'form-control form-control-lg col-12 border-checkout bg-light']) !!}
            </div>--}}{{--
            {!! Form::submit(' Save ', ['class' => 'btn btn-lg btn-light text-center']) !!}

                    <button class="btn btn-lg btn-light text-center">save</button>
            <p class="text-center">click save to update your information</p>

            {!! Form::close() !!}
        </div>


    </section>
@endsection--}}



@section('content')
    <h1 class="mt-5 text-center">My Account</h1>
    <h5 class="text-center">
        @if(Auth::user()->role->name == 'admin' && Auth::user()->is_active == '1')
            <a class="text-decoration-none" href="{{ route('admin') }}">GO TO CMS</a>
        @else
        @endif
    </h5>
    <div class="col-10 offset-1">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h3>Personal info</h3>
{{--                //alles van de user--}}
                {{--                Enkel update nodig, user is aangemeld, je neemt de info van de aangemelde user--}}

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
                    <div class="col-12 d-flex">
                        <div class="form-group mr-3">
                            {!! Form::submit('Update user',['class' =>'btn btnFilters rounded-0']) !!}
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <h3>Address info</h3>

                @if(Auth::user()->address_id == '')
{{--           Hier kijken we in de geknde user als het address_id NIET ingevuld is        --}}
                    {{--        Als de user geen address heeft, dan moet er 1 worden aangemaakt. ->POST methode            --}}
                    {!! Form::open(['method'=>'POST', 'action'=>'FrontendController@frontPostAddress']) !!}
                    <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">
                    {{--    street    --}}
                    <div class="form-group">
                        {!! Form::label('street', 'Street:') !!}
                        {!! Form::text('street', null,['class'=>'form-control']) !!}
                    </div>
                    {{--    number    --}}
                    <div class="form-group">
                        {!! Form::label('number', 'Number:') !!}
                        {!! Form::text('number', null,['class'=>'form-control']) !!}
                    </div>

                    <div class="row">
                        <div class="col-12 d-flex">
                            <div class="form-group mr-3">
                                {!! Form::submit('Save address',['class' =>'btn btn-outline-warning rounded-0']) !!}
                            </div>

                            {!! Form::close() !!}
                            @else
                                {{--    Heeft de user wel al een address, geef dan het address weer (maak het zichtbaar) en maak het mogelijk om het aan te passen     -> PATCH          --}}

                            <form action="{{route('frontUpdate', 'update')}}" method="post">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="address_id" id="address_id" value="{{Auth::user()->address->id}}">
                                {{--         Vraag op wat ingevuld staat bij de user als address_id zodat je dit later in je controller ook in je user tabel kan weisigen            --}}
                                {{--    street    --}}
                                <div class="form-group">
                                    {!! Form::label('street', 'Street:') !!}
                                    {!! Form::text('street', Auth::user()->address->street,['class'=>'form-control']) !!}
                                </div>
                                <div class="row">

                                    {{--    number    --}}
                                    <div class="form-group col-8">
                                        {!! Form::label('number', 'Number:') !!}
                                        {!! Form::text('number', Auth::user()->address->number,['class'=>'form-control  my-0']) !!}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex">
                                        <div class="form-group mr-3">
                                            {!! Form::submit('Update address',['class' =>'btn btnFilters rounded-0']) !!}
                                        </div>
                                    </div>
                                </div>
                                {{--       Update alles, zowel het lege formulier met de post als het reeds ingevulde formulier met patch, de if functie kiest welkeen van de twee het is.            --}}
                            </form>
                            @endif
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.front')
@section('title')
    Checkout
@endsection
@include('partials.header-dark')
@section('content')
    <section class="container-fluid pb-4pr px-2">
        <div class="row d-flex justify-content-center pt-4pr pb-4pr">
            <h1>{{$translation->where('name','CheckOut')->value('body')}}</h1>
        </div>
        <div class="row mx-1">
            <h2 class="col-12">{{$translation->where('name','BillingDetails')->value('body')}}</h2>
            <div class="col-12 col-md-7">
                {!! Form::open( ['method'=>'PATCH', 'action'=>['FrontendController@frontUserUpdate', Auth::user()],'files'=>true]) !!}
                <div class="d-flex justify-content-between">
                    <div style="width: 20rem;">
                        {!! Form::text('name', Auth::user()->name,['class'=>'form-control form-control-lg']) !!}
                    </div>
                    <div style="width: 34rem;">
                        {!! Form::text('email', Auth::user()->email,['class'=>'form-control form-control-lg']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
                <form action="{{route('frontUpdate', 'update')}}" method="post">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="address_id" id="address_id" value="{{Auth::user()->address->id}}">
                    <div class="d-flex justify-content-between">
                        <div style="width: 20rem;">
                            {!! Form::text('street', Auth::user()->address->street,['class'=>'form-control form-control-lg']) !!}
                        </div>
                        <div style="width: 34rem;">
                            {!! Form::text('number', Auth::user()->address->number,['class'=>'form-control form-control-lg']) !!}
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-12 col-md-5 bg-lightgrey margin-your-order mt-0">
                @if(Session::has('cart'))
                <h2 class="mt-3 pb-3pr border-bottom">{{$translation->where('name','YourOrder')->value('body')}}</h2>
                <div class="row d-flex mt-4pr mb-3 border-bottom font-large">
                    <p class="col-6 font-xl">{{$translation->where('name','Product')->value('body')}}</p>
                    <p class="col-6 text-right font-xl">{{$translation->where('name','Total')->value('body')}}</p>
                </div>
                @if($cart)
                    @foreach($cart as $item)
                <div class="row d-flex">
                    <div class="col-5">
                        <p class="font-large">{{$item['product_name']}}</p>
                        <img width="100px" height="170px" src="{{$item['product_image'] ? asset('/images/products/' . $item['product_image']) : 'GEEN FOTO'}}" alt="">
                    </div>
                    <form class="col-2" method="POST" action="{{action('FrontendController@updateQuantity')}}" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <input class="form-control form-control-lg" type="number" name="quantity" value="{{$item['quantity']}}" min="1" max="100">
                        <input class="form-control form-control-sm" type="hidden" name="id" value="{{$item['product_id']}}">
                        <button class="btn btn-link btn-sm mt-2 text-decoration-none text-warning font-large p-0" type="submit">{{$translation->where('name','Update')->value('body')}}</button>
                        <a class="text-danger text-decoration-none font-large" href="{{route('removeItem', $item['product_id'])}}">{{$translation->where('name','Remove')->value('body')}}</a>
                    </form>
                    <p class="col-5 text-right font-large">€ {{$item['product_price']*$item['quantity']}}</p>
                </div>
                @endforeach
                    @else
                    <p class="font-large">{{$translation->where('name','CartEmpty')->value('body')}}</p>
                    @endif
                <div class="row d-flex mt-5">
                    <p class="col-6 font-large"><b>{{$translation->where('name','Subtotal')->value('body')}}</b></p>
                    <p class="col-6 text-right font-large">€ {{Session::get('cart')->totalPrice}}</p>
                </div>
                <div class="row d-flex mt-4pr">
                    <p class="col-6 font-large"><b>{{$translation->where('name','Shipping')->value('body')}}</b></p>
                    <p class="col-6 text-right font-large"><span class="pr-2">{{$translation->where('name','FlatRate')->value('body')}}</span>{{$translation->where('name','€5')->value('body')}}</p>
                </div>
                <div class="row d-flex mt-4pr">
                    <p class="col-6 font-large"><b>{{$translation->where('name','Total')->value('body')}}</b></p>
                    <p class="col-6 text-right font-large"><b>€ {{(Session::get('cart')->totalPrice)+5}}</b></p>
                </div>
                @endif

                <div class="row d-flex align-items-center pt-4pr">
                    <input type="checkbox" id="confirm" class="col-1">
                    <p class="mb-0 col-11 text font-large">{{$translation->where('name','ReadAndAccept')->value('body')}}<a class="text-decoration-none" href="#">{{$translation->where('name','TermsAndConditions')->value('body')}}</a></p>
                </div>
                <div class="row d-flex justify-content-center pt-4pr pb-4pr">
                    <a href="{{ env('URL') }}/payment" id="reset" class="btn btn-lg btn-dark col-11 active" role="button" aria-pressed="true">{{$translation->where('name','ButtonProceedPayment')->value('body')}}</a>
                </div>
            </div>
        </div>
    </section>

    <script>
        $('#reset').click(function () {
            if (!$('#confirm').is(':checked')) {
                alert('not checked');
            }
        });
    </script>
@endsection


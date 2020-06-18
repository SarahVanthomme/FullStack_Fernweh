@extends('layouts.front')
@section('title')
    Destinations
@endsection
@section('content')<div>
        @foreach($banners as $banner)
            <div>{{$banner->name}}</div>
        @endforeach
</div>
@endsection

//dit gebruiken in de shop page om de banners bovenaan weer te geven en in frontendcontroller aanpassen + web.php aanpassen

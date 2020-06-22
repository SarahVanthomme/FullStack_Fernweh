@extends("layouts.admin")


@section('content')

@if($addresses)
    @foreach($addresses as $address)
        <tr>
            <td>{{$address->id}}</td>
            <td>{{$address->user->name}}</td>
            <td>{{$address->street}}</td>
            <td>{{$address->number}}</td>
    @endforeach
@endif


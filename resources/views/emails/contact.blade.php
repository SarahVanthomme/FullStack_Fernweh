@component('mail::message')
    <h1>Message from Fernweh</h1>
    <p>Name:</p> {{$data['name']}}
    <p>Email: </p>{{$data['email']}}
    <p>Message:</p> {{$data['message']}}
@endcomponent


@extends("layouts.admin")
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="row bg-white py-3">
                    <h2 class="mt-3 pl-3 text-secondary"><small><b>EDIT ADDRESS</b></small></h2>
                </div>
                <div class="col-8 my-4">
                    @include('includes.form_error')
                    {!! Form::model($address, ['method'=>'PATCH', 'action'=>['AdminAddressesController@update', $address->id],'files'=>true]) !!}
                    <div class="form-group">
                        {!! Form::label('client', 'Client:') !!}
                        {!! Form::text('client', $address->user->name,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('street', 'Street:') !!}
                        {!! Form::text('street', $address->street,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('number', 'Number:') !!}
                        {!! Form::text('number', $address->number,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Update address', ['class' => 'btn btn-outline-warning']) !!}
                    </div>
                    {!! Form::close() !!}
                    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminAddressesController@destroy', $address->id] ]) !!}
                    <div class="form-group">
                        {!! Form::submit('Delete address', ['class' => 'btn btn-outline-danger']) !!}
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </main>
        <footer class="py-4 bg-white mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-center small">
                    <div class="text-muted">Copyright &copy; Fernweh 2020</div>
                </div>
            </div>
        </footer>
    </div>
@endsection

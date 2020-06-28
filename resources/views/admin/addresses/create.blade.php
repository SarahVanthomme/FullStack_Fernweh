@extends("layouts.admin")
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="row bg-white py-3">
                    <h2 class="mt-3 pl-3 text-secondary"><small><b>CREATE ADDRESS</b></small></h2>
                </div>
                <div class="col-8 my-4">
                    {!! Form::open(['method'=>'POST', 'action'=>'AdminAddressesController@store','files'=>true]) !!}
                    <div class="form-group">
                        {!! Form::label('client', 'Client:') !!}
                        {!! Form::text('client', null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('street', 'Street:') !!}
                        {!! Form::text('street', null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('number', 'Number:') !!}
                        {!! Form::text('number', null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Create category', ['class' => 'btn btn-outline-primary']) !!}
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

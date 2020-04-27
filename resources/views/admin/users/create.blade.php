@extends("layouts.admin")


@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="row bg-white py-3">
                    <h2 class="mt-3 pl-3 text-secondary"><small><b>CREATE USER</b></small></h2>
                </div>

    <div class="col-8 my-4">
        {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store','files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('address', 'Street + nr:') !!}
            {!! Form::text('address', null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('country', 'Country:') !!}
            {!! Form::text('country', null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('is_active', 'Status:') !!}
            {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active') , 0 , ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
           {!! Form::label('role_id', 'Role:') !!}
            {!! Form::select('role_id', [''=>'Choose Options'] + $roles , null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password',['class'=>'form-control']) !!}
        </div>
        {{--<div class="form-group">
            {!! Form::label('photo_id', 'Photo:') !!}
            {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
        </div>--}}
        <div class="form-group">
            {!! Form::submit('Create user', ['class' => 'btn btn-outline-primary']) !!}
        </div>
        {!! Form::close() !!}
        @include('includes.form_error');

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

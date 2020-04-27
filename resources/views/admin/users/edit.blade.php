@extends("layouts.admin")


@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="row bg-white py-3">
                    <h2 class="mt-3 pl-3 text-secondary"><small><b>EDIT USER</b></small></h2>
                </div>
    <div class="col-8 my-4">
        <div class="row">
            <div class="col-12">
                @include('includes.form_error')
                {!! Form::open(['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id],'files'=>true]) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', $user->name,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'E-mail:') !!}
                    {!! Form::text('email', $user->email,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('role_id', 'Role:') !!}
                    {!! Form::select('role_id', [''=>'Choose options'] + $roles , $user->role_id ,
                    ['class'=>'form-control'])
                     !!}
                </div>
                <div class="form-group">
                    {!! Form::label('is_active', 'Status:') !!}
                    {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active') , $user->is_active,
                    ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'Password:') !!}
                    {!! Form::password('password',['class'=>'form-control']) !!}
                </div>
               {{-- <div class="form-group">
                    {!! Form::label('photo_id', 'Photo:') !!}
                    {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
                </div>--}}
                <div class="row">
                    <div class="col-12 d-flex">
                        <div class="form-group mr-3">
                            {!! Form::submit('Update user', ['class' => 'btn btn-outline-warning']) !!}
                        </div>
                        {!! Form::close() !!}

                        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id] ]) !!}
                        <div class="form-group">
                            {!! Form::submit('Delete user', ['class' => 'btn btn-outline-danger']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            {{--<div class="col-4">
                <img class="img-fluid" src="{{$user->photo ? asset($user->photo->file) : 'http://place-hold.it/400x400'}}"
                     alt="">
            </div>--}}
        </div>
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

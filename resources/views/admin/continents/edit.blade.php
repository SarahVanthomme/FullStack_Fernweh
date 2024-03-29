@extends("layouts.admin")


@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="row bg-white py-3">
                    <h2 class="mt-3 pl-3 text-secondary"><small><b>EDIT CONTINENT</b></small></h2>
                </div>
                <div class="col-8 my-4">
                    <div class="row">
                        <div class="col-12">
                            @include('includes.form_error')
                            {!! Form::model($continent, ['method'=>'PATCH', 'action'=>['AdminContinentsController@update', $continent->id],'files'=>true]) !!}
                            <div class="form-group">
                                {!! Form::label('name', 'Name:') !!}
                                {!! Form::text('name', $continent->name,['class'=>'form-control']) !!}
                            </div>
                            <div class="col-4 my-4">
                                <div class="form-group">
                                    <img class="img-thumbnail mb-3" src="{{$continent->photo ? asset('/images/continents/' . $continent->photo->file) : 'NO PHOTO'}}" alt="">
                                    <input type="file" class="form-control-file" id="photo_id" name="photo_id">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex">
                                    <div class="form-group mr-3">
                                        {!! Form::submit('Update continent', ['class' => 'btn btn-outline-warning']) !!}
                                    </div>
                                    {!! Form::close() !!}

                                    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminContinentsController@destroy', $continent->id] ]) !!}
                                    <div class="form-group">
                                        {!! Form::submit('Delete continent', ['class' => 'btn btn-outline-danger']) !!}
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
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

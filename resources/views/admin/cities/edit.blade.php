@extends("layouts.admin")


@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="row bg-white py-3">
                    <h2 class="mt-3 pl-3 text-secondary"><small><b>EDIT CITY</b></small></h2>
                </div>
                <div class="col-8 my-4">
                    <div class="row">
                        <div class="col-12">
                            @include('includes.form_error')
                            {!! Form::open(['method'=>'PATCH', 'action'=>['AdminCitiesController@update', $city->id],'files'=>true]) !!}
                            <div class="form-group">
                                {!! Form::label('name', 'Name:') !!}
                                {!! Form::text('name', $city->name,['class'=>'form-control']) !!}
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex">
                                    <div class="form-group mr-3">
                                        {!! Form::submit('Update city', ['class' => 'btn btn-outline-warning']) !!}
                                    </div>
                                    {!! Form::close() !!}

                                    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCitiesController@destroy', $city->id] ]) !!}
                                    <div class="form-group">
                                        {!! Form::submit('Delete city', ['class' => 'btn btn-outline-danger']) !!}
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

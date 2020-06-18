@extends("layouts.admin")
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="row bg-white py-3">
                    <h2 class="mt-3 pl-3 text-secondary"><small><b>ADD BANNER</b></small></h2>
                </div>

                <div class="col-8 my-4">
                    {!! Form::open(['method'=>'POST', 'action'=>'IndexBannerController@store','files'=>true]) !!}
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        {!! Form::label('name', 'Name:') !!}
                        {!! Form::text('name', null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('body', 'Body:') !!}
                        {!! Form::textarea('body', null,['class'=>'form-control']) !!}
                    </div>
                    {{--<div class="d-flex">
                    <div class="form-group">
                        {!! Form::label('type', 'Image') !!}
                        {!! Form::radio('type', null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group ml-4">
                        {!! Form::label('type', 'Video') !!}
                        {!! Form::radio('type', null,['class'=>'form-control']) !!}
                    </div>
                    </div>--}}
                    <div class="form-group">
                        <label for="photo_id">File:</label>
                        <input type="file" class="form-control-file" id="photo_id" name="photo_id">
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Add banner', ['class' => 'btn btn-outline-primary']) !!}
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

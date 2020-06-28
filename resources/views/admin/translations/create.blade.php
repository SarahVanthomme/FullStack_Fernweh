@extends("layouts.admin")
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="row bg-white py-3">
                    <h2 class="mt-3 pl-3 text-secondary"><small><b>ADD CONTENT</b></small></h2>
                </div>

                <div class="col-8 my-4">
                    {!! Form::open(['method'=>'POST', 'action'=>'TranslationsController@store','files'=>true]) !!}
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        {!! Form::label('name', 'Title:') !!}
                        {!! Form::text('name', null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('body', 'Content:') !!}
                        {!! Form::textarea('body', null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Add content', ['class' => 'btn btn-outline-primary']) !!}
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

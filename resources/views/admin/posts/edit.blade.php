@extends("layouts.admin")
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="row bg-white py-3">
                        <h2 class="mt-3 pl-3 text-secondary"><small><b>EDIT POST</b></small></h2>
                </div>

                <div class="col-8 my-4">
                    @include('includes.form_error')
                    {!! Form::model($post,['method'=>'PATCH', 'action'=>['AdminPostsController@update', $post->id],'files'=>true]) !!}
                    <div class="form-group">
                        {!! Form::label('title', 'Title:') !!}
                        {!! Form::text('title', null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('category_id', 'Category:') !!}
                        {!! Form::select('category_id', [''=>'Choose Category'] + $categories, null, ['class'=>'form-control']) !!}
                    </div>
                    {{--
                                        <div class="form-group">
                                            {!! Form::label('photo_id', 'Photo:') !!}
                                            {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
                                        </div>
                    --}}
                    <div class="form-group">
                        {!! Form::label('body', 'Body:') !!}
                        {!! Form::textarea('body', null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Update post', ['class' => 'btn btn-outline-primary']) !!}
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

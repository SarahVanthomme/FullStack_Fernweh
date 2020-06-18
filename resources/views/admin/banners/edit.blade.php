@extends("layouts.admin")
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="row bg-white py-3">
                    <h2 class="mt-3 pl-3 text-secondary"><small><b>EDIT BANNER</b></small></h2>
                </div>
                <div class="row ml-1">
                    <div class="col-12 my-4">
                        @include('includes.form_error')
                        {!! Form::model($banner,['method'=>'PATCH', 'action'=>['BannerController@update', $banner->id],'files'=>true]) !!}
                        @csrf
                        <div class="row">
                            <div class="col-7">
                                <div class="form-group">
                                    {!! Form::label('name', 'Name:') !!}
                                    {!! Form::text('name', null,['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('continent', 'Continent:') !!}
                                    <select name="continent_id" class="form-control">
                                        <option value="" disabled selected>Choose continent</option>
                                        @foreach($continents as $continent)
                                            @if($banner->continent_id == $continent->id)
                                                <option selected value="{{$continent->id}}">{{$continent->name}}</option>
                                            @else
                                                <option value="{{$continent->id}}">{{$continent->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('body', 'Body:') !!}
                                    {!! Form::textarea('body', null,['class'=>'form-control']) !!}
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex">
                                        <div class="form-group mr-3">
                                            {!! Form::submit('Update banner', ['class' => 'btn btn-outline-warning']) !!}
                                        </div>
                                        {!! Form::close() !!}

                                        {!! Form::open(['method'=>'DELETE', 'action'=>['BannerController@destroy', $banner->id] ]) !!}
                                        <div class="form-group">
                                            {!! Form::submit('Delete banner', ['class' => 'btn btn-outline-danger']) !!}
                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 offset-1 my-4">
                                <div class="form-group">
                                    <img class="img-thumbnail mb-3" src="{{$banner->photo ? asset('/images/banners/' . $banner->photo->file) : 'NO PHOTO'}}" alt="">
                                    <input type="file" class="form-control-file" id="photo_id" name="photo_id">
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

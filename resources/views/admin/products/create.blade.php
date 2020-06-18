@extends("layouts.admin")
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="row bg-white py-3">
                    <h2 class="mt-3 pl-3 text-secondary"><small><b>ADD PRODUCT</b></small></h2>
                </div>

                <div class="col-8 my-4">
                    {!! Form::open(['method'=>'POST', 'action'=>'AdminProductsController@store','files'=>true]) !!}
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        {!! Form::label('name', 'Name:') !!}
                        {!! Form::text('name', null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('category', 'Category:') !!}
                        <select name="category_id" class="form-control">
                            <option value="" disabled selected>Choose category</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        {!! Form::label('continent', 'Continent:') !!}
                        <select name="continent_id" class="form-control">
                            <option value="" disabled selected>Choose continent</option>
                            @foreach($continents as $continent)
                                <option value="{{$continent->id}}">{{$continent->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        {!! Form::label('country', 'Country:') !!}
                        <select name="country_id" class="form-control">
                            <option value="" disabled selected>Choose country</option>
                            @foreach($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        {!! Form::label('city', 'City:') !!}
                        <select name="city_id" class="form-control">
                            <option value="" disabled selected>Choose city</option>
                            @foreach($cities as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        {!! Form::label('description', 'Description:') !!}
                        {!! Form::textarea('description', null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('price', 'Price:') !!}
                        <input class="form-control" type="number" name="price" step="0.05">
                    </div>

                    {{--<div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input">
                            <label class="custom-file-label">Choose file</label>
                        </div>
                    </div>--}}

                    <div class="form-group">
                        <label for="photo_id">Photo:</label>
                        <input type="file" class="form-control-file" id="photo_id" name="photo_id">
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Add product', ['class' => 'btn btn-outline-primary']) !!}
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

@extends("layouts.admin")
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="row bg-white py-3">
                    <h2 class="mt-3 pl-3 text-secondary"><small><b>EDIT PRODUCT</b></small></h2>
                </div>
                <div class="row ml-1">
                    <div class="col-12 my-4">
                        @include('includes.form_error')
                        {!! Form::model($product,['method'=>'PATCH', 'action'=>['AdminProductsController@update', $product->id],'files'=>true]) !!}
                        @csrf
                        <div class="row">
                            <div class="col-7">
                                <div class="form-group">
                                    {!! Form::label('name', 'Name:') !!}
                                    {!! Form::text('name', null,['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('category_id', 'Category:') !!}
                                    <select name="category_id" class="form-control">
                                        <option value="" disabled>Choose category</option>
                                        @foreach($categories as $category)
                                            @if($product->category_id == $category->id)
                                                <option selected value=" {{$category->id}}"> {{$category->name}}</option>
                                            @else
                                                <option value=" {{$category->id}}"> {{$category->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('continent', 'Continent:') !!}
                                    <select name="continent_id" class="form-control">
                                        <option value="" disabled selected>Choose continent</option>
                                        @foreach($continents as $continent)
                                            @if($product->continent_id == $continent->id)
                                                <option selected value="{{$continent->id}}">{{$continent->name}}</option>
                                            @else
                                                <option value="{{$continent->id}}">{{$continent->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('country', 'Country:') !!}
                                    <select name="country_id" class="form-control">
                                        <option value="" disabled selected>Choose country</option>
                                        @foreach($countries as $country)
                                            @if($product->country_id == $country->id)
                                                <option selected value="{{$country->id}}">{{$country->name}}</option>
                                            @else
                                                <option value="{{$country->id}}">{{$country->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('city_id', 'City:') !!}
                                    <select name="city_id" class="form-control">
                                        <option value="" disabled selected>Choose city</option>
                                        @foreach($cities as $city)
                                            @if($product->city_id == $city->id)
                                                <option selected value="{{$city->id}}">{{$city->name}}</option>
                                            @else
                                                <option value="{{$city->id}}">{{$city->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('description', 'Description:') !!}
                                    {!! Form::textarea('description', null,['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('bestseller', 'Bestseller:') !!}
                                    <select name="bestseller" class="form-control">
                                        <option value="" disabled selected>Choose yes or no</option>
                                        <option value="1">yes</option>
                                        <option value="0">no</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('price', 'Price:') !!}
                                    <input class="form-control" type="number" name="price" step="0.05" value="{{$product->price}}">
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex">
                                        <div class="form-group mr-3">
                                            {!! Form::submit('Update product', ['class' => 'btn btn-outline-warning']) !!}
                                        </div>
                                        {!! Form::close() !!}

                                        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminProductsController@destroy', $product->id] ]) !!}
                                        <div class="form-group">
                                            {!! Form::submit('Delete product', ['class' => 'btn btn-outline-danger']) !!}
                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 offset-1 my-4">
                                <div class="form-group">
                                    <img class="img-thumbnail mb-3" src="{{$product->photo ? asset('/images/products/' . $product->photo->file) : 'NO PHOTO'}}" alt="">
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

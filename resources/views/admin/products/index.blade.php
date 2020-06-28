@extends("layouts.admin")
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="row bg-white py-3">
                    <h2 class="mt-3 pl-3 text-secondary"><small><b>PRODUCTS</b></small></h2>
                </div>
                <div class="row my-4">
                    <div class="col-3">
                        <div class="card border-0 py-2">
                            <p class="mt-3 pl-3 text-secondary"><small><b>FILTER ON CONTINENTS</b></small></p>
                            <div class="card-body">
                                <a href="{{route('products.index')}}" class="badge badge-info text-light">All continents</a>
                                @foreach($continents as $continent)
                                    <a href="{{route('admin.productsPerContinent', $continent->id)}}" class="badge badge-info">{{$continent->name}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0 py-2">
                            <p class="mt-3 pl-3 text-secondary"><small><b>FILTER ON COUNTRIES</b></small></p>
                            <div class="card-body">
                                <a href="{{route('products.index')}}" class="badge badge-info text-light">All countries</a>
                                @foreach($countries as $country)
                                    <a href="{{route('admin.productsPerCountry', $country->id)}}" class="badge badge-info">{{$country->name}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0 py-2">
                            <p class="mt-3 pl-3 text-secondary"><small><b>FILTER ON CITIES</b></small></p>
                            <div class="card-body">
                                <a href="{{route('products.index')}}" class="badge badge-info text-light">All cities</a>
                                @foreach($cities as $city)
                                    <a href="{{route('admin.productsPerCity', $city->id)}}" class="badge badge-info">{{$city->name}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0 py-2">
                            <p class="mt-3 pl-3 text-secondary"><small><b>FILTER ON CATEGORIES</b></small></p>
                            <div class="card-body">
                                <a href="{{route('products.index')}}" class="badge badge-info text-light">All categories</a>
                                @foreach($categories as $category)
                                    <a href="{{route('admin.productsPerCategory', $category->id)}}" class="badge badge-info">{{$category->name}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row my-4">
                    <div class="col-12">
                        <div class="card border-0 py-2">
                            <div class="card-body">
                                <table class="table text-secondary thin">
                                    <thead class="table-borderless">
                                    <tr class="line-height-50">
                                        <th scope="col"></th>
                                        <th scope="col">IMAGE</th>
                                        <th scope="col">NAME</th>
                                        <th scope="col">DESCRIPTION</th>
                                        <th scope="col">CATEGORY</th>
                                        <th scope="col">CONTINENT</th>
                                        <th scope="col">COUNTRY</th>
                                        <th scope="col">CITY</th>
                                        <th scope="col">PRICE</th>
                                        <th scope="col">CREATED AT</th>
                                        <th scope="col">UPDATED AT</th>
                                        <th scope="col">ACTIONS</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($products)
                                        @foreach($products as $product)
                                            <tr class="line-height-50">
                                                <th scope="row">{{$product->id}}</th>
                                                <td><img height="60" src="{{$product->photo ? asset('/images/products/' . $product->photo->file) : 'NONE'}}" alt=""></td>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->description}}</td>
                                                <td>{{$product->category ? $product->category->name : 'NONE'}}</td>
                                                <td>{{$product->continent ? $product->continent->name : 'NONE'}}</td>
                                                <td>{{$product->country ? $product->country->name : 'NONE'}}</td>
                                                <td>{{$product->city ? $product->city->name : 'NONE'}}</td>
                                                <td>{{$product->price}}</td>
                                                <td>{{$product->created_at}}</td>
                                                <td>{{$product->updated_at}}</td>
                                                <td><a href="{{route('products.edit',$product->id)}}" class="btn btn-link text-warning text-decoration-none">Edit product</a></td>
                                                {!! Form::open(['method'=>'DELETE', 'action'=>['AdminProductsController@destroy', $product->id]]) !!}
                                                <td class="form-group">
                                                    {!! form::submit('Delete product', ['class'=>'btn btn-link text-danger text-decoration-none']) !!}
                                                </td>
                                                {!! Form::close() !!}
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                                <a href="{{route('products.create')}}" class="font-larger thin text-decoration-none text-blue">Add new products</a>
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

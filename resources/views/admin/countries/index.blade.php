@extends("layouts.admin")


@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="row bg-white py-3">
                    <h2 class="mt-3 pl-3 text-secondary"><small><b>COUNTRIES</b></small></h2>
                </div>
                <div class="row my-4">
                    <div class="col-12">
                        <div class="card border-0 py-2">
                            <div class="card-body">
                                <table class="table text-secondary thin">
                                    <thead class="table-borderless">
                                    <tr class="line-height-50">
                                        <th scope="col"></th>
                                        <th scope="col">NAME</th>
                                        <th scope="col">CREATED</th>
                                        <th scope="col">UPDATED</th>
                                        <th scope="col">ACTIONS</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($countries)
                                        @foreach($countries as $country)
                                            <tr class="line-height-50">
                                                <th scope="row">{{$country->id}}</th>
                                                <td>{{$country->name}}</td>
                                                <td>{{$country->created_at}}</td>
                                                <td>{{$country->updated_at}}</td>
                                                <td><a href="{{route('countries.edit',$country->id)}}" class="btn btn-link text-warning text-decoration-none">Edit country</a></td>
                                                {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCountriesController@destroy', $country->id]]) !!}
                                                <td class="form-group">
                                                    {!! form::submit('Delete country', ['class'=>'btn btn-link text-danger text-decoration-none']) !!}
                                                </td>
                                                {!! Form::close() !!}
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                                <a href="{{route('countries.create')}}" class="font-larger thin text-decoration-none text-blue">Add new country</a>
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

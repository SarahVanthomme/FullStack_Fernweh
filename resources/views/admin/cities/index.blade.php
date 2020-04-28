@extends("layouts.admin")


@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="row bg-white py-3">
                    <h2 class="mt-3 pl-3 text-secondary"><small><b>CITIES</b></small></h2>
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
                                    @if($cities)
                                        @foreach($cities as $city)
                                            <tr class="line-height-50">
                                                <th scope="row">{{$city->id}}</th>
                                                <td>{{$city->name}}</td>
                                                <td>{{$city->created_at}}</td>
                                                <td>{{$city->updated_at}}</td>
                                                <td><a href="{{route('cities.edit',$city->id)}}" class="btn btn-outline-warning rounded-pill w-50 mb-1">Edit city</a></td>
                                                {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCitiesController@destroy', $city->id]]) !!}
                                                <td class="form-group">
                                                    {!! form::submit('Delete city', ['class'=>'btn btn-outline-danger rounded-pill w-50 mb-1']) !!}
                                                </td>
                                                {!! Form::close() !!}
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                                <a href="{{route('cities.create')}}" class="font-larger thin text-decoration-none text-blue">Add new city</a>
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

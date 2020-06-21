@extends("layouts.admin")


@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="row bg-white py-3">
                    <h2 class="mt-3 pl-3 text-secondary"><small><b>CONTINENTS</b></small></h2>
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
                                        <th scope="col">CREATED</th>
                                        <th scope="col">UPDATED</th>
                                        <th scope="col">ACTIONS</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($continents)
                                        @foreach($continents as $continent)
                                            <tr class="line-height-50">
                                                <th scope="row">{{$continent->id}}</th>
                                                <td><img height="60" src="{{$continent->photo ? asset('/images/continents/' . $continent->photo->file) : 'NONE'}}" alt=""></td>
                                                <td>{{$continent->name}}</td>
                                                <td>{{$continent->created_at}}</td>
                                                <td>{{$continent->updated_at}}</td>
                                                <td><a href="{{route('continents.edit',$continent->id)}}" class="btn btn-link text-warning text-decoration-none">Edit continent</a></td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                                <a href="{{route('continents.create')}}" class="font-larger thin text-decoration-none text-blue">Add new continent</a>
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

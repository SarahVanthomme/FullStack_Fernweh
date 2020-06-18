@extends("layouts.admin")
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="row bg-white py-3">
                    <h2 class="mt-3 pl-3 text-secondary"><small><b>INDEX BANNERS</b></small></h2>
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
                                        <th scope="col">BODY</th>
{{--                                        <th scope="col">TYPE</th>--}}
                                        <th scope="col">CREATED AT</th>
                                        <th scope="col">UPDATED AT</th>
                                        <th scope="col">ACTIONS</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($covers)
                                        @foreach($covers as $cover)
                                            <tr class="line-height-50">
                                                <th scope="row">{{$cover->id}}</th>
                                                <td><img height="60" src="{{$cover->photo ? asset('/images/index/' . $cover->photo->file) : 'NONE'}}" alt=""></td>
                                                <td>{{$cover->name}}</td>
                                                <td>{{$cover->body}}</td>
{{--                                                <td>{{$cover->type}}</td>--}}
                                                <td>{{$cover->created_at}}</td>
                                                <td>{{$cover->updated_at}}</td>
                                                <td><a href="{{route('index-banners.edit',$cover->id)}}" class="btn btn-link text-warning text-decoration-none">Edit banner</a></td>
                                                {!! Form::open(['method'=>'DELETE', 'action'=>['IndexBannerController@destroy', $cover->id]]) !!}
                                                <td class="form-group">
                                                    {!! form::submit('Delete banner', ['class'=>'btn btn-link text-danger text-decoration-none']) !!}
                                                </td>
                                                {!! Form::close() !!}
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                                <a href="{{route('index-banners.create')}}" class="font-larger thin text-decoration-none text-blue">Add new banner</a>
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

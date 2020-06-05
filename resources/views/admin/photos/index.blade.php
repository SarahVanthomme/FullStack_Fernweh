@extends("layouts.admin")
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="row bg-white py-3">
                    <h2 class="mt-3 pl-3 text-secondary"><small><b>BANNERS</b></small></h2>
                </div>
                <div class="row my-4">
                    <div class="col-12">
                        <div class="card border-0 py-2">
                            <div class="card-body">
                                <table class="table text-secondary thin">
                                    <thead class="table-borderless">
                                    <tr class="line-height-50">
                                        <th scope="col"></th>
                                        <th scope="col">PHOTO</th>
                                        <th scope="col">TITLE</th>
                                        <th scope="col">BODY</th>
                                        <th scope="col">COUNTRY</th>
                                        <th scope="col">CREATED AT</th>
                                        <th scope="col">UPDATED AT</th>
                                        <th scope="col">ACTIONS</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($photos)
                                        @foreach($photos as $photo)
                                            <tr class="line-height-50">
                                                <th scope="row">{{$photo->id}}</th>
                                                <td><img height="62" src="{{$photo->photo ? asset($photo->photo->file) : 'http://placehold.it/62x62'}}" alt=""></td>
                                                <td>{{$photo->title}}</td>
                                                <td>{{$photo->body}}</td>
                                                <td>{{$photo->country}}</td>
                                                <td>{{$photo->created_at}}</td>
                                                <td>{{$photo->updated_at}}</td>
                                                <td><a href="{{route('posts.edit',$photo->id)}}" class="btn btn-link text-warning text-decoration-none">Edit banner</a></td>
                                                {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPostsController@destroy', $photo->id]]) !!}
                                                <td class="form-group">
                                                    {!! form::submit('Delete banner', ['class'=>'btn btn-link text-danger text-decoration-none']) !!}
                                                </td>
                                                {!! Form::close() !!}
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                                <a href="{{route('photos.create')}}" class="font-larger thin text-decoration-none text-blue">Add new banner</a>
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

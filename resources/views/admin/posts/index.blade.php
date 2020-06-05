@extends("layouts.admin")
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="row bg-white py-3">
                    <h2 class="mt-3 pl-3 text-secondary"><small><b>POSTS</b></small></h2>
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
                                        <th scope="col">AUTHOR</th>
                                        <th scope="col">CATEGORY</th>
                                        <th scope="col">TITLE</th>
                                        <th scope="col">BODY</th>
                                        <th scope="col">CREATED AT</th>
                                        <th scope="col">UPDATED AT</th>
                                        <th scope="col">ACTIONS</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($posts)
                                        @foreach($posts as $post)
                                            <tr class="line-height-50">
                                                <th scope="row">{{$post->id}}</th>
                                                <td><img height="62" src="{{$post->photo ? asset($post->photo->file) : 'http://placehold.it/62x62'}}" alt=""></td>
                                                <td>{{$post->user->name}}</td>
                                                <td>{{$post->category ? $post->category_name : 'Uncategorized'}}</td>
                                                <td>{{$post->title}}</td>
                                                <td>{{$post->body}}</td>
                                                <td>{{$post->created_at}}</td>
                                                <td>{{$post->updated_at}}</td>
                                                <td><a href="{{route('posts.edit',$post->id)}}" class="btn btn-link text-warning text-decoration-none">Edit post</a></td>
                                                {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPostsController@destroy', $post->id]]) !!}
                                                <td class="form-group">
                                                    {!! form::submit('Delete post', ['class'=>'btn btn-link text-danger text-decoration-none']) !!}
                                                </td>
                                                {!! Form::close() !!}
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                                <a href="{{route('posts.create')}}" class="font-larger thin text-decoration-none text-blue">Add new post</a>
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

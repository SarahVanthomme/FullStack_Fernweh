@extends("layouts.admin")


@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="row bg-white py-3">
                    <h2 class="mt-3 pl-3 text-secondary"><small><b>CATEGORIES</b></small></h2>
                </div>
                <div class="row my-4">
                    <div class="col-12">
                        <div class="card border-0 py-2">
                            <div class="card-body">
                                {{--@if(Session::has('deleted_user'))
                                    <p class="alert alert-success">{{session('deleted_user')}}</p>
                                @endif--}}
                                <table class="table text-secondary thin">
                                    <thead class="table-borderless">
                                    <tr class="line-height-50">
                                        <th scope="col"></th>
                                        <th scope="col">IMAGE</th>
                                        <th scope="col">NAME</th>
                                        <th scope="col">BODY</th>
                                        <th scope="col">CREATED</th>
                                        <th scope="col">UPDATED</th>
                                        <th scope="col">ACTIONS</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($categories)
                                        @foreach($categories as $category)
                                            <tr class="line-height-50">
                                                <th scope="row">{{$category->id}}</th>
                                                <td><img height="60" src="{{$category->photo ? asset('/images/categories/' . $category->photo->file) : 'NONE'}}" alt=""></td>
                                                <td>{{$category->name}}</td>
                                                <td>{{$category->body}}</td>
                                                <td>{{$category->created_at}}</td>
                                                <td>{{$category->updated_at}}</td>
                                                <td><a href="{{route('categories.edit',$category->id)}}" class="btn btn-link text-warning text-decoration-none">Edit category</a></td>
                                                {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $category->id]]) !!}
                                                <td class="form-group">
                                                    {!! form::submit('Delete category', ['class'=>'btn btn-link text-danger text-decoration-none']) !!}
                                                </td>
                                                {!! Form::close() !!}
                                                {{-- @if($user->deleted_at != null)
                                                     <td><a href="{{route('admin.userrestore',$user->id)}}" class="btn btn-outline-success rounded-pill mb-1 w-100">Restore user</a></td>
                                                 @else

                                                     <td><a href="{{route('users.edit',$user->id)}}" class="btn btn-outline-warning rounded-pill w-100 mb-1">Edit user</a></td>
                                                     {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}
                                                     <td class="form-group">
                                                         {!! form::submit('Delete user', ['class'=>'btn btn-outline-danger rounded-pill w-100 mb-1']) !!}
                                                     </td>
                                                     {!! Form::close() !!}
                                                 @endif--}}
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                                <a href="{{route('categories.create')}}" class="font-larger thin text-decoration-none text-blue">Create new category</a>
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

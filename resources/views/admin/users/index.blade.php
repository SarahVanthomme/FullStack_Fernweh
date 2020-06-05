@extends("layouts.admin")


@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="row bg-white py-3">
                    <h2 class="mt-3 pl-3 text-secondary"><small><b>USERS</b></small></h2>
                </div>
                <div class="row my-4">
        <div class="col-12">
            <div class="card border-0 py-2">
                <div class="card-body">
                    @if(Session::has('deleted_user'))
                        <p class="alert alert-success">{{session('deleted_user')}}</p>
                    @endif
                        <table class="table text-secondary thin">
                        <thead class="table-borderless">
                        <tr class="line-height-50">
                            <th scope="col"></th>
                            <th scope="col">NAME</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">ADDRESS</th>
                            <th scope="col">COUNTRY</th>
                            <th scope="col">ROLE</th>
                            <th scope="col">STATUS</th>
                            <th scope="col">CREATED</th>
                            <th scope="col">UPDATED</th>
                            <th scope="col">ACTIONS</th>

                        </tr>
                        </thead>
                        <tbody>
                        @if($users)
                            @foreach($users as $user)
                                <tr class="line-height-50">
                                    <th scope="row">{{$user->id}}</th>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->address}}</td>
                                    <td>{{$user->country}}</td>
                                    <td>{{$user->role ? $user->role->name:'User without role'}}</td>
                                    <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                                    <td>{{$user->created_at}}</td>
                                    <td>{{$user->updated_at}}</td>


                                    {{--@if($user->deleted_at != null)
                                    <td><a href="{{route('admin.userrestore',$user->id)}}" class="btn btn-outline-success rounded-pill mb-1 w-100">Restore user</a></td>
                                    @else
                                   <td><a href="{{route('users.edit',$user->id)}}" class="btn btn-outline-warning rounded-pill w-100 mb-1">Edit user</a></td>
                                   {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}
                                   <td class="form-group">
                                       {!! form::submit('Delete user', ['class'=>'btn btn-outline-danger rounded-pill w-100 mb-1']) !!}
                                   </td>
                                   {!! Form::close() !!}
                                   @endif--}}

                                    <td><a href="{{route('users.edit',$user->id)}}" class="btn btn-link text-warning text-decoration-none">Edit user</a></td>
                                    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}
                                    <td class="form-group">
                                        {!! form::submit('Delete user', ['class'=>'btn btn-link text-danger text-decoration-none']) !!}
                                    </td>
                                    {!! Form::close() !!}

                                        </tr>
                                    @endforeach
                                    @endif


{{--                        <tr class="line-height-50">
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@fat</td>
                        </tr>
                        <tr class="line-height-50">
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr class="line-height-50">
                            <th scope="row">4</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr class="line-height-50">
                            <th scope="row">5</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>--}}
                        </tbody>
                    </table>
                        <a href="{{route('users.create')}}" class="font-larger thin text-decoration-none text-blue">Create new user</a>
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

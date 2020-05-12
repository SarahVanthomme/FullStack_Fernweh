@extends('layouts.admin')


@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="row bg-white py-3">
                    <h2 class="mt-3 pl-3 text-secondary"><small><b>Dashboard</b></small></h2>
                </div>
                <div class="row my-4">
                    <div class="col-sm-4">
                        <div class="card border-0 py-5">
                            <div class="card-body">
                                <div class="d-flex justify-content-around ">
                                    <h5 class="card-title text-secondary thin mb-0 mt-3">USERS</h5>
                                    <p class="card-text display-3 timer count-number pastel-red" data-to="{{App\User::all()->count()}}" data-speed="1500"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card border-0 py-5">
                            <div class="card-body d-flex justify-content-around">
                                <h5 class="card-title text-secondary thin mb-0 mt-3">TITLE</h5>
                                <p class="card-text display-3 timer count-number pastel-blue" data-to="20" data-speed="1500"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card border-0 py-5">
                            <div class="card-body d-flex justify-content-around">
                                <h5 class="card-title text-secondary thin mb-0 mt-3">TITLE</h5>
                                <p class="card-text display-3 timer count-number pastel-brown" data-to="20" data-speed="1500"></p>
                            </div>
                        </div>
                    </div>
                </div>
                {{--
                                <div class="row my-4">
                                    <div class="col-12">
                                        <div class="card border-0 py-2">
                                            <div class="card-body">
                                                <h5 class="card-title thin mb-0 my-4 font-weight-bolder">USERS</h5>
                                                <table class="table text-secondary font-larger thin">
                                                    <thead class="table-borderless">
                                                    <tr class="line-height-50">
                                                        <th scope="col">NAME</th>
                                                        <th scope="col">STATUS</th>
                                                        <th scope="col">ROLE</th>
                                                        <th scope="col">EMAIL</th>
                                                        <th scope="col">POSTS</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr class="line-height-50">
                                                        <th scope="row">1</th>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    <tr class="line-height-50">
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
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="font-larger thin text-decoration-none text-blue">Check all the users</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                --}}
                <div class="row my-4">
                    <div class="col-12">
                        <div class="card border-0 py-2">
                            <div class="card-body">
                                @if(Session::has('deleted_user'))
                                    <p class="alert alert-success">{{session('deleted_user')}}</p>
                                @endif
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="card-title thin mb-0 my-4 font-weight-bolder">USERS</h5>
                                    <a href="{{route('users.create')}}" class="font-larger thin text-decoration-none text-blue">Create new user</a>
                                </div>
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
                                    {{--@if($users)
                                        @foreach($users as $user)
                                            <tr class="line-height-50">
                                                <th scope="row">{{$user->id}}</th>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>blabla</td>
                                                <td>blabla</td>
                                                <td>{{$user->role ? $user->role->name:'User without role'}}</td>
                                                <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                                                <td>{{$user->created_at}}</td>
                                                <td>{{$user->updated_at}}</td>
                                                @if($user->deleted_at != null)
                                                    <td><a href="{{route('admin.userrestore',$user->id)}}" class="btn btn-outline-success rounded-pill mb-1 w-100">Restore user</a></td>
                                                @else

                                                    <td><a href="{{route('users.edit',$user->id)}}" class="btn btn-outline-warning rounded-pill w-100 mb-1">Edit user</a></td>
                                                    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}
                                                    <td class="form-group">
                                                        {!! form::submit('Delete user', ['class'=>'btn btn-outline-danger rounded-pill w-100 mb-1']) !!}
                                                    </td>
                                                    {!! Form::close() !!}
                                                @endif
                                            </tr>
                                        @endforeach
                                    @endif--}}
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
                                <a href="#" class="font-larger thin text-decoration-none text-blue">Check all the users</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row my-4">
                    <div class="col-6">
                        <div class="card border-0 py-2">
                            <div class="card-body">
                                <h5 class="card-title thin mb-0 my-4 font-weight-bolder">RECENT COMMENTS</h5>
                                <div class="border-bottom py-4">
                                    <div class="d-flex">
                                        <div>
                                            <img class="rounded-circle mr-3" src="http://placehold.it/60x60" alt="">
                                        </div>
                                        <div>
                                            <p class="font-larger">Name</p>
                                            <p class="font-larger thin text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores facere iste quidem? Adipisci asperiores consequuntur distinctio illum.</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <p class="font-smaller thin">April 3, 2020</p>
                                    </div>
                                </div>
                                <div class="border-bottom py-4">
                                    <div class="d-flex">
                                        <div>
                                            <img class="rounded-circle mr-3" src="http://placehold.it/60x60" alt="">
                                        </div>
                                        <div>
                                            <p class="font-larger">Name</p>
                                            <p class="font-larger thin text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores facere iste quidem? Adipisci asperiores consequuntur distinctio illum.</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <p class="font-smaller thin">April 3, 2020</p>
                                    </div>
                                </div>
                                <div class="py-4">
                                    <div class="d-flex">
                                        <div>
                                            <img class="rounded-circle mr-3" src="http://placehold.it/60x60" alt="">
                                        </div>
                                        <div>
                                            <p class="font-larger">Name</p>
                                            <p class="font-larger thin text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores facere iste quidem? Adipisci asperiores consequuntur distinctio illum.</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <p class="font-smaller thin">April 3, 2020</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card border-0 py-2">
                            <div class="card-body">
                                <h5 class="card-title thin mb-0 my-4 font-weight-bolder">RECENT POSTS</h5>
                                <div class="py-4 border-bottom">
                                    <div class="d-flex">
                                        <img class="mr-3" src="http://placehold.it/400x100" alt="">
                                    </div>
                                    <p class="font-larger my-4">The Title Of The Post</p>
                                    <p class="font-larger thin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ea laudantium nihil ratione reiciendis rem repellendus sunt vel...
                                        <a href="#" class="text-blue text-decoration-none">Read more</a></p>
                                    <p class="font-smaller thin">Name of author | Category | April 3, 2020</p>
                                </div>
                                <div class="py-4">
                                    <div class="d-flex">
                                        <img class="mr-3" src="http://placehold.it/400x100" alt="">
                                    </div>
                                    <p class="font-larger my-4">The Title Of The Post</p>
                                    <p class="font-larger thin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ea laudantium nihil ratione reiciendis rem repellendus sunt vel...
                                        <a href="#" class="text-blue text-decoration-none">Read more</a></p>
                                    <p class="font-smaller thin">Name of author | Category | April 3, 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @include('includes.footer')
    </div>
@endsection

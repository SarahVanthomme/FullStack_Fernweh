@extends("layouts.admin")
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="row bg-white py-3">
                    <h2 class="mt-3 pl-3 text-secondary"><small><b>ADDRESSES</b></small></h2>
                </div>
                <div class="row my-4">
                    <div class="col-12">
                        <div class="card border-0 py-2">
                            <div class="card-body">
                                <table class="table text-secondary thin">
                                    <thead class="table-borderless">
                                    <tr class="line-height-50">
                                        <th scope="col"></th>
                                        <th scope="col">CLIENT</th>
                                        <th scope="col">STREET</th>
                                        <th scope="col">NO</th>
                                       {{-- <th scope="col">ZIP CODE</th>
                                        <th scope="col">CITY</th>
                                        <th scope="col">COUNTRY</th>--}}
                                        <th scope="col">CREATED AT</th>
                                        <th scope="col">UPDATED AT</th>
                                        <th scope="col">ACTIONS</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($addresses)
                                        @foreach($addresses as $address)
                                            <tr>
                                                <th>{{$address->id}}</th>
                                                <td>{{$address->user->name}}</td>
                                                <td>{{$address->street}}</td>
                                                <td>{{$address->number}}</td>
                                                {{--<td>{{$address->zip->code}}</td>
                                                <td>{{$address->city->name}}</td>
                                                <td>{{$address->country->name}}</td>--}}
                                                <td>{{$address->created_at}}</td>
                                                <td>{{$address->updated_at}}</td>
                                                <td><a href="{{route('orders.edit',$address->id)}}" class="btn btn-link text-warning text-decoration-none">edit address</a></td>
                                                {!! Form::open(['method'=>'DELETE', 'action'=>['AdminAddressesController@destroy', $address->id]]) !!}
                                                <td class="form-group">
                                                    {!! form::submit('Delete order', ['class'=>'btn btn-link text-danger text-decoration-none']) !!}
                                                </td>
                                            {!! Form::close() !!}
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                                <a href="{{route('addresses.create')}}"
                                   class="font-larger thin text-decoration-none text-blue">Add new address</a>
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


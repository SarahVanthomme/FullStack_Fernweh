@extends("layouts.admin")
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="row bg-white py-3">
                    <h2 class="mt-3 pl-3 text-secondary"><small><b>ORDERS</b></small></h2>
                </div>
                <div class="row my-4">
                    <div class="col-12">
                        <div class="card border-0 py-2">
                            <div class="card-body">
                                @if(Session::has('deleted_order'))
                                    <p class="alert alert-success">{{session('deleted_order')}}</p>
                                @endif
                                <table class="table text-secondary thin">
                                    <thead class="table-borderless">
                                    <tr class="line-height-50">
                                        <th scope="col"></th>
                                        <th scope="col">CLIENT</th>
                                        <th scope="col">AMOUNT</th>
                                        <th scope="col">CREATED AT</th>
                                        <th scope="col">UPDATED AT</th>
                                        <th scope="col">DELETED AT</th>
                                        <th scope="col">ACTIONS</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($orders)
                                        @foreach($orders as $order)
                                            <tr class="line-height-50">
                                                <th scope="row">{{$order->id}}</th>
                                                <th scope="row">{{$order->user ? $order->user->name : "no name"}}</th>
                                                <td>{{$order->amount}}</td>
                                                <td>{{$order->created_at}}</td>
                                                <td>{{$order->updated_at}}</td>
                                                <td>{{$order->deleted_at}}</td>
                                               {{-- <td><a href="{{route('orders.edit',$order->id)}}" class="btn btn-link text-warning text-decoration-none">view order</a></td>
                                                {!! Form::open(['method'=>'DELETE', 'action'=>['StripePaymentController@destroy', $order->id]]) !!}
                                                <td class="form-group">
                                                    {!! form::submit('Delete order', ['class'=>'btn btn-link text-danger text-decoration-none']) !!}
                                                </td>--}}
                                                <td><a class="btn btn-link text-warning text-decoration-none" href="{{route('orders.edit',$order->id)}}">View order</a></td>
                                                <td>
                                                    @if($order->deleted_at !=null)
                                                        <a class="btn btn-link text-dark text-decoration-none" href="{{route('admin.orderrestore',$order->id)}}">Activate order</a>
                                                    @else
                                                        {!! Form::open(['method'=>'DELETE','action'=>['StripePaymentController@destroy',$order->id]]) !!}
                                                        <div>
                                                            {!! Form::submit('Deactivate',['class'=>'btn btn-link text-danger text-decoration-none']) !!}
                                                        </div>
                                                        {!! Form::close() !!}
                                                    @endif
                                                </td>
                                                {!! Form::close() !!}
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                                <a href="{{route('orders.create')}}" class="font-larger thin text-decoration-none text-blue">Add new order</a>
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

@extends("layouts.admin")


@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="row bg-white py-3">
                    <h2 class="mt-3 pl-3 text-secondary"><small><b>REVIEWS</b></small></h2>
                </div>
                <div class="row my-4">
                    <div class="col-12">
                        <div class="card border-0 py-2">
                            <div class="card-body">
                                <table class="table text-secondary thin">
                                    <thead class="table-borderless">
                                    <tr class="line-height-50">
                                        <th scope="col"></th>
                                        <th scope="col">USER</th>
                                        <th scope="col">PRODUCT</th>
                                        <th scope="col">EMAIL</th>
                                        <th scope="col">REVIEW</th>
                                        <th scope="col">CREATED</th>
                                        <th scope="col">ACTIONS</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($reviews)
                                        @foreach($reviews as $review)
                                            <tr class="line-height-50">
                                                <th scope="row">{{$review->id}}</th>
                                                <td>{{$review->name}}</td>
                                                <td>{{$review->product->name}}</td>
                                                <td>{{$review->email}}</td>
                                                <td>{{$review->body}}</td>
                                                <td>{{$review->created_at}}</td>
                                                <td>{{$review->updated_at}}</td>
                                                <td><a href="{{route('product_detail', $review->product->id)}}" class="btn btn-link text-warning text-decoration-none">View</a></td>
                                                <td>
                                                    @if($review->is_active == 1)
                                                        {!! Form::open(['method'=>'PATCH', 'action'=>['ProductsReviewController@update',$review->id]]) !!}
                                                        <input type="hidden" name="is_active" value="0">
                                                        <div class="form-group">
                                                            {!! Form::submit('Unapprove', ['type'=>'submit','class'=>'btn btn link text-decoration-none text-warning']) !!}
                                                        </div>
                                                        {!! Form::close() !!}
                                                    @else
                                                        {!! Form::open(['method'=>'PATCH', 'action'=>['ProductsReviewController@update',$review->id]]) !!}
                                                        <div class="form-group">
                                                            <input type="hidden" name="is_active" value="1">
                                                            {!! Form::submit('Approve', ['type'=>'submit','class'=>'btn btn-link text-decoration-none text-success']) !!}
                                                        </div>
                                                        {!! Form::close() !!}
                                                    @endif
                                                </td>
                                                {!! Form::open(['method'=>'DELETE', 'action'=>['ProductsReviewController@destroy', $review->id]]) !!}
                                                <td class="form-group">
                                                    {!! form::submit('Delete', ['class'=>'btn btn-link text-danger text-decoration-none']) !!}
                                                </td>
                                                {!! Form::close() !!}
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
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

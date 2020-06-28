@extends("layouts.admin")


@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="row bg-white py-3">
                    <h2 class="mt-3 pl-3 text-secondary"><small><b>TEXTS AND TITLES</b></small></h2>
                </div>
                <div class="row my-4">
                    <div class="col-12">
                        <div class="card border-0 py-2">
                            <div class="card-body">
                                <table class="table text-secondary thin">
                                    <thead class="table-borderless">
                                    <tr class="line-height-50">
                                        <th scope="col"></th>
                                        <th scope="col">TITLE</th>
                                        <th scope="col">CONTENT</th>
                                        <th scope="col">CREATED</th>
                                        <th scope="col">UPDATED</th>
                                        <th scope="col">ACTIONS</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($translations)
                                        @foreach($translations as $translation)
                                            <tr class="line-height-50">
                                                <th scope="row">{{$translation->id}}</th>
                                                <td>{{$translation->name}}</td>
                                                <td>{{$translation->body}}</td>
                                                <td>{{$translation->created_at}}</td>
                                                <td>{{$translation->updated_at}}</td>
                                                <td><a href="{{route('translations.edit',$translation->id)}}" class="btn btn-link text-warning text-decoration-none">Edit content</a></td>
                                                {!! Form::open(['method'=>'DELETE', 'action'=>['TranslationsController@destroy', $translation->id]]) !!}
                                                <td class="form-group">
                                                    {!! form::submit('Delete content', ['class'=>'btn btn-link text-danger text-decoration-none']) !!}
                                                </td>
                                                {!! Form::close() !!}
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                                <a href="{{route('translations.create')}}" class="font-larger thin text-decoration-none text-blue">Add new content</a>
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

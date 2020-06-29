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
                                <h5 class="card-title text-secondary thin mb-0 mt-3">PRODUCTS</h5>
                                <p class="card-text display-3 timer count-number pastel-blue" data-to="{{App\Product::all()->count()}}" data-speed="1500"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card border-0 py-5">
                            <div class="card-body d-flex justify-content-around">
                                <h5 class="card-title text-secondary thin mb-0 mt-3">REVIEWS</h5>
                                <p class="card-text display-3 timer count-number pastel-brown" data-to="{{App\ProductReview::all()->count()}}" data-speed="1500"></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
        @include('includes.footer')
    </div>
@endsection

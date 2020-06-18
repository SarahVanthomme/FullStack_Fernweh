<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav mt-5">
                    {{--<h4><small><a class="nav-link py-4 thin" href="index.html"
                            ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt fa-lg mr-3"></i></div>
                                Dashboard</a
                            ></small></h4>--}}
                    <h4><small><a class="nav-link collapsed py-4 thin" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                            ><div class="sb-nav-link-icon"><i class="fas fa-book-open fa-lg mr-3"></i></div>
                                All
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                ></a></small></h4>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav"><h4><small>
                                    <a class="nav-link thin" href="{{route('users.index')}}">Users</a>
                                    <a class="nav-link thin" href="#">Addresses</a>
                                    <a class="nav-link thin" href="{{route('products.index')}}">Products</a>
                                    <a class="nav-link thin" href="{{route('categories.index')}}">Categories</a>
                                    <a class="nav-link thin" href="{{route('cities.index')}}">Cities</a>
                                    <a class="nav-link thin" href="{{route('countries.index')}}">Countries</a>
                                    <a class="nav-link thin" href="{{route('continents.index')}}">Continents</a>
{{--                                    <a class="nav-link thin" href="{{route('comments.index')}}">Comments</a>--}}
                                    <a class="nav-link thin" href="#">Orders</a>
                                    <a class="nav-link thin" href="{{route('discounts.index')}}">Discounts</a>
                                    <a class="nav-link thin" href="{{route('posts.index')}}">Posts</a>
                                </small></h4>
                        </nav>
                    </div>
                    <h4><small><a class="nav-link collapsed py-4 thin" href="#" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts2"
                            ><div class="sb-nav-link-icon"><i class="fas fa-book-open fa-lg mr-3"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                ></a></small></h4>
                    <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav"><h4><small>

                                    <a class="nav-link thin" href="{{route('banners.index')}}">Banners</a>
                                    <a class="nav-link thin" href="{{route('index-banners.index')}}">Index banners</a>
                                    <a class="nav-link thin" href="#">Texts - titles</a>


                                </small></h4>
                        </nav>
                    </div>
                    <h4><small><a class="nav-link collapsed py-4 thin" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                            ><div class="sb-nav-link-icon"><i class="fas fa-plus-square fa-lg mr-3"></i></div>
                                Create
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                ></a></small></h4>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <h4><small>
                                    {{--<a class="nav-link collapsed thin" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"
                                    >Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                        ></a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link thin" href="login.html">Login</a><a class="nav-link thin" href="register.html">Register</a><a class="nav-link thin" href="password.html">Forgot Password</a></nav>
                                    </div>
                                    <a class="nav-link collapsed thin" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError"
                                    >Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                        ></a>--}}
                                    <a class="nav-link thin" href="{{route('users.create')}}">Users</a>
                                    <a class="nav-link thin" href="#">Addresses</a>
                                    <a class="nav-link thin" href="{{route('products.create')}}">Products</a>
                                    <a class="nav-link thin" href="{{route('banners.create')}}">Banners</a>
                                    <a class="nav-link thin" href="{{route('categories.create')}}">Categories</a>
                                    <a class="nav-link thin" href="{{route('cities.create')}}">Cities</a>
                                    <a class="nav-link thin" href="{{route('countries.create')}}">Countries</a>
{{--                                    <a class="nav-link thin" href="{{route('comments.create')}}">Comments</a>--}}
                                    <a class="nav-link thin" href="#">Orders</a>
                                    <a class="nav-link thin" href="{{route('discounts.create')}}">Orders</a>
                                    <a class="nav-link thin" href="{{route('posts.create')}}">Posts</a>
                                </small></h4>
                            <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav"><h4><small><a class="nav-link thin" href="401.html">401 Page</a><a class="nav-link thin" href="404.html">404 Page</a><a class="nav-link thin" href="500.html">500 Page</a></small></h4></nav>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Start Bootstrap
            </div>
        </nav>

    </div>
    @yield('content')

    {{--<div id="layoutSidenav_content">
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
                                <!-- <div class="progress">
                                     <div class="progress-bar bg-danger" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>-->
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
--}}{{--
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
--}}{{--
                @yield('content')

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
        <footer class="py-4 bg-white mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-center small">
                    <div class="text-muted">Copyright &copy; Fernweh 2020</div>
                </div>
            </div>
        </footer>
    </div>--}}

</div>

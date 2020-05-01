<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>

    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" crossorigin="anonymous" href="{{asset('https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" id="bootstrap-css" href="{{asset('//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css')}}">

</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark topbar py-5">
    <a class="navbar-brand" href="{{route('admin')}}">Fernweh</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
    ><!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group bg-light rounded-pill">
            <input class="form-control rounded-pill bg-light border-light" type="text" placeholder="Search..." aria-label="Search" aria-describedby="basic-addon2" />
            <div class="input-group-append">
                <button class="btn" type="button"><i class="fas fa-search text-secondary"></i></button>
            </div>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle font-weight-bolder text-light" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle mr-3" src="http://placehold.it/60x60" alt="">Name</a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="login.html">Logout</a>
            </div>
        </li>
    </ul>
</nav>
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
                                    <a class="nav-link thin" href="#">Products</a>
                                    <a class="nav-link thin" href="{{route('categories.index')}}">Categories</a>
                                    <a class="nav-link thin" href="{{route('cities.index')}}">Cities</a>
                                    <a class="nav-link thin" href="{{route('countries.index')}}">Countries</a>
                                    <a class="nav-link thin" href="{{route('continents.index')}}">Continents</a>
                                    <a class="nav-link thin" href="#">Comments</a>
                                    <a class="nav-link thin" href="#">Orders</a>
                                    <a class="nav-link thin" href="{{route('posts.index')}}">Posts</a>
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
                                    <a class="nav-link thin" href="#">Products</a>
                                    <a class="nav-link thin" href="{{route('categories.create')}}">Categories</a>
                                    <a class="nav-link thin" href="{{route('cities.create')}}">Cities</a>
                                    <a class="nav-link thin" href="{{route('countries.create')}}">Countries</a>
                                    <a class="nav-link thin" href="#">Comments</a>
                                    <a class="nav-link thin" href="#">Orders</a>
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



<script crossorigin="anonymous" src="{{asset('https://code.jquery.com/jquery-3.4.1.min.js')}}"></script>
<script crossorigin="anonymous" src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js')}}"></script>
<script crossorigin="anonymous" src="{{asset('js/scripts.js')}}"></script>
<script crossorigin="anonymous" src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js')}}"></script>
<script crossorigin="anonymous" src="{{asset('assets/demo/chart-area-demo.js')}}"></script>
<script crossorigin="anonymous" src="{{asset('assets/demo/chart-bar-demo.js')}}"></script>
<script crossorigin="anonymous" src="{{asset('https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js')}}"></script>
<script crossorigin="anonymous" src="{{asset('https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js')}}"></script>
<script crossorigin="anonymous" src="{{asset('assets/demo/datatables-demo.js')}}"></script>


<script crossorigin="anonymous" src="{{asset('//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js')}}"></script>
<script crossorigin="anonymous" src="{{asset('//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js')}}" crossorigin="anonymous"></script>

<script>
    (function ($) {
        $.fn.countTo = function (options) {
            options = options || {};

            return $(this).each(function () {
                // set options for current element
                var settings = $.extend({}, $.fn.countTo.defaults, {
                    from:            $(this).data('from'),
                    to:              $(this).data('to'),
                    speed:           $(this).data('speed'),
                    refreshInterval: $(this).data('refresh-interval'),
                    decimals:        $(this).data('decimals')
                }, options);

                // how many times to update the value, and how much to increment the value on each update
                var loops = Math.ceil(settings.speed / settings.refreshInterval),
                    increment = (settings.to - settings.from) / loops;

                // references & variables that will change with each update
                var self = this,
                    $self = $(this),
                    loopCount = 0,
                    value = settings.from,
                    data = $self.data('countTo') || {};

                $self.data('countTo', data);

                // if an existing interval can be found, clear it first
                if (data.interval) {
                    clearInterval(data.interval);
                }
                data.interval = setInterval(updateTimer, settings.refreshInterval);

                // initialize the element with the starting value
                render(value);

                function updateTimer() {
                    value += increment;
                    loopCount++;

                    render(value);

                    if (typeof(settings.onUpdate) == 'function') {
                        settings.onUpdate.call(self, value);
                    }

                    if (loopCount >= loops) {
                        // remove the interval
                        $self.removeData('countTo');
                        clearInterval(data.interval);
                        value = settings.to;

                        if (typeof(settings.onComplete) == 'function') {
                            settings.onComplete.call(self, value);
                        }
                    }
                }

                function render(value) {
                    var formattedValue = settings.formatter.call(self, value, settings);
                    $self.html(formattedValue);
                }
            });
        };

        $.fn.countTo.defaults = {
            from: 0,               // the number the element should start at
            to: 0,                 // the number the element should end at
            speed: 1000,           // how long it should take to count between the target numbers
            refreshInterval: 100,  // how often the element should be updated
            decimals: 0,           // the number of decimal places to show
            formatter: formatter,  // handler for formatting the value before rendering
            onUpdate: null,        // callback method for every time the element is updated
            onComplete: null       // callback method for when the element finishes updating
        };

        function formatter(value, settings) {
            return value.toFixed(settings.decimals);
        }
    }(jQuery));

    jQuery(function ($) {
        // custom formatting example
        $('.count-number').data('countToOptions', {
            formatter: function (value, options) {
                return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
            }
        });
        // start all the timers
        $('.timer').each(count);

        function count(options) {
            var $this = $(this);
            options = $.extend({}, options || {}, $this.data('countToOptions') || {});
            $this.countTo(options);
        }
    });
</script>
</body>
</html>

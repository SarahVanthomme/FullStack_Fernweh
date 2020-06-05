{{--nav voor een witte achtergrond--}}
<section class="container-fluid z-index-5">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand xxl-font-300 text-dark" href="index.html">FERNWEH</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse large-font-300" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-dark" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="destinations.html" data-target="destinations.html" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Destinations
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="africa.html">Africa</a>
                        <a class="dropdown-item" href="asia.html">Asia</a>
                        <a class="dropdown-item" href="australia.html">Australia</a>
                        <a class="dropdown-item" href="europe.html">Europe</a>
                        <a class="dropdown-item" href="north_america.html">North America</a>
                        <a class="dropdown-item" href="south_america.html">South America</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Blog</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link ml-30pr text-dark d-none d-lg-block" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i>
                    </a>
                    <a class="d-block d-lg-none nav-link text-dark" href="shopping_cart.html">Shopping cart</a>
                    <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                        <p><b>Your shopping cart is empty</b></p>
                        <button class="btn text-white border-none btn-dark mr-5pr w-80 mb-4pr"><a href="destinations.html" class="btn-proceed">Go to shop</a></button>
                        <button class="btn text-white border-none btn-dark mr-5pr w-80"><a href="shopping_cart.html" class="btn-proceed">Go to cart</a></button>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link d-none d-lg-block ml-70pr text-dark" href="#"><i class="fa fa-user pr-45pr"></i>
                    </a>
                    <a class="d-block d-lg-none nav-link text-dark" href="#">Your account</a>
                    <div class="dropdown-menu">
                        <form class="px-4 py-3">
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1"><b>Email address</b></label>
                                <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormPassword1"><b>Password</b></label>
                                <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                <label class="form-check-label" for="dropdownCheck">
                                    <b>Remember me</b>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-dark">Sign in</button>
                        </form>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">New around here? Sign up</a>
                        <a class="dropdown-item" href="#">Forgot password?</a>
                    </div>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input id="background-search" class="form-control mr-sm-2" type="search"
                       placeholder="Search"
                       aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>

    </nav>
</section>


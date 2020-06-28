<footer class="container-fluid bg-darkgrey pt-4pr pb-1pr">
    <div class="row d-flex justify-content-center pb-2pr">
        <div class="col-9 col-lg-11 d-lg-flex justify-content-lg-around text-center text-lg-left">
            <div class="col-lg-2">
                <h2 class="text-secondary pb-1pr" style="font-size: xx-large;">
                    ABOUT US
                </h2>
                <p class="font-medium text-secondary m-0">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis repudiandae voluptas. Aspernatur
                    dolorum esse fuga inventore nobis perspiciatis quia sapiente soluta temporibus.
                </p>
            </div>
            <div class="col-lg-2 footer-padding">
                <h2 class="text-secondary pb-1pr" style="font-size: xx-large;">NEWSLETTER</h2>
                <p class="font-medium text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet facere placeat.</p>
                <div class="d-flex justify-content-center justify-content-lg-start">
{{--                    <input type="email" placeholder="Subscribe">
                    <button type="submit" class="btn text-white btn-dark">GO</button>--}}
                    <a href="{{route('contact')}}" class="btn text-white btn-dark">Yes, Sign Me Up !</a>
                </div>
            </div>
            <div class="col-lg-2 footer-padding">
                <h2 class="text-secondary pb-1pr" style="font-size: xx-large;">INSTAGRAM FEED</h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <img src="{{asset('images/frontend/footer1.png')}}" alt="instafeed" class="p-1pr">
                    <img src="{{asset('images/frontend/footer2.png')}}" alt="instafeed" class="p-1pr">
                    <img src="{{asset('images/frontend/footer3.png')}}" alt="instafeed" class="p-1pr">
                </div>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <img src="{{asset('images/frontend/footer4.png')}}" alt="instafeed" class="p-1pr">
                    <img src="{{asset('images/frontend/footer5.png')}}" alt="instafeed" class="p-1pr">
                    <img src="{{asset('images/frontend/footer5.png')}}" alt="instafeed" class="p-1pr">
                </div>
            </div>
            <div class="col-lg-2 footer-padding">
                <h2 class="text-secondary pb-1pr" style="font-size: xx-large;">CONTACT US</h2>
                <p class="font-medium text-secondary m-0">Schönhauser Allee<br>167c, 10345 Berlin Germany</p>
                <p class="font-medium text-secondary m-0"><span class="text-blue">Email:</span> moin@fernweh.de</p>
                <p class="font-medium text-secondary m-0"><span class="text-blue">Telephone:</span> 0123456789</p>
                <div class="row pt-4pr d-flex justify-content-center justify-content-lg-start">
                    <div class="col-4 col-lg-10 d-flex justify-content-between">
                        <a href="#"><i class="fab fa-facebook-f text-secondary footer-icon"></i></a>
                        <a href="#"><i class="fab fa-twitter text-secondary footer-icon"></i></a>
                        <a href="#"><i class="fab fa-instagram text-secondary footer-icon"></i></a>
                        <a href="#"><i class="fab fa-pinterest text-secondary footer-icon"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center footer-border pt-2pr">
        <div class="col-6 col-lg-4 col-xl-3 text-secondary text-center">

            <p class="text-secondary font-small pt-2pr">&copy; Voyage. All Rights Reserved</p>
            <div onclick="call()"><i class="fa fa-arrow-up text-white font-small bounce" style="cursor: pointer"></i></div>

        </div>
    </div>

</footer>

@extends('../layouts.app')

@section('content')
    <section class="banner-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow bounceInLeft">
                    <div class="top-cares py-3 py-md-5">
                        <h2 class="section-title primary ">{{__('home.cares')}}</h2>
                        <p class="text-format">Connect with the Experts &amp; Users with a simple click.</p>
                        <a href="https://interactivecares.com/apply-as-a-tutor/ " class="btn btn-common"> Become an
                            Expert </a>
                    </div>
                </div>
                <div class="col-md-6 wow bounceInRight">
                    <img src="{{ asset('assets/images/background/capturell.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="why-us-section bg-primary py-5">
        <div class="container">
            <h2 class="section-title text-white text-center text-uppercase wow bounceInDown">Why Us</h2>
            <div class="row">
                <div class="col-md-4 text-center wow bounceInLeft">
                    <div class="why-block">
                        <div class="icon">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <h4 class="section-sub-title">Verified Experts</h4>
                        <p>Experts are selected through a rigorous screening process, and a full background check is
                            performed on each Experts.</p>
                    </div>

                </div>
                <div class="col-md-4 text-center wow bounceInUp">
                    <div class="why-block">
                        <div class="icon">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <h4 class="section-sub-title">Verified Experts</h4>
                        <p>Experts are selected through a rigorous screening process, and a full background check is
                            performed on each Experts.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center wow bounceInRight">
                    <div class="why-block">
                        <div class="icon">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <h4 class="section-sub-title">Verified Experts</h4>
                        <p>Experts are selected through a rigorous screening process, and a full background check is
                            performed on each Experts.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="testimonial-section py-5">
        <div class="container">
            <h2 class="section-title primary text-center wow bounceInDown">What Clients Say</h2>
            <div class="testimonial-slider" >
                <div class="testimonial text-center">
                    <h3>Your Name</h3>
                    <img src="{{ asset('assets/images/testimonial/review-1.jpg') }}" alt="logo" class="img-fluid logo my-0 mx-auto">
                    <ul class="list-unstyled my-3">
                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, reiciendis?</p>
                </div>
                <div class="testimonial text-center">
                    <h3>Your Name  Here</h3>
                    <img src="{{ asset('assets/images/testimonial/review-1.jpg') }}" alt="logo" class="img-fluid logo my-0 mx-auto">
                    <ul class="list-unstyled my-3">
                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, reiciendis?</p>
                </div>
                <div class="testimonial text-center">
                    <h3>User Demo</h3>
                    <img src="{{ asset('assets/images/testimonial/review-1.jpg') }}" alt="logo" class="img-fluid logo my-0 mx-auto">
                    <ul class="list-unstyled my-3">
                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, reiciendis?</p>
                </div>
                <div class="testimonial text-center">
                    <h3>New User</h3>
                    <img src="{{ asset('assets/images/testimonial/review-1.jpg') }}" alt="logo" class="img-fluid logo my-0 mx-auto">
                    <ul class="list-unstyled my-3">
                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, reiciendis?</p>
                </div>
               
            </div>
        </div>
    </section>

    <section class="sign-up-section py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow bounceInLeft">
                    <div class="top-cares py-3 py-md-5">
                        <h2 class="section-title mb-2">Everything in One place!</h2>
                        <h2 class="section-title primary">Sign Up</h2>
                        <p class="text-format">Sign up today for the smoothest experience in finding a suitable experts
                            Completely free of cost.</p>
                        <a href="#" class="btn btn-common"> Sign Up</a>
                    </div>
                </div>
                <div class="col-md-6 wow bounceInRight">
                    <img src="{{ asset('assets/images/background/sign-up-bg.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section id="counter" class="counter-section py-5 bg-primary">
        <div class="container">
            <h2 class="section-title text-white text-center text-uppercase wow bounceInUp">Quality Create Clients</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="stastic">
                        <i class="fas fa-users"></i>
                        <h4 class="counter">8500</h4>
                        <h5>Happy Clients</h5>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="stastic">
                        <i class="fas fa-user-friends"></i>
                        <h4 class="counter">2500</h4>
                        <h5>Happy Experts</h5>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="stastic">
                        <i class="fas fa-hourglass-start"></i>
                        <h4 class="counter percent">5000</h4>
                        <h5>Learning Hours</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sign-up-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow bounceInLeft">
                    <img src="{{ asset('assets/images/background/expert-bg-home-2.png') }}" alt="sign"
                         class="img-fluid">
                </div>
                <div class="col-md-6">
                    <div class="top-cares py-3 py-md-5 wow bounceInRight">
                        <h2 class="section-title mb-2">It's easy</h2>
                        <h2 class="section-title primary">Become an Expert</h2>
                        <p class="text-format">Register as an Expert today, to earn easy money through a few simple
                            steps. You get full flexibility to choose student, time and payment.</p>
                        <a href="#" class="btn btn-common">Become an Expert</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

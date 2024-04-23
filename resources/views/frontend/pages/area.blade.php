@extends('frontend.index')
@section('content')
    <section
        class="page-title page-title-layout1 bg-overlay bg-overlay-2 bg-parallax"
    >
        <div class="bg-img">
            <img
                src="{{('frontend/assets/images/page-titles/1.jpg')}}"
                alt="background"
            />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <h1 class="pagetitle__heading">Coverage Area</h1>
                </div>
                <!-- /.col-xl-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- ! Expanding Coverage  -->
    <section class="about-area coverage_area_style">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about-images">
                        <div class="about-thumb">
                            <img
                                src="https://experthome.services/wp-content/uploads/2023/01/cropped-cropped-cropped-us-regions-map-census.webp"
                                alt=""
                            />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-content ml-10">
                        <div class="section-title">
                            <div class="section-sub-titile about">
										<span class="heading__subtitle"
                                        >Expanding Coverage</span
                                        >
                            </div>
                            <h2 class="heading__title">
                                With maximum States coverage
                            </h2>
                        </div>
                        <div class="about-discription">
                            <p>
                                We are expanding our coverage rapidly
                                with our high quality service and based
                                on our clients’ satisfaction.
                            </p>
                            <h2>Our current coverage</h2>
                            <ul>
                                @foreach($state as $key=>$stateData)
                                <li>{{$key+1}}. {{$stateData->name}}</li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ! Counter Section -->
    <section class="pt-80 bg-gray">
        <div class="services-bg">
            <div class="bg-img">
                <img
                    src="{{('frontend/assets/images/backgrounds/map.png')}}"
                    alt="background"
                />
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                    <div class="heading text-center mb-40">
                        <h2 class="heading__title">
                            Our Success in Numbers
                        </h2>
                        <p>
                            With the Internet spreading linke wildfire
                            and reaching every part of our daily life,
                            more and more traffic is directed to
                            websites in search for information.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="counter_item mb-4 mb-lg-0">
                        <div class="top_item">
                            <div class="counter__icon">
                                <i class="fa fa-envira"></i>
                            </div>
                            <h4><span class="counter">{{$stateCount}}</span>+</h4>
                        </div>
                        <h3>States Covered</h3>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="counter_item mb-4 mb-lg-0">
                        <div class="top_item">
                            <div class="counter__icon">
                                <i class="fa fa-smile-o"></i>
                            </div>
                            <h4>
                                <span class="counter">15,000</span>+
                            </h4>
                        </div>
                        <h3>Work Orders Completed</h3>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="counter_item mb-4 mb-lg-0">
                        <div class="top_item">
                            <div class="counter__icon">
                                <i class="fa fa-trophy"></i>
                            </div>
                            <h4><span class="counter">35</span>+</h4>
                        </div>
                        <h3>5 Star Rating</h3>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="counter_item">
                        <div class="top_item">
                            <div class="counter__icon">
                                <i class="fa fa-building"></i>
                            </div>
                            <h4><span class="counter">1,880</span>+</h4>
                        </div>
                        <h3>Properties Visited</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </section>

    <!-- Call to Action -->
    <section class="cta">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="cta__content text-center">
                        <h3 class="cta__title">
                            Your Contractor Team is availalbe 24 hours a
                            day, 7 days a week! Contact us if you have
                            any questions, we’re here to help you!
                            <br />
                            <span style="color: #fe5a0e"
                            >CALL +1 871-406-2988 for more
										informations</span
                            >
                        </h3>
                        <a
                            href="contact-us.html"
                            class="btn btn__primary"
                        >Call us Today!</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

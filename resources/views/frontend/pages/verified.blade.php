@extends('frontend.index')
@section('content')
    <!-- page title -->
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
                    <h1 class="pagetitle__heading">Get a quote</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="get_a_quote_wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-10">
                    <div class="get_a_quote_form">
                        <div class="col-sm-12">
                            <h4
                                class="contact__panel-title text-center"
                            >
                                Thanks To Verify Your Email and Send Message Successfully
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

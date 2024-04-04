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
                    <h1 class="pagetitle__heading">Contact Details</h1>
                    <p>
                        With the increased demand for the property
                        preservation service our client happily rely on
                        our service everydayget in touch with us for
                        more information.
                    </p>
                </div>
                <!-- /.col-xl-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <section class="google-map p-0">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3100.6163155347217!2d-77.37696202342615!3d39.001252271702114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b63781395b1899%3A0x2378c1ea2fc060ea!2s1309%20Shallow%20Ford%20Rd%2C%20Herndon%2C%20VA%2020170%2C%20USA!5e0!3m2!1sen!2sbd!4v1711601269784!5m2!1sen!2sbd"
            height="500"
            style="width: 100%; border: 0"
            allowfullscreen=""
            loading="lazy"
        ></iframe>
    </section>

    <section class="contact-layout1 pt-0 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="contact-panel">
                        <div class="contact__panel-info">
                            <div class="contact__panel-info-top">
                                <div class="contact-info-box">
                                    <h4 class="contact__info-box-title">
                                        Our Location
                                    </h4>
                                    <ul
                                        class="contact__info-list list-unstyled"
                                    >
                                        <li>
                                            1309 Shallow Ford Rd.
                                            Herndon, VA 20170
                                        </li>
                                    </ul>
                                    <!-- /.contact__info-list -->
                                </div>
                                <!-- /.contact-info-box -->
                                <div class="contact-info-box">
                                    <h4 class="contact__info-box-title">
                                        Quick Contact
                                    </h4>
                                    <ul
                                        class="contact__info-list list-unstyled"
                                    >
                                        <li>
                                            Email:
                                            <a
                                                href="mailto:info@experthome.services"
                                            >info@experthome.services</a
                                            >
                                        </li>
                                        <li>
                                            Phone:
                                            <br />
                                            <a
                                                href="tel:+1 571-349-8712"
                                            >+1 571-349-8712 for
                                                Maintenance</a
                                            >
                                            <br />
                                            <a
                                                href="tel:+1 871-406-2988"
                                            >+1 871-406-2988 for
                                                Preservation</a
                                            >
                                        </li>
                                    </ul>
                                    <!-- /.contact__info-list -->
                                </div>
                                <!-- /.contact-info-box -->
                            </div>
                            <!-- /.contact__panel-info-top -->
                            <div class="contact__panel-info-bottom">
                                <strong
                                    class="contact__panel-info-title"
                                >We will get back to you within 24
                                    hours, or call us Monday - Saturday
                                    from 8 AM - 6 PM.</strong
                                >
                                <div
                                    class="contact__number d-flex align-items-center"
                                >
                                    <i class="icon-phone"></i>
                                    <a href="tel:+1 871-406-2988"
                                    >+1 871-406-2988</a
                                    >
                                </div>
                            </div>
                            <!-- /.contact__panel-info-bottom -->
                        </div>
                        <!-- /.contact__panel-info -->
                        <form
                            method="post"
                            action="#"
                            id="contactForm"
                            class="contact__panel-form"
                        >
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="contact__panel-title">
                                        We want to hear from you
                                    </h4>
                                    <p
                                        class="contact__panel-desc mb-40"
                                    >
                                        With the Internet spreading
                                        linke wildfire and reaching
                                        every part of our daily life,
                                        more and more traffic is
                                        directed to websites in search
                                        for information.
                                    </p>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="Name"
                                            id="contact-name"
                                            name="contact-name"
                                            required
                                        />
                                    </div>
                                </div>
                                <!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input
                                            type="email"
                                            class="form-control"
                                            placeholder="Email"
                                            id="contact-email"
                                            name="contact-email"
                                            required
                                        />
                                    </div>
                                </div>
                                <!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="Phone"
                                            id="contact-Phone"
                                            name="contact-phone"
                                            required
                                        />
                                    </div>
                                </div>
                                <!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="Subject"
                                            id="contact-subject"
                                            name="contact-subject"
                                            required
                                        />
                                    </div>
                                </div>
                                <!-- /.col-lg-6 -->
                                <div
                                    class="col-sm-12 col-md-12 col-lg-12"
                                >
                                    <div class="form-group">
												<textarea
                                                    class="form-control"
                                                    placeholder="Additional Details!"
                                                    placeholder="Message"
                                                    id="contact-messgae"
                                                    name="contact-message"
                                                    required
                                                ></textarea>
                                    </div>
                                </div>
                                <!-- /.col-lg-12 -->
                                <div
                                    class="col-sm-12 col-md-12 col-lg-12"
                                >
                                    <button
                                        type="submit"
                                        class="btn btn__primary btn__block btn__lg"
                                    >
												<span class="mx-2">Submit</span
                                                ><i
                                            class="icon-arrow-right mx-2"
                                        ></i>
                                    </button>
                                    <div class="contact-result"></div>
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->
                        </form>
                    </div>
                    <!-- /.contact__panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

@endsection

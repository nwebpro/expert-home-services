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
                        <form
                            method="post"
                            action="#"
                            class="contact__panel-form"
                        >
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4
                                        class="contact__panel-title text-center"
                                    >
                                        Get a Quote
                                    </h4>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group select_wrap">
                                        <label for="country"
                                        >Country*</label
                                        >
                                        <select
                                            name="country"
                                            id="country"
                                            class="form-control"
                                        >
                                            <option>
                                                Select Country
                                            </option>
                                            <option value="1">
                                                USA
                                            </option>
                                            <option value="2">
                                                Canada
                                            </option>
                                            <option value="3">
                                                UK
                                            </option>
                                            <option value="4">
                                                Australia
                                            </option>
                                            <option value="5">
                                                New Zealand
                                            </option>
                                        </select>
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M18.7099 8.20998C18.6169 8.11625 18.5063 8.04186 18.3845 7.99109C18.2626 7.94032 18.1319 7.91418 17.9999 7.91418C17.8679 7.91418 17.7372 7.94032 17.6153 7.99109C17.4934 8.04186 17.3828 8.11625 17.2899 8.20998L12.7099 12.79C12.6169 12.8837 12.5063 12.9581 12.3845 13.0089C12.2626 13.0596 12.1319 13.0858 11.9999 13.0858C11.8679 13.0858 11.7372 13.0596 11.6153 13.0089C11.4934 12.9581 11.3828 12.8837 11.2899 12.79L6.70988 8.20998C6.61691 8.11625 6.50631 8.04186 6.38445 7.99109C6.26259 7.94032 6.13189 7.91418 5.99988 7.91418C5.86787 7.91418 5.73716 7.94032 5.6153 7.99109C5.49344 8.04186 5.38284 8.11625 5.28988 8.20998C5.10363 8.39734 4.99908 8.6508 4.99908 8.91498C4.99908 9.17917 5.10363 9.43262 5.28988 9.61998L9.87988 14.21C10.4424 14.7718 11.2049 15.0873 11.9999 15.0873C12.7949 15.0873 13.5574 14.7718 14.1199 14.21L18.7099 9.61998C18.8961 9.43262 19.0007 9.17917 19.0007 8.91498C19.0007 8.6508 18.8961 8.39734 18.7099 8.20998Z"
                                                fill="#374957"
                                            />
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group select_wrap">
                                        <label for="state"
                                        >State*</label
                                        >
                                        <select
                                            name="state"
                                            id="state"
                                            class="form-control"
                                        >
                                            <option>
                                                Select State
                                            </option>
                                            <option value="AL">
                                                Alabama
                                            </option>
                                            <option value="AK">
                                                Alaska
                                            </option>
                                            <option value="AZ">
                                                Arizona
                                            </option>
                                            <option value="AR">
                                                Arkansas
                                            </option>
                                            <option value="CA">
                                                California
                                            </option>
                                            <option value="CO">
                                                Colorado
                                            </option>
                                        </select>
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M18.7099 8.20998C18.6169 8.11625 18.5063 8.04186 18.3845 7.99109C18.2626 7.94032 18.1319 7.91418 17.9999 7.91418C17.8679 7.91418 17.7372 7.94032 17.6153 7.99109C17.4934 8.04186 17.3828 8.11625 17.2899 8.20998L12.7099 12.79C12.6169 12.8837 12.5063 12.9581 12.3845 13.0089C12.2626 13.0596 12.1319 13.0858 11.9999 13.0858C11.8679 13.0858 11.7372 13.0596 11.6153 13.0089C11.4934 12.9581 11.3828 12.8837 11.2899 12.79L6.70988 8.20998C6.61691 8.11625 6.50631 8.04186 6.38445 7.99109C6.26259 7.94032 6.13189 7.91418 5.99988 7.91418C5.86787 7.91418 5.73716 7.94032 5.6153 7.99109C5.49344 8.04186 5.38284 8.11625 5.28988 8.20998C5.10363 8.39734 4.99908 8.6508 4.99908 8.91498C4.99908 9.17917 5.10363 9.43262 5.28988 9.61998L9.87988 14.21C10.4424 14.7718 11.2049 15.0873 11.9999 15.0873C12.7949 15.0873 13.5574 14.7718 14.1199 14.21L18.7099 9.61998C18.8961 9.43262 19.0007 9.17917 19.0007 8.91498C19.0007 8.6508 18.8961 8.39734 18.7099 8.20998Z"
                                                fill="#374957"
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div
                                id="additionalFields"
                                style="display: none"
                            >
                                <div class="row">
                                    <div
                                        class="col-sm-6 col-md-6 col-lg-6"
                                    >
                                        <div class="form-group">
                                            <label for="name"
                                            >Name*</label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                placeholder="Name"
                                                id="name"
                                                name="name"
                                                required
                                            />
                                        </div>
                                    </div>
                                    <!-- /.col-lg-6 -->
                                    <div
                                        class="col-sm-6 col-md-6 col-lg-6"
                                    >
                                        <div class="form-group">
                                            <label for="email"
                                            >Email*</label
                                            >
                                            <input
                                                type="email"
                                                class="form-control"
                                                placeholder="Email"
                                                id="email"
                                                name="email"
                                                required
                                            />
                                        </div>
                                    </div>
                                    <!-- /.col-lg-6 -->
                                    <div
                                        class="col-sm-6 col-md-6 col-lg-6"
                                    >
                                        <div class="form-group">
                                            <label for="phone"
                                            >Phone*</label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                placeholder="Phone"
                                                id="Phone"
                                                name="phone"
                                                required
                                            />
                                        </div>
                                    </div>
                                    <!-- /.col-lg-6 -->
                                    <div
                                        class="col-sm-6 col-md-6 col-lg-6"
                                    >
                                        <div class="form-group">
                                            <label for="zip_code"
                                            >Zip Code*</label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                placeholder="Zip Code"
                                                id="zip_code"
                                                name="zip_code"
                                                required
                                            />
                                        </div>
                                    </div>

                                    <div
                                        class="col-sm-6 col-md-6 col-lg-6"
                                    >
                                        <div class="form-group">
                                            <label for="address"
                                            >Address*</label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                placeholder="Address"
                                                id="address"
                                                name="address"
                                                required
                                            />
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-6 col-md-6 col-lg-6"
                                    >
                                        <div class="form-group">
                                            <label for="photo"
                                            >Photos*</label
                                            >
                                            <input
                                                type="file"
                                                class="form-control"
                                                id="photo"
                                                name="photo"
                                                accept="image/*"
                                                required
                                            />
                                        </div>
                                    </div>
                                    <!-- /.col-lg-6 -->
                                    <div
                                        class="col-sm-12 col-md-12 col-lg-12"
                                    >
                                        <div class="form-group">
                                            <label for="problem_message"
                                            >Problem*</label
                                            >
                                            <textarea
                                                class="form-control"
                                                placeholder="Write a problem"
                                                id="problem_message"
                                                name="problem_message"
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
													<span class="mx-2"
                                                    >Submit Request</span
                                                    ><i
                                                class="icon-arrow-right mx-2"
                                            ></i>
                                        </button>
                                        <div
                                            class="contact-result"
                                        ></div>
                                    </div>
                                    <!-- /.col-lg-12 -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

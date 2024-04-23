<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="author" content="Expert Home Services LLC" />
    <meta name="description" content="Expert Home Services LLC" />
    <link href="{{('frontend/assets/images/favicon/favicon.png')}}" rel="icon" />
    <title>Home - Expert Home Services LLC</title>
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Barlow:400,500,600,700%7cRoboto:400,500,700&display=swap"
    />
    <link rel="stylesheet" href="{{('frontend/assets/css/libraries.css')}}" />
    <link rel="stylesheet" href="{{('frontend/assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{('frontend/assets/css/master.css')}}" />
    <!-- Chatbot Active -->
    <script type="text/javascript">
        window.$crisp = [];
        window.CRISP_WEBSITE_ID = '1398f27d-ee8f-4aa5-985a-35a438877894';
        (function () {
            d = document;
            s = d.createElement('script');
            s.src = 'https://client.crisp.chat/l.js';
            s.async = 1;
            d.getElementsByTagName('head')[0].appendChild(s);
        })();
    </script>
</head>

<body>
<div class="wrapper">
    <!-- Header -->
    <header class="header header-transparent header-layout1">
        <nav class="navbar navbar-expand-lg sticky-navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img
                        src="{{('frontend/assets/images/logo/logo-light.png')}}"
                        class="logo-light"
                        alt="logo"
                    />
                    <img
                        src="{{('frontend/assets/images/logo/logo-dark.png')}}"
                        class="logo-dark"
                        alt="logo"
                    />
                </a>
                <button class="navbar-toggler" type="button">
                    <span class="menu-lines"><span></span></span>
                </button>
                <div
                    class="collapse navbar-collapse"
                    id="mainNavigation"
                >
                    <ul class="navbar-nav">
                        <li class="nav__item with-dropdown">
                            <a
                                href="{{route('home')}}"
                                class="dropdown-toggle nav__item-link"
                            >Home</a
                            >
                        </li>
                        <li class="nav__item with-dropdown">
                            <a
                                href="{{route('about')}}"
                                class="dropdown-toggle nav__item-link"
                            >About Us</a
                            >
                        </li>
                        <li class="nav__item with-dropdown">
                            <a
                                href="{{route('service')}}"
                                class="dropdown-toggle nav__item-link"
                            >Services</a
                            >
                        </li>
                        <li class="nav__item with-dropdown">
                            <a
                                href="{{route('area')}}"
                                class="dropdown-toggle nav__item-link"
                            >Coverage Area</a
                            >
                        </li>
                        <li class="nav__item">
                            <a
                                href="{{route('contact')}}"
                                class="nav__item-link"
                            >Contact Us</a
                            >
                        </li>
                        <li
                            class="nav__item nav__item-btn d-none d-md-block"
                        >
                            <a
                                href="{{route('quote.page')}}"
                                class="btn btn__primary action__btn-request"
                            >
										<span>Get A Quote</span
                                        ><i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="contact__number d-flex align-items-center">
                    <i class="icon-phone"></i>
                    <a href="tel:+1 871-406-2988">+1 871-406-2988</a>
                </div>
            </div>
        </nav>
    </header>
     @yield('content')
    <!-- Footer  -->
    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div
                        class="col-sm-12 col-md-6 col-lg-6 footer__widget footer__widget-about"
                    >
                        <div class="footer__widget-content">
                            <img
                                src="{{('frontend/assets/images/logo/logo-footer.png')}}"
                                alt="logo"
                                class="mb-30"
                            />
                            <p
                                class="mb-20"
                                style="width: 100%; max-width: 400px"
                            >
                                Your Trusted Solution for Home Repairs
                                and Improvements. With a commitment to
                                excellence and customer satisfaction, we
                                offer a wide range of services including
                                renovations, plumbing, electrical work,
                                and more.
                            </p>
                            <ul class="social__icons list-unstyled">
                                <li>
                                    <a href="#"
                                    ><i class="fa fa-facebook"></i
                                        ></a>
                                </li>
                                <li>
                                    <a href="#"
                                    ><i class="fa fa-instagram"></i
                                        ></a>
                                </li>
                                <li>
                                    <a href="#"
                                    ><i class="fa fa-twitter"></i
                                        ></a>
                                </li>
                            </ul>
                            <!-- /.social-icons -->
                        </div>
                    </div>
                    <div
                        class="col-6 col-sm-6 col-md-6 col-lg-3 footer__widget footer__widget-nav"
                    >
                        <h6 class="footer__widget-title">Services</h6>
                        <div class="footer__widget-content">
                            <nav>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="{{route('service')}}"
                                        >Eviction</a
                                        >
                                    </li>
                                    <li>
                                        <a href="{{route('service')}}"
                                        >Landscaping</a
                                        >
                                    </li>
                                    <li>
                                        <a href="{{route('service')}}"
                                        >Roofing
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('service')}}"
                                        >Trash Out
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('service')}}"
                                        >Inspection</a
                                        >
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div
                        class="col-6 col-sm-6 col-md-6 col-lg-3 footer__widget footer__widget-nav"
                    >
                        <h6 class="footer__widget-title">Company</h6>
                        <div class="footer__widget-content">
                            <nav>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="{{route('home')}}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{route('about')}}"
                                        >About Us</a
                                        >
                                    </li>
                                    <li>
                                        <a href="{{route('service')}}"
                                        >Services</a
                                        >
                                    </li>
                                    <li>
                                        <a href="{{route('area')}}"
                                        >Coverage Area</a
                                        >
                                    </li>
                                    <li>
                                        <a href="{{route('contact')}}"
                                        >Contact Us</a
                                        >
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>


        <!-- /.footer-top -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div
                        class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap justify-content-center"
                    >
                        <p class="mb-0 color-white">
                            &copy; 2020 Expert Home Services LLC
                        </p>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>

    </footer>
    <!-- Scroll to top -->
    <button id="scrollTopBtn">
        <i class="fa fa-long-arrow-up"></i>
    </button>
</div>

<script src="{{('frontend/assets/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{('frontend/assets/js/plugins.js')}}"></script>
<script src="{{('frontend/assets/js/main.js')}}"></script>
<script>
    document
        .getElementById('country')
        .addEventListener('change', toggleAdditionalFields);
    document
        .getElementById('state')
        .addEventListener('change', toggleAdditionalFields);

    function toggleAdditionalFields() {
        var countryValue = document.getElementById('country').value;
        var stateValue = document.getElementById('state').value;

        // Show additional fields if both country and state are selected, else hide
        if (
            countryValue !== 'Select Country' &&
            stateValue !== 'Select State'
        ) {
            document.getElementById('additionalFields').style.display =
                'block';
        } else {
            document.getElementById('additionalFields').style.display =
                'none';
        }
    }
</script>
</body>
</html>

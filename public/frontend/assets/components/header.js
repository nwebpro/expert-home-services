class Header extends HTMLElement {
	constructor() {
		super();
	}

	connectedCallback() {
		this.innerHTML = `
			<header class="header header-transparent header-layout1">
				<nav class="navbar navbar-expand-lg sticky-navbar">
					<div class="container-fluid">
						<a class="navbar-brand" href="index.html">
							<img
								src="assets/images/logo/logo-light.png"
								class="logo-light"
								alt="logo"
							/>
							<img
								src="assets/images/logo/logo-dark.png"
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
										href="index.html"
										class="dropdown-toggle nav__item-link"
										>Home</a
									>
								</li>
								<li class="nav__item with-dropdown">
									<a
										href="about-us.html"
										class="dropdown-toggle nav__item-link"
										>About Us</a
									>
								</li>
								<li class="nav__item with-dropdown">
									<a
										href="services.html"
										class="dropdown-toggle nav__item-link"
										>Services</a
									>
								</li>
								<li class="nav__item with-dropdown">
									<a
										href="coverage-area.html"
										class="dropdown-toggle nav__item-link"
										>Coverage Area</a
									>
								</li>
								<li class="nav__item">
									<a
										href="contact-us.html"
										class="nav__item-link"
										>Contact Us</a
									>
								</li>
								<li
									class="nav__item nav__item-btn d-none d-md-block"
								>
									<a
										href="get-a-quote.html"
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
		`
	}
}


customElements.define('site-header', Header)
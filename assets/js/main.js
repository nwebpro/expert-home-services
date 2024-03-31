/*---------------------------
      Table of Contents
    --------------------
    01- Mobile Menu
    02- Sticky Navbar
    03- Scroll Top Button
    04- Set Background-img to section 
    05- Slick Carousel
    06- CounterUp
     
 ----------------------------*/

$(function () {
	'use strict';

	// Global letiables
	let $win = $(window);

	/*==========   Mobile Menu   ==========*/
	let $navToggler = $('.navbar-toggler');
	$navToggler.on('click', function () {
		$(this).toggleClass('actived');
	});
	$navToggler.on('click', function () {
		$('.navbar-collapse').toggleClass('menu-opened');
	});

	/*==========   Sticky Navbar   ==========*/
	$win.on('scroll', function () {
		if ($win.width() >= 992) {
			let $navbar = $('.sticky-navbar');
			if ($win.scrollTop() > 200) {
				$navbar.addClass('fixed-navbar');
			} else {
				$navbar.removeClass('fixed-navbar');
			}
		}
	});

	/*==========   Scroll Top Button   ==========*/
	let $scrollTopBtn = $('#scrollTopBtn');
	// Show Scroll Top Button
	$win.on('scroll', function () {
		if ($(this).scrollTop() > 700) {
			$scrollTopBtn.addClass('actived');
		} else {
			$scrollTopBtn.removeClass('actived');
		}
	});
	// Animate Body after Clicking on Scroll Top Button
	$scrollTopBtn.on('click', function () {
		$('html, body').animate(
			{
				scrollTop: 0,
			},
			500
		);
	});

	/*==========   Set Background-img to section   ==========*/
	$('.bg-img').each(function () {
		let imgSrc = $(this).children('img').attr('src');
		$(this)
			.parent()
			.css({
				'background-image': 'url(' + imgSrc + ')',
				'background-size': 'cover',
				'background-position': 'center',
			});
		$(this).parent().addClass('bg-img');
		if ($(this).hasClass('background-size-auto')) {
			$(this).parent().addClass('background-size-auto');
		}
		$(this).remove();
	});

	/*==========   Slick Carousel ==========*/
	$('.slick-carousel').slick();
	$('.slideshow').slick({
		autoplay: true,
		dots: false,
		adaptiveHeight: true,
	});

	/*==========   counterUp  ==========*/
	$('.counter').counterUp({
		delay: 10,
		time: 4000,
	});
});

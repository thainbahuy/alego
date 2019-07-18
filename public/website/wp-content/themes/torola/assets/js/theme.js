"use strict";

// PAGE TRANSITIONS
// ---------------------------------
var fadeLink = '\
a:not([target="_blank"])\
:not([href^="#"])\
:not([class*="no-redirect"])\
:not([class*="lightbox-link"])';

// prevent loading from cache
window.onpageshow = function (e) {
	if(e.persisted) window.location.reload();
}

jQuery(window).on('load', function ($) {
	var $body = jQuery('body');
	$body.addClass('page-loaded');
	$body.on('click', fadeLink, function (e) {
		//e.preventDefault();
		var link = this.href;
		// if transition support
		jQuery('#preloader').one('transitionend webkitTransitionEnd oTransitionEnd', function () {
			window.location = link;
		});
		$body.removeClass('page-loaded');
	});
});

// onScroll animations
window.addEventListener('load', function () {
	Appear.init();
});


jQuery(function ($) {

	// onepage
	if (document.querySelector('nav.onepage')) {
		new ScrollListener('nav.onepage a', {
			navigation: true
		});
	}

	// parallax folio caption
	document.querySelectorAll('.parallax-folio-item figcaption').forEach(function (caption) {
		new ScrollListener(caption, {
			onAppear: function () {
				this.classList.add('visible');
			},
			offsetBottom: 200,
			offsetTop: 200
		});
	});

	// Mob Menu Button
	$('.mob-menu').click(function(e) {
		e.preventDefault();
		$('.mob-menu').toggleClass('active');
		$('.navigation').slideToggle();
	});

	// DROPDOWN
	$('#header').on('click', 'a', function(e) {
		if(window.innerWidth>1024) return;
		var submenu = $(this).next('ul, .mega-menu');
		if(submenu.length) {
			e.preventDefault();
            e.stopPropagation();
			submenu.slideToggle();
		}
	});

	// onepage navigation
	$('.navigation.onepage').on('click', 'a', function(){
		$('.mob-menu.active').click();
	});


	// Scroll down line
	var sd = document.querySelector('.scroll-down');
	if(sd){
		sd.addEventListener('click', function(e) {
			e.preventDefault();
			var st = window.innerHeight;
			$('html, body').animate({scrollTop: st}, 1000, 'easeInOutExpo');
		});
		raf('scroll', function () {
			if(!window.pageYOffset){
				sd.classList.remove('scrolled');
			}else{
				sd.classList.add('scrolled');
			}
		});
	}



	// Hover List
	// ===========================================================================
	document.querySelectorAll('.hover-list-links').forEach(function (links) {
		document.body.classList.add('has-hover-list');
		links.querySelectorAll('.item').forEach(function (item, index) {
			item.addEventListener('mouseenter', function () {
				document.body.classList.add('hover-item-active', 'hover-links-active');
				document.querySelector('.hover-list-media').swiper.slideTo(index);
			});
		});
		links.addEventListener('mouseleave', function () {
			document.body.classList.remove('hover-links-active');
		});
	});

	// Entrance
	if( document.querySelector('.entrance') ) {
		document.body.classList.add('has-entrance');
	}

	// Portfolio With Background Blur
	var bgBlur = document.querySelector('.background-scroll-blur');
	if(bgBlur){
		var cl = bgBlur.classList, cln = 'blurred';               
		window.raf('scroll', function () {
			window.pageYOffset > 50 ? cl.add(cln) : cl.remove(cln);
		});
	}

});

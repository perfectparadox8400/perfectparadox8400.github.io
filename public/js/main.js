(function ($) {
	"use strict";

	// Initiate the wowjs animation library
	new WOW().init();

	// Smooth scroll for the navigation and links with .scrollto classes
	$(".main-nav a, .mobile-nav a, .scrollto").on("click", function () {
		if (
			location.pathname.replace(/^\//, "") ==
			this.pathname.replace(/^\//, "") &&
			location.hostname == this.hostname
		) {
			var target = $(this.hash);
			if (target.length) {
				var top_space = 20;

				if ($("#header").length) {
					top_space = $("#header").outerHeight();

					if (!$("#header").hasClass("header-scrolledd")) {
						top_space = top_space - 0;
					}
				}

				$("html, body").animate(
					{
						scrollTop: target.offset().top - top_space,
					},
					1500,
					"easeInOutExpo"
				);

				if ($(this).parents(".main-nav, .mobile-nav").length) {
					$(".main-nav .active, .mobile-nav .active").removeClass("active");
					$(this).closest("li").addClass("active");
				}

				if ($("body").hasClass("mobile-nav-active")) {
					$("body").removeClass("mobile-nav-active");
					$(".mobile-nav-toggle i").toggleClass("fa-times fa-bars");
					$(".mobile-nav-overly").fadeOut();
				}
				return false;
			}
		}
	});

	// Navigation active state on scroll
	var nav_sections = $("section");
	var main_nav = $(".main-nav, .mobile-nav");
	var main_nav_height = $("#header").outerHeight();

	$(window).on("scroll", function () {
		var cur_pos = $(this).scrollTop();

		nav_sections.each(function () {
			var top = $(this).offset().top - main_nav_height,
				bottom = top + $(this).outerHeight();

			if (cur_pos >= top && cur_pos <= bottom) {
				main_nav.find("li").removeClass("active");
				main_nav
					.find('a[href="#' + $(this).attr("id") + '"]')
					.parent("li")
					.addClass("active");
			}
		});
	});

	$(".testimonials-carousel").owlCarousel({
		autoplay: true,
		dots: true,
		loop: true,
		lazyLoad: true,
		items: 1,
		autoplayTimeout: 5000,
	});
})(jQuery);
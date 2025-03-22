(function ($) {
	"use strict";

	// Back to top button
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$(".back-to-top").fadeIn("slow");
		} else {
			$(".back-to-top").fadeOut("slow");
		}
	});
	$(".back-to-top").click(function () {
		$("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
		return false;
	});

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

	// jQuery counterUp (used in Whu Us section)
	$('[data-toggle="counter-up"]').counterUp({
		delay: 10,
		time: 1000,
	});

	// Testimonials carousel (uses the Owl Carousel library)
	$(".testimonials-carousel").owlCarousel({
		autoplay: true,
		dots: true,
		loop: true,
		lazyLoad: true,
		items: 1,
		autoplayTimeout: 4000,
	});
})(jQuery);

$(window).load(function () {
	$(".trigger_popup_fricc").click(function () {
		$(".hover_bkgr_fricc").show();
	});
	$(".hover_bkgr_fricc").click(function () {
		$(".hover_bkgr_fricc").hide();
	});
	$(".popupCloseButton").click(function () {
		$(".hover_bkgr_fricc").hide();
	});
});

function externalLinks() {
	for (var c = document.getElementsByTagName("a"), a = 0; a < c.length; a++) {
		var b = c[a];
		b.getAttribute("href") &&
			b.hostname !== location.hostname &&
			(b.target = "_blank");
	}
}

externalLinks();

function disableScrolling() {
	var x = window.scrollX;
	var y = window.scrollY;
	window.onscroll = function () {
		window.scrollTo(x, y);
	};
	$("body").bind("touchmove", function (e) {
		e.preventDefault();
	});
}

function enableScrolling() {
	window.onscroll = function () { };
	$("body").unbind("touchmove");
}

disableScrolling();

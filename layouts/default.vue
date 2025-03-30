<style>
@import url("~/assets/css/main.css");
</style>
<template>
    <div>
        <Navbar/>
        <slot/>
        <Footer/>
        <Back2Top/>
    </div>
</template>
<script>
export default {
    mounted() {
        if ($('.main-nav').length) {

            $(document).on('click', '.mobile-nav-toggle', function (e) {
                $('body').toggleClass('mobile-nav-active');
                $('.mobile-nav-toggle span.x').toggleClass('hide');
                $('.mobile-nav-toggle span.bars').toggleClass('hide');
                $('.mobile-nav-overly').fadeToggle(250);
            });

            $(document).on('click', '.mobile-nav .drop-down > a', function (e) {
                e.preventDefault();
                $(this).next().slideToggle(300);
                $(this).parent().toggleClass('active');
            });

            $(document).on('click', function (e) {
                var container = $(".mobile-nav, .mobile-nav-toggle");
                if (!container.is(e.target) && container.has(e.target).length === 0) {
                    if ($('body').hasClass('mobile-nav-active')) {
                        $('body').removeClass('mobile-nav-active');
                        $('.mobile-nav-toggle span.x').toggleClass('hide');
                        $('.mobile-nav-toggle span.bars').toggleClass('hide');
                        $('.mobile-nav-overly').fadeOut();
                    }
                }
            });
        } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
            $(".mobile-nav, .mobile-nav-toggle").hide();
        }
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
                        $('.mobile-nav-toggle span.x').toggleClass('hide');
                        $('.mobile-nav-toggle span.bars').toggleClass('hide');
                        $(".mobile-nav-overly").fadeOut();
                    }
                    return false;
                }
            }
        });

        $(window).on("scroll", function () {
            scrollHighlight();
        });

        function scrollHighlight() {
            var nav_sections = $("section");
            var main_nav = $(".main-nav, .mobile-nav");
            var main_nav_height = 80;
            var cur_pos = $(document).scrollTop();
            if (cur_pos > 100) {
                main_nav_height = 60;
            }
            main_nav_height += window.innerHeight/2;
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
        }

        scrollHighlight();
    },
};
</script>
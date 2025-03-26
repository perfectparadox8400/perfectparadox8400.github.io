<style>
@import url("~/assets/css/main.css");
</style>
<template>
    <div>
        <Navbar />
        <slot />
    </div>
</template>
<script>
useHead({
    link: [
        { rel: 'stylesheet', href: 'lib/animate/animate.min.css' },
        { rel: 'stylesheet', href: 'lib/ionicons/css/ionicons.min.css' },
        { rel: 'stylesheet', href: 'lib/owlcarousel/assets/owl.carousel.min.css' },
        { rel: 'stylesheet', href: 'lib/lightbox/css/lightbox.min.css' }
    ],
    script: [
        { src: 'lib/jquery/jquery.min.js' },
        { src: 'lib/jquery/jquery-migrate.min.js' },
        { src: 'lib/easing/easing.min.js' },
        { src: 'lib/mobile-nav/mobile-nav.js' },
        { src: 'lib/wow/wow.min.js' },
        { src: 'lib/waypoints/waypoints.min.js' },
        { src: 'lib/counterup/counterup.min.js' },
        { src: 'lib/owlcarousel/owl.carousel.min.js' },
        { src: 'lib/isotope/isotope.pkgd.min.js' },
        { src: 'lib/lightbox/js/lightbox.min.js' },
        { src: 'js/main.js' }
    ],
});
</script>
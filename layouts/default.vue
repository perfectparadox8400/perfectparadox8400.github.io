<style>
    @import url("~/assets/css/my.css");
    @import url("~/assets/css/style.css");
</style>
<template>
    <div>
        <Navbar />
        <h1>Default Layout</h1>
    </div>
</template>
<script>
    useHead({
        link: [
            { rel: 'stylesheet', href: 'lib/bootstrap/css/bootstrap.min.css' },
            { rel: 'stylesheet', href: 'lib/font-awesome/css/font-awesome.min.css' },
            { rel: 'stylesheet', href: 'lib/animate/animate.min.css' },
            { rel: 'stylesheet', href: 'lib/ionicons/css/ionicons.min.css' },
            { rel: 'stylesheet', href: 'lib/owlcarousel/assets/owl.carousel.min.css' },
            { rel: 'stylesheet', href: 'lib/lightbox/css/lightbox.min.css' }
        ],
        script: [
            { src: 'lib/jquery/jquery.min.js' },
            { src: 'lib/jquery/jquery-migrate.min.js' },
        ],
    })
</script>
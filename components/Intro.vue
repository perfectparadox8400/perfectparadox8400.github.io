<template>
    <div class="main-pages background">
        <section id="intro" class="clearfix intro">
            <div class="container">
                <div class="intro-img">
                    <NuxtImg :src=website.home.team alt="team" class="img-fluid" format="webp" quality="100" :placeholder="[1920, 1080, 75, 5]" />
                </div>
                <div class="intro-info">
                    <h2></h2>
                    <h2></h2>
                    <h2>{{ website.home.title }}<br></h2>
                    <div>
                        <h5 style="color:white;">{{ website.home.subtitle }}</h5>
                        <a href="#about" class="btn-get-started scrollto">About</a>
                        <a href="#contact" class="btn-services scrollto">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script setup>
    import website from '../website.json';
</script>

<style scoped>
.background {
    background: url("/img/intro-bg.svg") center bottom no-repeat;
    background-size: cover;
    width: 100%;
    height: 90svh;
}

.intro {
    padding: 180px 0 60px 0;
}

.intro .intro-img {
    width: 50%;
    float: right;
}

.intro .intro-img img {
    border: #fff solid 2px;
    border-radius: 5px;
}

.intro .intro-info {
    width: 50%;
    float: left;
}

.intro .intro-info h2 {
    color: #fff;
    margin-bottom: 40px;
    font-size: 48px;
    font-weight: 700;
}

.intro .intro-info h2 span {
    color: #74b5fc;
    text-decoration: underline;
}

.intro .intro-info .btn-get-started,
.intro .intro-info .btn-services {
    font-family: "Montserrat", sans-serif;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 1px;
    display: inline-block;
    padding: 10px 32px;
    border-radius: 50px;
    transition: 0.5s;
    margin: 5px 20px 20px 20px;
    color: #fff;
}

.intro .intro-info .btn-get-started {
    background: #910bd4;
    border: 2px solid #910bd4;
    color: #fff;
}

.intro .intro-info .btn-get-started:hover {
    background: none;
    border-color: #fff;
    color: #fff;
}

.intro .intro-info .btn-services {
    border: 2px solid #fff;
}

.intro .intro-info .btn-services:hover {
    background: #910bd4;
    border-color: #910bd4;
    color: #fff;
}

.img-fluid {
    max-width: 100%;
    height: auto;
}

@media (max-width: 991px) {
    .intro {
        padding: 60px 0 60px 0;
    }

    .intro .intro-img {
        width: 65%;
        float: none;
        margin: 0 auto 25px auto;
    }

    .intro .intro-info {
        width: 70%;
        float: none;
        margin: auto;
        text-align: center;
    }
}

@media (max-width: 767px) {
    .intro {
        padding: 120px 0 40px 0;
    }

    .intro .intro-info {
        width: 100%;
    }

    .intro .intro-info h2 {
        font-size: 34px;
        margin-bottom: 30px;
    }
}

@media (max-width: 574px) {
    .intro {
        padding: 120px 0 20px 0;
    }
}
</style>
<template>
    <section id="intro" class="clearfix main-pages intro">
        <div class="container">
            <div class="intro-img">
                <img src="/img/team.png" alt="" class="img-fluid">
            </div>
            <div class="intro-info">
                <h2></h2>
                <h2></h2>
                <h2>We are Team 8400<br>Perfect Paradox<br></h2>
                <div>
                    <h5 style="color:white;">A FTC Team From Cedar City, Utah</h5>
                    <a href="#about" class="btn-get-started scrollto">About</a>
                    <a href="#contact" class="btn-services scrollto">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
.intro {
    width: 100%;
    position: relative;
    background: url("/img/intro-bg.svg") center bottom no-repeat;
    background-size: cover;
    padding: 200px 0;
    height: 85svh;
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
    margin: 0 20px 20px 0;
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
        padding: 110px 0 60px 0;
    }

    .intro .intro-img {
        width: 80%;
        float: none;
        margin: 0 auto 25px auto;
    }

    .intro .intro-info {
        width: 80%;
        float: none;
        margin: auto;
        text-align: center;
    }
}

@media (max-width: 767px) {
    .intro {
        padding: 180px 0 40px 0;
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
        padding: 140px 0 20px 0;
    }
}
</style>
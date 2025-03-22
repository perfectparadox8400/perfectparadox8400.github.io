<template>
    <div>
        <button ref="mobileNav" type="button" class="mobile-nav-toggle d-lg-none navbar-size load-hide"><i class="fa fa-bars"></i></button>
        <header ref="header" class="fixed-top header">
            <div class="container">
                <div ref="loadingBox" class="loading">
                    <div class="logo-box">
                        <img ref="logo" src="/img/logo.png" class="zoom navbar-size">
                    </div>
                    <div ref="title" class="title load-hide">
                        <a href="/">&nbsp;Perfect Paradox 8400</a>
                    </div>
                    <div ref="loadbar" class="loadbar">
                        <div ref="bar" class="loading-bar">&nbsp;Loading...</div>
                        <p>&nbsp;</p>
                    </div>
                </div>
                <nav ref="nav" class="main-nav d-none d-lg-block navbar load-hide">
                    <ul>
                        <li class="drop-down"><a>Home</a>
                            <ul>
                                <li><a href="#about">About Us</a></li>
                                <li><a href="#testimonials">Members</a></li>
                                <li><a href="#portfolio">Portfolio</a></li>
                                <li><a href="#team">Team</a></li>
                                <li><a href="#clients">Sponsors</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </li>
                        <li class="drop-down"><a>FIRST</a>
                            <ul>
                                <li><a href="https://www.firstinspires.org/robotics/fll">FIRST ® LEGO® League</a></li>
                                <li><a href="https://www.firstinspires.org/robotics/ftc">FIRST ® Tech Challenge</a></li>
                                <li><a href="https://www.firstinspires.org/robotics/frc">FIRST ® Robotics
                                        Competition</a>
                                </li>
                            </ul>
                        </li>
                        <li class="drop-down"><a>More</a>
                            <ul>
                                <li><a href="https://perfectparadox8400.wixsite.com/mysite">Old Website</a></li>
                            </ul>
                        </li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </div>
</template>

<script setup>
const nav = ref(null);
const mobileNav = ref(null);
const header = ref(null);
const logo = ref(null);
const title = ref(null);
const loadbar = ref(null);
const bar = ref(null);
const loadingBox = ref(null);
let loading = null;
let loadingProgress = 0;

const loadingTimer = () => {
    if (loadingProgress > 90) {
        stoploading();
    } else {
        loadingProgress += 6.25;
        bar.value.style.width = loadingProgress + '%';
    }
};

const stoploading = () => {
  if (loading) {
    clearInterval(loading);
    loading = null;
  }
};

onMounted(async () => {
    loading = setInterval(loadingTimer, 1000);
    loaded();
});

const loaded = () => {
    bar.value.style.width = '100%';
    setTimeout(async () => {
        loadbar.value?.classList.add('loadbar-hide');
    }, 250);
    setTimeout(async () => {
        await nextTick();
        header.value?.classList.add('navbar-size');
        nav.value?.classList.remove('hide');
        logo.value?.classList.remove('zoom');
        loadingBox.value?.classList.remove('loading');
        loadingBox.value?.classList.add('logo');
        enableScrolling();
        setTimeout(() => {
            title.value?.classList.remove('load-hide');
            nav.value?.classList.remove('load-hide');
            mobileNav.value?.classList.remove('load-hide');
        }, 500);
    }, 750);
};
</script>

<style scoped>
@keyframes zoom {
    0% {
        -webkit-transform: scale(1);
    }

    50% {
        -webkit-transform: scale(1.05);
    }

    100% {
        -webkit-transform: scale(1);
    }
}

.header {
    width: 100%;
    z-index: 997;
    transition: all 1s;
    padding: 0;
    background: #fff;
    box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.3);
    position: fixed;
    top: 0;
    left: 0;
    padding-left: -15px;
    height: 100svh
}

.navbar-size {
    height: 80px;
}

.navbar-small-size {
    height: 60px;
}

.title {
    display: inline-block;
    vertical-align: center;
    transition: all 1s ease;
    opacity: 1;
    transform: translateY(0);
}

.title a {
    font-size: 18px;
    margin: 0;
    padding: 0;
    line-height: 1;
    font-weight: 400;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: #5e068a;
}

.loading {
    height: 100svh;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    justify-content: center;
    text-align: center;
    padding: 10svh 0;
}

.logo {
    float: left;
    display: flex;
    align-items: center;
}

.logo-box img {
    transition: all 1s;
}

.zoom {
    max-height: 80svh;
    max-width: 80svh;
    margin: auto;
    height: 100svh;
    -webkit-animation: zoom 1.5s linear infinite;
    animation: zoom 1.5s linear infinite;
}

@media (max-width: 991px) {
    .zoom {
        max-height: 60svh;
        max-width: 60svh;
    }
}

@media (max-width: 767px) {
    .zoom {
        max-height: 40svh;
        max-width: 40svh;
    }
}

@media (max-width: 574px) {
    .zoom {
        max-height: 30svh;
        max-width: 30svh;
    }
}

.loadbar {
    transition: all 1s;
    background-color: #afb0b3;
    height: auto;
    border-radius: 5px;
    position: relative;
    opacity: 1;
}

.loadbar p {
    margin: 0;
}

.loading-bar {
    width: 0%;
    background-color: #7f26d3;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 0;
    border-radius: 5px;
    color: #fff;
    transition: all 0.5s;
    text-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
}

.navbar {
    height: 80px;
    z-index: 997;
    padding: 20px 0;
    float: right;
    transition: all 1s ease;
    opacity: 1;
    transform: translateY(0);
}

.load-hide {
    opacity: 0;
    transform: translateY(-100%);
}

.loadbar-hide {
    opacity: 0;
}

#headerrr.header-scrolledd {
  height: 60px;   
}

#headerr.header-scrolleddd {
  width: 60px;   
}

#headerr {
  width: 80px;   
  transition: all 0.5s;  
}

.header.header-scrolled,
.header.header-pages {
  height: 66px;
  padding: 10px 0;
  transition: all 0.5s;
}
</style>
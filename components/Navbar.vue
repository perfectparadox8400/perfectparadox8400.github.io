<template>
    <div>
        <button ref="mobileNav" type="button" class="mobile-nav-toggle d-lg-none navbar-size load-hide"><i class="fa fa-bars"></i></button>
        <header ref="header" id="header" class="fixed-top header">
            <div class="container" style="height: 100%;">
                <div ref="loadingBox" class="loading">
                    <div class="logo-box">
                        <img :src="img(website.logo, { format: 'webp', quality: 100})" ref="logo" class="zoom navbar-size" alt="logo" />
                    </div>
                    <div ref="title" class="title load-hide">
                        <a href="/">&nbsp;{{ website.name }}</a>
                    </div>
                    <div ref="loadbar" class="loadbar">
                        <div ref="bar" class="loading-bar">&nbsp;Loading...</div>
                        <p>&nbsp;</p>
                    </div>
                </div>
                <nav ref="nav" class="main-nav d-none d-lg-block navbar load-hide">
                    <ul>
                        <li v-for="item in website.menu" :key="item.title || item.name" :class="{ 'drop-down': item.subMenu }">
                            <a :href="item.url || '#'">{{ item.title || item.name }}</a>
                            <ul v-if="item.subMenu">
                                <li v-for="subItem in item.subMenu" :key="subItem.name">
                                    <a :href="subItem.url">{{ subItem.name }}</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
    </div>
</template>

<script setup>
import website from '../website.json';
const img = useImage();

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

const handleScroll = () => {
    if (window.scrollY > 100) {
        header.value?.classList.add('navbar-small-size');
        logo.value?.classList.add('navbar-small-size');
        mobileNav.value?.classList.add('navbar-small-size');
        nav.value?.classList.add('nav-size');
    } else {
        header.value?.classList.remove('navbar-small-size');
        logo.value?.classList.remove('navbar-small-size');
        mobileNav.value?.classList.remove('navbar-small-size');
        nav.value?.classList.remove('nav-size');
    }
};

onMounted(async () => {
    loading = setInterval(loadingTimer, 1000);
    loaded();
});

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
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
        loadingBox.value?.classList.add('loading-done');
        loadingBox.value?.classList.add('logo');
        enableScrolling();
        setTimeout(() => {
            title.value?.classList.remove('load-hide');
            nav.value?.classList.remove('load-hide');
            mobileNav.value?.classList.remove('load-hide');
            window.addEventListener('scroll', handleScroll);
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
    padding-right: 30px;
}

.title a {
    font-size: 16px;
    margin: 0;
    padding: 0;
    line-height: 1;
    font-weight: 500;
    text-transform: uppercase;
    color: #5e068a;
    font-family: "Montserrat", sans-serif;
}

.loading {
    height: 100%;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    justify-content: center;
    text-align: center;
    padding: 10svh 0;
}

.loading-done {
    flex-direction: row;
    padding: 0;
}

.logo {
    float: left;
    display: flex;
    align-items: center;
}

.logo-box img {
    transition: all 1s;
    max-width: 90svh;
    max-height: 90svh;
}

.zoom {
    margin: auto;
    height: 80svh;
    -webkit-animation: zoom 1.5s linear infinite;
    animation: zoom 1.5s linear infinite;
}

@media (max-width: 991px) {
    .logo-box img {
        max-width: 70svh;
        max-height: 70svh;
    }

    .zoom {
        max-height: 60svh;
        max-width: 60svh;
    }
}

@media (max-width: 767px) {
    .logo-box img {
        max-width: 50svh;
        max-height: 50svh;
    }

    .zoom {
        max-height: 40svh;
        max-width: 40svh;
    }
}

@media (max-width: 574px) {
    .logo-box img {
        max-width: 40svh;
        max-height: 40svh;
    }

    .zoom {
        max-height: 30svh;
        max-width: 30svh;
    }
}

.loadbar {
    transition: all 0.75s;
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

.nav-size {
    padding: 10px 0;
}

.load-hide {
    opacity: 0;
    transform: translateY(-100%);
}

.loadbar-hide {
    opacity: 0;
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
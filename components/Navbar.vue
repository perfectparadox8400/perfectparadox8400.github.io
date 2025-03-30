<template>
    <div>
        <button ref="mobileNav" type="button" class="mobile-nav-toggle d-lg-none navbar-size load-hide">
            <Icon name="octicon:three-bars" class="bars" />
            <Icon name="octicon:x-12" class="x hide" />
        </button>
        <header ref="header" id="header" class="fixed-top header">
            <div class="container" style="height: 100%;">
                <div ref="loadingBox" class="loading">
                    <div class="logo-box">
                        <img :src="website.logo" ref="logo" class="zoom navbar-size" alt="logo" />
                    </div>
                    <div ref="title" class="title load-hide">
                        <a href="/">&nbsp;{{ website.name }}</a>
                    </div>
                    <div ref="loadbar" class="loadbar">
                        <div ref="bar" class="loading-bar loading-bar-animated">&nbsp;</div>
                        <div ref="barDone" class="loading-bar no-transition">&nbsp;</div>
                        <div class="loading-bar">&nbsp;Loading...</div>
                        <p>&nbsp;</p>
                    </div>
                </div>
                <nav ref="nav" class="main-nav d-none d-lg-block navbar load-hide">
                    <ul>
                        <li v-for="item in website.menu" :key="item.title || item.name"
                            :class="{ 'drop-down': item.subMenu }">
                            <a v-bind="item.url === false ? {} : { href: item.url || '#' }">{{ item.title || item.name
                                }}
                                <Icon v-if="item.url === false" name="octicon:chevron-down-12" class="down" />
                                <Icon v-if="item.url === false" name="octicon:chevron-up-12" class="up" />
                            </a>
                            <ul v-if="item.subMenu">
                                <li v-for="subItem in item.subMenu" :key="subItem.name">
                                    <a :href="subItem.url" :target="subItem.target">{{ subItem.name }}</a>
                                </li>
                            </ul>
                        </li>
                        <Icon class="color-picker" :name="colorTheme" @click="changeColor" />
                    </ul>
                </nav>
            </div>
        </header>
        <div class="mobile-nav-overly"></div>
        <nav class="mobile-nav d-lg-none">
            <ul>
                <li v-for="item in website.menu" :key="item.title || item.name" :class="{ 'drop-down': item.subMenu }">
                    <a v-bind="item.url === false ? {} : { href: item.url || '#' }">{{ item.title || item.name }}
                        <Icon v-if="item.url === false" name="octicon:chevron-down-12" class="down" />
                        <Icon v-if="item.url === false" name="octicon:chevron-up-12" class="up" />
                    </a>
                    <ul v-if="item.subMenu">
                        <li v-for="subItem in item.subMenu" :key="subItem.name">
                            <a :href="subItem.url" :target="subItem.target">{{ subItem.name }}</a>
                        </li>
                    </ul>
                </li>
                <Icon class="color-picker" :name="colorTheme" @click="changeColor" />
            </ul>
        </nav>
    </div>
</template>

<script setup>
import website from '../website.json';

const nav = ref(null);
const mobileNav = ref(null);
const header = ref(null);
const logo = ref(null);
const title = ref(null);
const loadbar = ref(null);
const bar = ref(null);
const barDone = ref(null);
const loadingBox = ref(null);
const colorMode = useColorMode();
const colorTheme = ref("line-md:sunny-loop");

const getIconName = () => {
    return colorMode.preference === 'dark' ? "line-md:moon-loop" : colorMode.preference === 'light' ? "line-md:sunny-loop" : "line-md:monitor";
}

const changeColor = () => {
    if (colorMode.preference === 'light') {
        colorMode.preference = 'dark';
        colorTheme.value = "line-md:moon-loop";
    } else if (colorMode.preference === 'dark') {
        colorMode.preference = 'system';
        colorTheme.value = "line-md:monitor";
    } else {
        colorMode.preference = 'light';
        colorTheme.value = "line-md:sunny-loop";
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
    colorTheme.value = getIconName();
    await nextTick();
    setTimeout(async () => {
        loaded();
    }, 1000);
});

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
});

const loaded = () => {
    barDone.value.style.width = window.getComputedStyle(bar.value).width;
    bar.value?.classList.add('loading-bar-done-important');
    setTimeout(async () => {
        barDone.value?.classList.add('loading-bar-done');
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
            $("body").addClass('scroll');
            setTimeout(() => {
                title.value?.classList.remove('load-hide');
                nav.value?.classList.remove('load-hide');
                mobileNav.value?.classList.remove('load-hide');
                window.addEventListener('scroll', handleScroll);
                loadbar.value?.classList.add('hide');
            }, 500);
        }, 750);
    }, 250);
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
    transition: height 1s;
    padding: 0;
    background: #fff;
    box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.3);
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
}

.dark-mode .header {
    background: #000;
    box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.3);
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
    padding-right: 36px;
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

.dark-mode .title a {
    color: #D16DFD;
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

@media (max-width: 374px) {
    .logo-box img {
        max-width: 30svh;
        max-height: 30svh;
    }

    .zoom {
        max-height: 20svh;
        max-width: 20svh;
    }

    .title a {
        font-size: 14px;
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

.dark-mode .loadbar {
    background-color: #2a2a2a;
}

.loadbar p {
    margin: 0;
}

.loading-bar {
    background-color: #7f26d3;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 0;
    border-radius: 5px;
    color: #fff;
    transition: width 0.5s;
    text-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
    width: 0%;
}

.loading-bar-animated {
    animation: loadingAnimation 38s forwards;
}

@keyframes loadingAnimation {

    0%,
    5% {
        width: 0%;
    }

    5%,
    10% {
        width: 5%;
    }

    10%,
    15% {
        width: 10%;
    }

    15%,
    20% {
        width: 15%;
    }

    20%,
    25% {
        width: 20%;
    }

    25%,
    30% {
        width: 25%;
    }

    30%,
    35% {
        width: 30%;
    }

    35%,
    40% {
        width: 35%;
    }

    40%,
    45% {
        width: 40%;
    }

    45%,
    50% {
        width: 45%;
    }

    50%,
    55% {
        width: 50%;
    }

    55%,
    60% {
        width: 55%;
    }

    60%,
    65% {
        width: 60%;
    }

    65%,
    70% {
        width: 65%;
    }

    70%,
    75% {
        width: 70%;
    }

    75%,
    80% {
        width: 75%;
    }

    80%,
    85% {
        width: 80%;
    }

    85%,
    90% {
        width: 85%;
    }

    90%,
    100% {
        width: 90%;
    }
}

.no-transition {
    transition: none;
}

.loading-bar-done {
    transition: width 0.5s;
    width: 100% !important;
}

.loading-bar-done-important {
    background-color: transparent !important;
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
</style>
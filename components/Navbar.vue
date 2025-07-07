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
                        <img :src="website.logo" ref="logo" class="zoom navbar-size" alt="logo" @click="lightning" />
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
                            <template v-if="isLocalLink(item.url)">
                                <NuxtLink :to="item.url">{{ item.title || item.name }}
                                    <Icon v-if="item.subMenu" name="octicon:chevron-down-12" class="down" />
                                    <Icon v-if="item.subMenu" name="octicon:chevron-up-12" class="up" />
                                </NuxtLink>
                            </template>
                            <template v-else>
                                <a test="hhj" v-bind="item.url === false ? {} : { href: item.url || '#' }">{{ item.title ||
                                    item.name }}
                                    <Icon v-if="item.subMenu" name="octicon:chevron-down-12" class="down" />
                                    <Icon v-if="item.subMenu" name="octicon:chevron-up-12" class="up" />
                                </a>
                            </template>
                            <ul v-if="item.subMenu">
                                <li v-for="subItem in item.subMenu" :key="subItem.name || subItem.title"
                                    :class="{ 'drop-down': subItem.subMenu }">
                                    <template v-if="isLocalLink(subItem.url)">
                                        <NuxtLink :to="subItem.url">{{ subItem.name || subItem.title }}</NuxtLink>
                                    </template>
                                    <template v-else>
                                        <a v-if="subItem.name" :href="subItem.url" :target="subItem.target">{{
                                            subItem.name
                                            }}</a>
                                        <a v-else-if="subItem.title"
                                            v-bind="subItem.url === false ? {} : { href: subItem.url || '#' }">
                                            {{ subItem.title }}
                                            <Icon v-if="subItem.subMenu" name="octicon:chevron-down-12" class="down" />
                                            <Icon v-if="subItem.subMenu" name="octicon:chevron-up-12" class="up" />
                                        </a>
                                    </template>
                                    <ul v-if="subItem.title">
                                        <li v-for="subSubItem in subItem.subMenu" :key="subSubItem.name">
                                            <a :href="subSubItem.url" :target="subSubItem.target">{{ subSubItem.name
                                            }}</a>
                                        </li>
                                    </ul>
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
                    <a v-bind="item.url === false ? {} : { href: item.url || '#' }">{{ item.title || item.name
                    }}
                        <Icon v-if="item.subMenu" name="octicon:chevron-down-12" class="down" />
                        <Icon v-if="item.subMenu" name="octicon:chevron-up-12" class="up" />
                    </a>
                    <ul v-if="item.subMenu">
                        <li v-for="subItem in item.subMenu" :key="subItem.name || subItem.title"
                            :class="{ 'drop-down': subItem.subMenu }">
                            <a v-if="subItem.name" :href="subItem.url" :target="subItem.target">{{ subItem.name }}</a>
                            <a v-else-if="subItem.title"
                                v-bind="subItem.url === false ? {} : { href: subItem.url || '#' }">
                                {{ subItem.title }}
                                <Icon v-if="subItem.subMenu" name="octicon:chevron-down-12" class="down" />
                                <Icon v-if="subItem.subMenu" name="octicon:chevron-up-12" class="up" />
                            </a>
                            <ul v-if="subItem.title">
                                <li v-for="subSubItem in subItem.subMenu" :key="subSubItem.name">
                                    <a :href="subSubItem.url" :target="subSubItem.target">{{ subSubItem.name }}</a>
                                </li>
                            </ul>
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

const isLocalLink = (url) => {
    return url && !url.startsWith('http') && !url.startsWith('mailto:') && !url.startsWith('tel:') && !url.startsWith('#');
};

const getIconName = () => {
    return colorMode.preference === 'dark' ? "line-md:moon-loop" : colorMode.preference === 'light' ? "line-md:sunny-loop" : "line-md:monitor";
};

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

const lightning = () => {
    console.log('Easter Egg Lightning!');
    logo.value.src = "/img/logo-lightning.gif";
    setTimeout(() => {
        logo.value.src = website.logo;
    }, 5000);
};

onMounted(async () => {
    colorTheme.value = getIconName();
    loaded();
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
@import url("~/assets/css/navbar.css");
</style>
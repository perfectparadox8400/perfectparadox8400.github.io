<style>
@import url("~/assets/css/main.css");
</style>

<template>
    <div class="loading-page">
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
                    <div class="loading-bar">&nbsp;Redirecting...</div>
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import website from '../website.json';
const { $setTitle } = useNuxtApp();

$setTitle('Wix');

definePageMeta({
    layout: 'none',
})

onMounted(() => {
    setTimeout(() => {
        window.location.href = '/';
    }, 16000);
});
</script>

<style scoped>
@import url("~/assets/css/navbar.css");

.loading-page {
    width: 100%;
    height: 100vh;
    background-color: #fff;
}

.dark-mode .loading-page {
    background-color: #000;
}

.loading-bar-animated {
    animation: loadingAnimation 19s forwards;
}

@keyframes loadingAnimation {
    0%,
    5% {
        width: 0%;
    }

    5%,
    10% {
        width: 5.5%;
    }

    10%,
    15% {
        width: 11%;
    }

    15%,
    20% {
        width: 16.5%;
    }

    20%,
    25% {
        width: 22%;
    }

    25%,
    30% {
        width: 27.5%;
    }

    30%,
    35% {
        width: 33%;
    }

    35%,
    40% {
        width: 38.5%;
    }

    40%,
    45% {
        width: 44%;
    }

    45%,
    50% {
        width: 49.5%;
    }

    50%,
    55% {
        width: 55%;
    }

    55%,
    60% {
        width: 60.5%;
    }

    60%,
    65% {
        width: 66%;
    }

    65%,
    70% {
        width: 71.5%;
    }

    70%,
    75% {
        width: 77%;
    }

    75%,
    80% {
        width: 82.5%;
    }

    80%,
    85% {
        width: 88%;
    }

    85%,
    90% {
        width: 93.5%;
    }

    90%,
    100% {
        width: 100%;
    }
}
</style>
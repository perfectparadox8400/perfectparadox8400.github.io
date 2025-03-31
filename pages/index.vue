<template>
    <Intro />
    <About />
    <Team />
    <Contact />
    <Sponsors />
</template>

<script setup>
const { $setTitle } = useNuxtApp();

$setTitle('Home');
</script>
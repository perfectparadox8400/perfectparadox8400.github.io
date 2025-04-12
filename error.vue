<template>
    <NuxtLayout>
        <div class="errorPage">
            <h1 class="errorMessage">{{ (props.error?.statusCode?.toString() || 'Error') + ' - ' + (props.error?.message || 'An error occurred') }}</h1>
            <NuxtLink to="/" class="btn-get-started">Go Home</NuxtLink>
        </div>
    </NuxtLayout>
</template>

<script setup lang="ts">
import type { NuxtError } from '#app'

const props = defineProps({
    error: Object as () => NuxtError
})

const { $setTitle } = useNuxtApp() as unknown as { $setTitle: (title: string) => void };
$setTitle(props.error?.statusCode?.toString() || 'Error');
</script>

<style scoped>
.errorMessage {
    font-size: 2em;
    margin: 0;
    margin-top: 1em;
    margin-bottom: 1em;
}

.errorPage {
    background-color: #fff;
    text-align: center;
    height: calc(100vh - (458.5px + 30px) - 60px);
    margin-top: 60px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.dark-mode .errorPage {
    color: #fff;
    background-color: #000;
}

.btn-get-started {
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

.btn-get-started {
    background: #910bd4;
    border: 2px solid #910bd4;
    color: #fff;
}

.btn-get-started:hover {
    background: none;
    color: #910bd4;
}
</style>
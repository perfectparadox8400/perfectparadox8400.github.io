export default defineNuxtRouteMiddleware((to) => {
    if (to.path == '/wix.html') {
        return navigateTo('/wix', { redirectCode: 301 })
    }
})
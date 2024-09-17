// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  compatibilityDate: '2024-04-03',
  devtools: { enabled: true },
  modules: ['@nuxt/content', '@nuxtjs/color-mode', 'nuxt-config-schema', '@nuxt/icon'],
  css: ['~/css/theme.css'],
  components: [{
    path: '~/components',
    global: true
  }],
  content: {
    documentDriven: true
  },
  colorMode: {
    classSuffix: '',
    dataValue: 'theme'
  }
})
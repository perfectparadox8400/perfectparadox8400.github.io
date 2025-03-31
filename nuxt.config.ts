import website from './website.json'

export default defineNuxtConfig({
  compatibilityDate: '2024-04-03',
  devtools: { enabled: true },
  modules: ['@nuxt/content', 'nuxt-config-schema', '@nuxt/icon', '@nuxtjs/google-fonts', '@nuxt/image', '@nuxtjs/color-mode'],
  app: {
    head: {
      htmlAttrs: {
        lang: 'en',
      },
      charset: 'utf-8',
      viewport: 'width=device-width, initial-scale=1',
      link: [{ rel: 'icon', type: 'image/ico', href: '/favicon.ico' }],
      meta: [
        { property: 'og:type', content: 'website' },
        { property: 'og:title', content: website.name },
        { property: 'og:description', content: website.home.about },
        { property: 'og:url', content: website.url },
        { property: 'og:image', content: website.url + website.logo },
        { name: 'description', content: website.home.about },
        { name: 'theme-color', media: "(prefers-color-scheme: light)", content: website.color.dark },
        { name: 'theme-color', media: "(prefers-color-scheme: dark)", content: website.color.light },
        { name: 'google-site-verification', content: '9QTLBPXGjj5_HLEndvFMxztp68JC6frZUewShOcw0NU'}
      ]
    }
  },
  plugins: [
    '~/plugins/jquery.client.js',
    '~/plugins/webpack.client.js',
    '~/plugins/title.js'
  ],
  googleFonts: {
    families: {
      'Open+Sans': [300, 400, 500, 700],
      'Montserrat': [300, 400, 500, 700],
    }
  },
  colorMode: {
    preference: 'system',
    fallback: 'light'
  },
  icon: {
    provider: 'iconify'
  }
})
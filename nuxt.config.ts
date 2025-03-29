// https://nuxt.com/docs/api/configuration/nuxt-config
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
        { property: 'og:title', content: 'Perfect Paradox 8400' },
        { property: 'og:description', content: 'We are Perfect Paradox Team 8400, located in Cedar City, Utah. We are so excited to have been able to learn and grow this season.' },
        { property: 'og:url', content: 'https://perfectparadox8400.github.io/' },
        { property: 'og:image', content: 'https://perfectparadox8400.github.io/img/logo.png' },
        { name: 'description', content: 'We are Perfect Paradox Team 8400, located in Cedar City, Utah. We are so excited to have been able to learn and grow this season.' },
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
    preference: 'dark',
    fallback: 'dark'
  }
})
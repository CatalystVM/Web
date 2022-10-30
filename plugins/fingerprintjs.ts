import { fpjsPlugin } from '@fingerprintjs/fingerprintjs-pro-vue-v3';

export default defineNuxtPlugin((nuxtApp) => {
  nuxtApp.vueApp.use(fpjsPlugin, {
    loadOptions: {
      apiKey: 'UZdQWUfbfXpx0EvJ0Qpo'
    },
  })
})
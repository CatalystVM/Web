import { defineNuxtConfig } from 'nuxt/config'

// https://v3.nuxtjs.org/api/configuration/nuxt.config
export default defineNuxtConfig({
    modules: ['@nuxtjs/tailwindcss', '@nuxtjs/color-mode'],
    tailwindcss: {
        cssPath: '~/assets/css/tailwind.css',
        configPath: 'tailwind.config.js',
        exposeConfig: false,
        injectPosition: 0,
        viewer: true,
    },
    components: [{
        path: '~/components',
        extensions: ['vue'],
        pathPrefix: false,
    }],
    colorMode: {
        classSuffix: ''
    },
    runtimeConfig: {
        private: {
            stripeSecretKey: process.env.STRIPE_SECRET_KEY,
            db: process.env.DB_URL
        },
        
        app: {
            name: process.env.APP_NAME,
            description: process.env.APP_DESCRIPTION,
            url_base: process.env.APP_URL_BASE,
            url: process.env.APP_URL,
        },
    },
    build: {
        parallel: true,
        cache: true,
        extractCSS: process.env.NODE_ENV === 'production',
        optimizeCSS: process.env.NODE_ENV === 'production',
        transpile: [
            'vue-intersect',
            '@fortawesome/vue-fontawesome',
            '@fortawesome/fontawesome-svg-core',
            '@fortawesome/free-brands-svg-icons',
            '@fortawesome/pro-light-svg-icons',
            '@fortawesome/pro-regular-svg-icons',
            '@fortawesome/pro-solid-svg-icons',
            '@fortawesome/pro-thin-svg-icons',
            '@fortawesome/sharp-solid-svg-icons',
        ],
    },
     plugins: [
        '~/plugins/fontawesome.ts'
    ]
})

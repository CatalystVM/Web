import { defineConfig } from 'vite'
import { viteStaticCopy } from 'vite-plugin-static-copy'
import laravel from 'laravel-vite-plugin'
import vue from '@vitejs/plugin-vue'
import path from 'path'

export default defineConfig({
    server: {
        https: false,
        open: true
    },
    purge: [
        './resources/js/**/*.{vue,js}',
        './resources/views/**/*.blade.php'
    ],
    plugins: [
        vue(),
        laravel({
            input: [
                'resources/css/app.css',

                'resources/js/app.js'
            ],
            refresh: true,
        }),
        viteStaticCopy({
            targets: [
                {
                    src: 'resources/assets',
                    dest: './'
                }
            ]
        })
    ],
    resolve: {
        alias: {
            '@/': `${path.resolve(__dirname, 'resources/vue')}/`
        },
    },
    build: {
        watch: {
            include: 'resources/**'
            // https://rollupjs.org/guide/en/#watch-options
        }
    }
    
});

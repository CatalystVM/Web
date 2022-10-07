import { defineConfig } from 'vite'
import { viteStaticCopy } from 'vite-plugin-static-copy'
import laravel from 'laravel-vite-plugin'
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    server: {
        https: false,
        open: true
    },
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
    build: {
        watch: {
        // https://rollupjs.org/guide/en/#watch-options
        }
    }
    
});

import './bootstrap'

/* Set up using Vue 3 */
import { createApp, h } from 'vue'
import { createInertiaApp, Head, Link } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'

/* import the perfect scrollbar */
import { PerfectScrollbar } from 'vue3-perfect-scrollbar'
import 'vue3-perfect-scrollbar/dist/vue3-perfect-scrollbar.css'

/* import the fontawesome core */
import { library } from '@fortawesome/fontawesome-svg-core'

/* import font awesome icon component */
import { FontAwesomeIcon, FontAwesomeLayers, FontAwesomeLayersText } from '@fortawesome/vue-fontawesome'

/* import specific icons */
import { fas } from '@fortawesome/free-solid-svg-icons'
import { far } from '@fortawesome/free-regular-svg-icons'
import { fab } from '@fortawesome/free-brands-svg-icons'

/* add icons to the library */
library.add(fas)
library.add(far)
library.add(fab)

function resolvePageComponent(name, pages) {
    for (const path in pages) {
        if (path.endsWith(`${name.replace('.', '/')}.vue`)) {
            return typeof pages[path] === 'function' ? pages[path]() : pages[path]
        }
    }
    throw new Error(`Page not found: ${name}`)
}

createInertiaApp({
    resolve: async name => {
        let page = resolvePageComponent(name, import.meta.glob('../../resources/vue/Pages/**/*.vue'))

        return page
    },
    setup({ el, app, props, plugin }) {
        createApp({ render: () => h(app, props) })
            .use(plugin)
            .use(PerfectScrollbar)
            .component('font-awesome-icon', FontAwesomeIcon)
            .component('font-awesome-layers', FontAwesomeLayers)
            .component('font-awesome-layer-text', FontAwesomeLayersText)
            .component('Head', Head)
            .component('Link', Link)
            // eslint-disable-next-line no-undef
            .mixin({ methods: { route } })
            .mount(el)
    },

    title: title => `${title} | CatalystVM`
})

/*
InertiaProgress.init({
    color: '#4263f5',
    showSpinner: true
})*/
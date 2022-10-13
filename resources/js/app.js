import 'flowbite'
import _ from 'lodash'
window._ = _

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios'
window.axios = axios

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

import Echo from 'laravel-echo'
import Pusher from 'pusher-js'
window.Pusher = Pusher

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
    forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') == 'https',
})

/* Set up using Vue 3 */
import { createApp, h } from 'vue'
import { createInertiaApp, Head, Link } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'

/* import the fontawesome core */
import { library } from '@fortawesome/fontawesome-svg-core'

/* import font awesome icon component */
import { FontAwesomeIcon, FontAwesomeLayers, FontAwesomeLayersText } from '@fortawesome/vue-fontawesome'

/* import specific icons */
import { fas } from '@fortawesome/pro-solid-svg-icons'
import { far } from '@fortawesome/pro-regular-svg-icons'
//import { fal } from '@fortawesome/pro-light-svg-icons'
//import { fat } from '@fortawesome/pro-thin-svg-icons'
//import { fad } from '@fortawesome/pro-duotone-svg-icons'
//import { fass } from '@fortawesome/sharp-solid-svg-icons'

/* add icons to the library */
library.add(fas)
library.add(far)
//library.add(fal)
//library.add(fat)
//library.add(fad)
//library.add(fass)

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

const opts = {}

export default new Vuetify(opts)

/*
InertiaProgress.init({
    color: '#4263f5',
    showSpinner: true
})*/
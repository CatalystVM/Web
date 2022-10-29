/* import the fontawesome core */
import { library, config } from '@fortawesome/fontawesome-svg-core'

/* import font awesome icon component */
import { FontAwesomeIcon, FontAwesomeLayers, FontAwesomeLayersText } from '@fortawesome/vue-fontawesome'

/* import specific icons */
import { fas } from '@fortawesome/pro-solid-svg-icons'
import { far } from '@fortawesome/pro-regular-svg-icons'
import { fal } from '@fortawesome/pro-light-svg-icons'
import { fab } from '@fortawesome/free-brands-svg-icons'
//import { fat } from '@fortawesome/pro-thin-svg-icons'
//import { fad } from '@fortawesome/pro-duotone-svg-icons'
//import { fass } from '@fortawesome/sharp-solid-svg-icons'

/* add icons to the library */
library.add(fas)
library.add(far)
library.add(fal)
library.add(fab)
//library.add(fat)
//library.add(fad)
//library.add(fass)

config.autoAddCss = false

export default defineNuxtPlugin((nuxtApp) => {
  nuxtApp.vueApp.component('font-awesome-icon', FontAwesomeIcon)
  nuxtApp.vueApp.component('font-awesome-layers', FontAwesomeLayers)
  nuxtApp.vueApp.component('font-awesome-layer-text', FontAwesomeLayersText)
})
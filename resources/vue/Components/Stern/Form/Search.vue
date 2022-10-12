<template>
    <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
        <span
            class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
            <i class="fas fa-search" aria-hidden="true"></i>
        </span>
        <input v-model="searchForm" type="text"
            class="pl-9 text-sm focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
            placeholder="Type here...">
    </div>
</template>

<script setup>
import { Inertia } from '@inertiajs/inertia'
import { ref, watch } from 'vue'
import { debounce } from 'lodash'

let props = defineProps({
    filters: Array,
    route_current: String
})

//let searchForm = ref(props.filters?.search)
let searchForm = ref('')

watch(searchForm, debounce((value) => {
    Inertia.get(route().current(), { search: value }, {
        preserveState: true,
        replace: true
    })
}, 300))
</script>
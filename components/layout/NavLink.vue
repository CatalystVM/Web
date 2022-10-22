<script setup lang="ts">
import { onClickOutside } from '@vueuse/core'

const props = defineProps({
    label: {
        type: String,
        default: ''
    },
    active: {
        type: Boolean,
        default: false
    },
    route: {
        type: String,
        default: null
    },

    dropdown: {
        type: Array,
        default: []
    },
})

var isOpen = ref(false)
const linkDiv = ref(null)
onClickOutside(linkDiv, () => isOpen.value = false)
</script>

<style scoped>
#link>a::after {
    background-image: url('https://www.catalystvm.com/assets/images/templates/navbar/down-arrow.png');
}
</style>

<template>
    <div ref="linkDiv" id="link" class="text-white text-sm font-medium [&:not(#link:last-of-type)]:mr-5" :class="[{
        'relative': dropdown.length > 0
    }]">
        <NuxtLink v-on:click="isOpen = !isOpen" :to="route ? route : 'javascript:;'" role="button"
            class="flex opacity-70 hover:opacity-100 hover:bg-gray-900 py-2.5 px-3 rounded-lg text-base" :class="[{
                'opacity-100': active,
                'after:relative after:ml-1 after:w-2.5 after:bg-contain after:bg-center after:bg-no-repeat': dropdown.length > 0,
                'after:rotate-180': dropdown.length > 0 && isOpen
            }]">
            {{ label }}
        </NuxtLink>
        <ul class="absolute p-0 mt-4 min-w-72 rounded overflow-y-auto z-50 bg-semi_dark shadow-md" v-if="isOpen">
            <li v-for="item in dropdown" class="flex items-center py-3.5 px-3.5 hover:bg-gray-900">
                <NuxtLink v-on:click="isOpen = false" :to="item.route ? item.route : 'javascript:;'">
            <li class="opacity-90 mb-1 font-semibold text-base">{{ item.title }}
                <span v-if="item?.soon" class="ml-2 px-1 py-0.5 font-normal text-xs rounded-sm bg-red-500">SOON</span>
                <span v-if="item?.new" class="ml-2 px-1 py-0.5 font-normal text-xs rounded-sm bg-green-600">NEW</span>
            </li>
            <li class="opacity-70">{{ item.description }}</li>
            </NuxtLink>
            </li>
        </ul>
    </div>
</template>
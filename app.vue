<script setup lang="ts">

import { useVisitorData } from '@fingerprintjs/fingerprintjs-pro-vue-v3';
import { watch } from 'vue';

const { data, error, isLoading, getData } = useVisitorData(
    { extendedResult: true },
    // Set to true to fetch data on mount
    { immediate: false }
);

watch(data, (currentData) => {
    if (currentData) {
        console.log(currentData)
    }
});

getData()

definePageMeta({
    //colorMode: 'dark',
})
</script>

<template>
    <div
        class="overflow-hidden w-full h-screen m-0 font-roboto antialiased font-normal text-left leading-default text-base">
        <NuxtLayout>
            <NuxtPage />
        </NuxtLayout>
    </div>
</template>

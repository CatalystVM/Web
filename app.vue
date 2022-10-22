<script setup lang="ts">
definePageMeta({
    colorMode: 'dark',
})
</script>

<template>
    <div
        class="overflow-hidden w-full h-screen m-0 font-roboto antialiased font-normal text-left leading-default text-base dark:bg-dark bg-gray-50 text-slate-500 dark:text-white">
        <NuxtLayout>
            <NuxtPage />
        </NuxtLayout>
    </div>
</template>

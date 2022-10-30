<script setup lang="ts">
const route = useRoute()
const config = useRuntimeConfig()

definePageMeta({})

useHead({
    title: `${route.params.id} | ${config.app.name}`
})
</script>

<template>
    <div>

    </div>
</template>

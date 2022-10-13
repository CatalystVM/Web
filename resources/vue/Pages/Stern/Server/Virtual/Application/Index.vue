<template>

    <Head title="Application" />
    Applications
</template>

<script>
import LayoutAuthenticated from '@/Layouts/Stern/LayoutAuthenticated.vue'

export default {
    layout: (h, page) => { return h(LayoutAuthenticated, { search: false }, () => page) }
}
</script>
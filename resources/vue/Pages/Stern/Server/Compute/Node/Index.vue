<template>

    <Head title="Nodes" />
    Nodes
</template>

<script>
import Layout from '@/Layouts/Stern/Layout.vue'

export default {
    layout: (h, page) => {
        return h(Layout, {
            Search: false, topbar: true, sidebar: true
        }, () => page)
    }
}
</script>
<template>

    <Head title="Nodes" />
    Virtual Machine
</template>

<script>
import LayoutAuthenticated from '@/Layouts/Stern/LayoutAuthenticated.vue'

export default {
    layout: (h, page) => { return h(LayoutAuthenticated, {}, () => page) }
}
</script>
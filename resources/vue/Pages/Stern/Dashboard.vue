<script>
import LayoutAuthenticated from '@/Layouts/Stern/LayoutAuthenticated.vue'

export default {
    layout: (h, page) => { return h(LayoutAuthenticated, {}, () => page) }
}
</script>

<script setup>
import { defineComponent } from 'vue'

defineComponent({

})
</script>

<template>

    <Head title="Dashboard" />
</template>
<script>
import LayoutGuest from '@/Layouts/Stern/LayoutGuest.vue'

export default {
    layout: (h, page) => { return h(LayoutGuest, { simple: true }, () => page) }
}
</script>

<script setup>
import { defineComponent } from 'vue'

defineComponent({})
</script>

<template>

    <Head title="Forgot Password" />

</template>
<template>

    <Head title="Forgot Password" />

</template>

<script>
import Layout from '../../../../Layouts/Stern/Layout.vue'

export default {
    layout: (h, page) => {
        return h(Layout, {
            search: false, topbar: false, sidebar: false
        }, () => page)
    }
}
</script>

<script setup>
import { defineComponent } from 'vue'

defineComponent({})
</script>
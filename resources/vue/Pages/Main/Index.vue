<script>
import Layout from '@/Layouts/Main/Layout.vue'

export default {
    layout: (h, page) => { return h(Layout, {}, () => page) }
}
</script>

<template>

    <Head :title=$page.props.app.description />

</template>
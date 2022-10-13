<template>

    <Head title="Add | Compute Nodes" />

</template>

<script>
import Layout from '@/Layouts/Stern/Layout.vue'
export default {
    layout: (h, page) => {
        return h(Layout, {
            search: false, topbar: true, sidebar: true
        }, () => page)
    }
}
</script>

<script setup>
import { defineComponent } from 'vue'

import ButtonLink from '@/Elements/Stern/ButtonLink.vue'

defineProps({ nodes: Object })
defineComponent({
    Pagination,

    Table,
    TableColumn,
    TableColumnMultiline,
    TableHeader,
    TableHeaderColumn,

    ButtonLink
})
</script>
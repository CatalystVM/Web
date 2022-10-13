<template>

    <Head title="Accounts" />

    <div class="relative flex flex-col w-full min-w-0 mb-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border"
        :class="{
            'dark:bg-gray-950 dark:shadow-soft-dark-xl': $page.props.auth?.user?.dark_mode
        }">
        <div class="flex-auto px-0 pt-0 pb-2">
            <div class="p-0 overflow-x-auto">
                <Table>
                    <table-header>
                        <table-header-column location="left">Hostname</table-header-column>
                        <table-header-column>Location</table-header-column>
                        <table-header-column>CPU</table-header-column>
                        <table-header-column>RAM</table-header-column>
                        <table-header-column>Nodes</table-header-column>
                        <table-header-column></table-header-column>
                    </table-header>
                    <tbody>
                        <tr v-for="node in nodes.data" :key="node.id">
                            <table-column>{{ node.hostname }}</table-column>
                            <table-column></table-column>
                            <table-column>54%</table-column>
                            <table-column>12%</table-column>
                            <table-column>0</table-column>
                            <table-column>
                                <Link href="#" class="font-semibold leading-tight text-xs text-slate-400">

                                </Link>
                            </table-column>
                        </tr>
                    </tbody>
                </Table>
            </div>
        </div>

        <Pagination :links="nodes.links" />
    </div>
</template>

<script>
import LayoutAuthenticated from '@/Layouts/Stern/LayoutAuthenticated.vue'

export default {
    props: {
        nodes: Object
    },
    layout: (h, page) => { return h(LayoutAuthenticated, { search: true }, () => page) }
}
</script>

<script setup>
import { defineComponent } from 'vue'

import Pagination from '@/Components/Stern/Pagination.vue'

import Table from '@/Elements/Stern/Table/Table.vue'
import TableColumn from '@/Elements/Stern/Table/Column.vue'
import TableColumnMultiline from '@/Elements/Stern/Table/ColumnMultiLine.vue'
import TableHeader from '@/Elements/Stern/Table/Header/Head.vue'
import TableHeaderColumn from '@/Elements/Stern/Table/Header/Column.vue'

defineComponent({
    Pagination,

    Table,
    TableColumn,
    TableColumnMultiline,
    TableHeader,
    TableHeaderColumn
})
</script>
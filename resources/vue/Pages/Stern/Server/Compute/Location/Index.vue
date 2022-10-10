<template>

    <Head title="Location" />

    <div class="relative flex flex-col w-full min-w-0 mb-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border"
        :class="{
            'dark:bg-gray-950 dark:shadow-soft-dark-xl': $page.props.auth?.user?.dark_mode
        }">
        <div class="flex-auto px-0 pt-0 pb-2">
            <div class="p-0 overflow-x-auto">
                <Table>
                    <table-header>
                        <table-header-column location="left">City</table-header-column>
                        <table-header-column>State</table-header-column>
                        <table-header-column>Country</table-header-column>
                        <table-header-column></table-header-column>
                    </table-header>
                    <tbody>
                        <tr v-for="location in locations.data" :key="location.id">
                            <table-column-multiline :image="location.image" :line1="location.name"
                                :line2="location.city + ', ' + location.state"></table-column-multiline>
                            <table-column>{{ location.state }}</table-column>
                            <table-column>{{ location.country }}</table-column>
                            <table-column>
                                <Link href="#" class="font-semibold leading-tight text-xs text-slate-400">
                                <!-- Edit -->
                                </Link>
                            </table-column>
                        </tr>
                    </tbody>
                </Table>
            </div>
        </div>

        <Pagination :links="locations.links" />
    </div>
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

import Pagination from '@/Components/Stern/Pagination.vue'

import Table from '@/Elements/Stern/Table/Table.vue'
import TableColumn from '@/Elements/Stern/Table/Column.vue'
import TableColumnMultiline from '@/Elements/Stern/Table/ColumnMultiLine.vue'
import TableHeader from '@/Elements/Stern/Table/Header/Head.vue'
import TableHeaderColumn from '@/Elements/Stern/Table/Header/Column.vue'

defineProps({ locations: Object })
defineComponent({
    Pagination,

    Table,
    TableColumn,
    TableColumnMultiline,
    TableHeader,
    TableHeaderColumn
})
</script>
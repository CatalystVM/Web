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
                        <table-header-column location="left">Name</table-header-column>
                        <table-header-column location="left">Department</table-header-column>
                        <table-header-column>Employed</table-header-column>
                        <table-header-column></table-header-column>
                    </table-header>
                    <tbody>
                        <tr v-for="user in users.data" :key="user.id">
                            <table-column-multiline :image="user.profile_img" :line1="user.name" :line2="user.email" />
                            <table-column-multiline line1="Manager" line2="Organization" />
                            <table-column>23/04/18</table-column>
                            <table-column>
                                <Link :href="route('stern::user', { 'user': user.id })"
                                    class="font-semibold leading-tight text-xs text-slate-400">
                                Edit
                                </Link>
                            </table-column>
                        </tr>
                    </tbody>
                </Table>
            </div>
        </div>

        <Pagination :links="users.links" />
    </div>
</template>

<script>
import Layout from '@/Layouts/Stern/Layout.vue'

export default {
    layout: (h, page) => {
        return h(Layout, {
            search: true, topbar: true, sidebar: true
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

defineProps({ users: Object })
defineComponent({
    Pagination,

    Table,
    TableColumn,
    TableColumnMultiline,
    TableHeader,
    TableHeaderColumn
})
</script>
<template>

    <Head title="Accounts" />

    <div class="relative flex flex-col w-full min-w-0 mb-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border"
        :class="{
            'dark:bg-gray-950 dark:shadow-soft-dark-xl': $page.props.auth?.user?.dark_mode
        }">
        <div class="flex-auto px-0 pt-0 pb-2">
            <div class="p-0 overflow-x-auto">
                <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                    <thead class="align-bottom">
                        <tr>
                            <th
                                class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                Name</th>
                            <th
                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                Function</th>
                            <th
                                class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                Employed</th>
                            <th
                                class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="user in users.data" :key="user.id">
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <div class="flex px-2 py-1">
                                    <div>
                                        <img class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl"
                                            :src="user.profile_img" />
                                    </div>
                                    <div class="flex flex-col justify-center">
                                        <h6 class="mb-0 leading-normal text-sm">{{ user.name }}</h6>
                                        <p class="mb-0 leading-tight text-xs text-slate-400">{{ user.email }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <p class="mb-0 font-semibold leading-tight text-xs">Manager</p>
                                <p class="mb-0 leading-tight text-xs text-slate-400">Organization</p>
                            </td>
                            <td
                                class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <span class="font-semibold leading-tight text-xs text-slate-400">23/04/18</span>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <Link :href="route('stern::user', { 'user': user.id })"
                                    class="font-semibold leading-tight text-xs text-slate-400">
                                Edit
                                </Link>
                            </td>
                        </tr>
                    </tbody>
                </table>
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
import { Head } from '@inertiajs/inertia-vue3'
import { defineComponent } from 'vue'
import Pagination from '@/Components/Stern/Pagination.vue'

defineProps({ users: Object })
defineComponent({ Head, Pagination })
</script>
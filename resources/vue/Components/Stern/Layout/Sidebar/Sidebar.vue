<script>
export default {
    props: {

    }
}
</script>

<script setup>
import { defineComponent } from 'vue'
import SidebarItem from '@/Components/Stern/Layout/Sidebar/Sidebar-Item.vue'
import SidebarItemSub from '@/Components/Stern/Layout/Sidebar/Sidebar-SubItem.vue'

defineComponent({
    SidebarItem,
    SidebarItemSub
})
</script>

<template>
    <aside
        class="fixed inset-y-0 left-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto transition-all duration-200 -translate-x-full bg-white border-0 shadow-none xl:ml-4 ease-soft-in-out z-990 max-w-64 rounded-2xl xl:translate-x-0 xl:bg-transparent"
        :class="{'dark:bg-gray-950': $page.props.auth?.user?.dark_mode}">
        <div class="h-20">
            <i
                class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer text-slate-400 dark:text-white xl:hidden"></i>
            <Link class="block px-8 py-6  text-sm whitespace-nowrap text-slate-700 dark:text-white"
                :href="route('stern::dashboard')" target="_blank">
            <img src="../../../../../assets/images/logo.webp"
                class="inline-block h-full max-w-full transition-all duration-200 ease-soft-in-out dark:hidden">
            <img src="../../../../../assets/images//logo-d.webp"
                class="hidden h-full max-w-full transition-all duration-200 ease-soft-in-out dark:inline-block">
            </Link>
        </div>

        <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent"
            :class="{'dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent': $page.props.auth?.user?.dark_mode}">
        <div class="items-center block w-full h-auto grow basis-full">
            <ul class="flex flex-col pl-0 mb-0 list-none">
                <sidebar-item name="Dashboard" route_name="stern::dashboard" :submenu=false
                    icon="fa-solid fa-briefcase"></sidebar-item>
                <sidebar-item name="Accounts" route_name="stern::users" :submenu=false icon="fa-solid fa-users" />

                <sidebar-item name="Billing"></sidebar-item>

                <sidebar-item name="Servers"></sidebar-item>
                <sidebar-item name="Compute Resources" route_name="stern::servers::compute::nodes" :submenu=false
                    icon="fa-solid fa-microchip-ai" />
                <sidebar-item name="Virtual Machine" route_name="stern::servers::virtual" :submenu=true
                    icon="fa-solid fa-server">
                    <sidebar-item-sub name="Nodes" route_name="stern::servers::virtual::nodes" />
                    <sidebar-item-sub name="Applications" route_name="stern::servers::virtual::applications" />
                    <sidebar-item-sub name="Images" route_name="stern::servers::virtual::images" />
                </sidebar-item>
                <sidebar-item name="Backups" route_name="stern::test" :submenu=true icon="fa-solid fa-database">
                    <sidebar-item-sub name="Nodes" route_name="stern::test" />
                    <sidebar-item-sub name="Backups" route_name="stern::test" />
                </sidebar-item>

                <sidebar-item name="Domains"></sidebar-item>
                <sidebar-item name="Top Level Domains" route_name="stern::test" :submenu=false
                    icon="fa-solid fa-browsers">
                </sidebar-item>

                <sidebar-item name="Support"></sidebar-item>
            </ul>
        </div>
    </aside>
</template>
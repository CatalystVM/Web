<template>
    <nav navbar-main=""
        class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 mt-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start"
        navbar-scroll="true">
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
            <Breadcrubs />

            <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto" id="navbar">
                <div class="flex items-center md:ml-auto md:pr-4">
                    <Search v-if:="search" />
                </div>
                <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                    <li class="flex items-center">
                        <Link href="#"
                            class="block px-0 py-2 font-semibold transition-all ease-nav-brand text-sm text-slate-500 dark:text-white">
                        <font-awesome-icon class="sm:mr-1" icon="fa-solid fa-user" />
                        <span class="hidden sm:inline">{{ $page.props.auth.user.name }}</span>
                        </Link>
                    </li>
                    <li class="flex items-center pl-4 xl:hidden">
                        <Link mini-sidenav-burger href="javascript:;"
                            class="hidden p-0 transition-all ease-nav-brand text-sm text-slate-500 xl:block"
                            aria-expanded="false">
                        <div class="w-4.5 overflow-hidden">
                            <i
                                class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all dark:bg-white"></i>
                            <i
                                class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all dark:bg-white"></i>
                            <i
                                class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all dark:bg-white"></i>
                        </div>
                        </Link>
                    </li>
                    <li class="flex items-center pl-4">
                        <Link :href="route('stern::auth::logout')" method="POST" as="button"
                            class="hidden p-0 transition-all ease-nav-brand text-sm text-slate-500 dark:text-white xl:block"
                            aria-expanded="false">
                        <font-awesome-icon icon="fa-solid fa-arrow-right-from-bracket" />
                        </Link>
                    </li>
                    <li class="flex items-center px-4">
                        <Link href="javascript:;"
                            class="p-0 transition-all ease-nav-brand text-sm text-slate-500 dark:text-white">
                        <font-awesome-icon icon="fa-solid fa-gear" />
                        </Link>
                    </li>
                    <li class="relative flex items-center pr-2">
                        <p class="hidden transform-dropdown-show"></p>
                        <Link dropdown-trigger href="javascript:;"
                            class="block p-0 transition-all ease-nav-brand text-sm text-slate-500 dark:text-white"
                            aria-expanded="false">
                        <font-awesome-icon icon="fa-solid fa-bell" />
                        </Link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script setup>
import { defineComponent } from 'vue'
import Search from '@/Components/Stern/Form/Search.vue'
import Breadcrubs from '@/Components/Stern/Layout/Breadcrubs.vue'

defineProps({ search: Boolean })
defineComponent({
    Search, Breadcrubs
})
</script>
<template>
    <perfect-scrollbar ref="scrollbar" v-if="!simple">
        <aside mini="false"
            class="fixed inset-y-0 left-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto transition-all duration-200 -translate-x-full bg-white border-0 shadow-none xl:ml-4 ease-soft-in-out z-990 max-w-64 rounded-2xl xl:translate-x-0 xl:bg-transparent"
            :class="{'dark:bg-gray-950': $page.props.auth.user.dark_mode}" id="sidenav-main">
            <div class="h-20">
                <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer text-slate-400 dark:text-white xl:hidden"
                    aria-hidden="true"></i>
                <Link class="block px-8 py-6  text-sm whitespace-nowrap text-slate-700 dark:text-white"
                    :href="route('stern::dashboard')" target="_blank">
                <img src="../../../../../assets/images/logo.webp"
                    class="inline-block h-full max-w-full transition-all duration-200 ease-soft-in-out dark:hidden">
                <img src="../../../../../assets/images//logo-d.webp"
                    class="hidden h-full max-w-full transition-all duration-200 ease-soft-in-out dark:inline-block">
                <!-- <span class="ml-1 font-semibold transition-all duration-200 ease-soft-in-out">{{ config('app.name') }}</span> -->
                </Link>
            </div>

            <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent"
                :class="{'dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent': $page.props.auth.user.dark_mode}">
            <div class="items-center block w-full h-auto grow basis-full" id="sidenav-collapse-main">
                <ul class="flex flex-col pl-0 mb-0 list-none">
                    <NavLink name="Dashboard" :active="route().current() == 'stern::dashboard'"
                        route_name="stern::dashboard" :submenu=false>
                        <font-awesome-icon icon="fa-solid fa-briefcase" />
                    </NavLink>

                    <NavLink name=""></NavLink>
                    <NavLink name="Accounts" route_name="stern::users" :submenu=false>
                        <font-awesome-icon icon="fa-solid fa-users" />
                    </NavLink>
                    <NavLink name="Plans" route_name="stern::test" :submenu=false>
                        <font-awesome-icon icon="fa-solid fa-cart-flatbed" />
                    </NavLink>

                    <NavLink name="Servers"></NavLink>
                    <NavLink name="Applications" route_name="stern::servers::applications" :submenu=false>
                        <font-awesome-icon icon="fa-solid fa-browsers" />
                    </NavLink>
                    <NavLink name="Virtual Machine" route_name="stern::servers::virtual.machine" :submenu=false>
                        <font-awesome-icon icon="fa-solid fa-server" />
                    </NavLink>
                    <NavLink name="Compute Resources" route_name="stern::servers::compute.resources" :submenu=false>
                        <font-awesome-icon icon="fa-solid fa-microchip-ai" />
                    </NavLink>

                    <NavLink name="Backups"></NavLink>
                    <NavLink name="Backup Nodes" route_name="stern::test" :submenu=false>
                        <font-awesome-icon icon="fa-solid fa-circle-nodes" />
                    </NavLink>
                    <NavLink name="Server Backups" route_name="stern::test" :submenu=false>
                        <font-awesome-icon icon="fa-solid fa-database" />
                    </NavLink>
                </ul>
            </div>

            <div sidenav-card="" class="">
                <div class="">
                    <div class="">
                        <i sidenav-card-icon="" class="" aria-hidden="true"></i>
                    </div>
                    <div class=""></div>
                </div>
            </div>
        </aside>
    </perfect-scrollbar>

    <div class="container sticky top-0 z-110" v-if="simple">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 flex-0">

                <nav
                    class="absolute top-0 left-0 right-0 z-30 flex flex-wrap items-center justify-between w-full px-4 py-2 mx-6 my-4 shadow-soft-2xl bg-white/80 backdrop-blur-2xl backdrop-saturate-200 rounded-blur lg:flex-nowrap lg:justify-start">
                    <div
                        class="container flex flex-wrap items-center justify-between lg-max:overflow-hidden lg:flex-nowrap">
                        <Link class="py-2.5 text-sm mr-4 ml-4 whitespace-nowrap font-bold text-slate-700 lg:ml-0"
                            :href="route('stern::dashboard')">{{ $page.props.app.name }}</Link>

                        <button aria-expanded="false" nav-collapse-trigger
                            class="px-3 py-1 ml-2 leading-none bg-transparent rounded-lg shadow-none cursor-pointer lg:hidden text-lg text-slate-700">
                            <span class="inline-block mt-2 align-middle w-6 h-6 bg-none">
                                <span bar1
                                    class="block relative w-5.5 h-px rounded-px bg-slate-700 transition-all duration-200 mx-auto my-0 origin-10-10"></span>
                                <span bar2
                                    class="block relative w-5.5 h-px rounded-px bg-slate-700 transition-all duration-200 mx-auto my-0 mt-1.75"></span>
                                <span bar3
                                    class="block relative w-5.5 h-px rounded-px bg-slate-700 transition-all duration-200 mx-auto my-0 mt-1.75 origin-10-90"></span>
                            </span>
                        </button>

                        <div
                            class="items-center w-full pt-4 pb-2 transition-all duration-350 ease-soft-in-out lg-max:max-h-0 lg-max:overflow-hidden lg-max:hidden lg-max:bg-transparent lg-max:shadow-none md-max:relative grow basis-full rounded-2xl lg:flex lg:basis-auto lg:py-0">
                            <ul class="hidden pl-0 mb-0 list-none lg:block lg:flex-row">
                                <li>
                                    <a href="https://www.creative-tim.com/product/soft-ui-dashboard-pro-tailwind"
                                        target="_blank"
                                        class="inline-block px-8 py-2 mb-0 mr-1 font-bold text-center text-white uppercase align-middle transition-all border-0 cursor-pointer ease-soft-in-out text-xs leading-pro bg-gradient-to-tl from-blue-700 to-sky-500 tracking-tight-soft shadow-soft-md bg-150 bg-x-25 rounded-7 hover:scale-102 active:opacity-85">Buy
                                        Now</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</template>

<script>
import NavLink from '@/Components/Stern/Layout/Sidebar/Sidebar-Item.vue'

export default {
    props: { simple: Boolean },
    components: { NavLink },
}
</script>
<template>
    <li class="mt-0.5 w-full" v-if="route_name">
        <Link :active_primary="($page.props.route_current == route_name) ? 'true' : 'false'"
            :collapse_trigger="submenu ? 'primary' : 'none'" :href="route(route_name)"
            :aria-expanded="($page.props.route_current == route_name) ? 'true' : 'false'"
            class="ease-soft-in-out text-sm py-2.7 active after:ease-soft-in-out after:font-awesome-5-free my-0 mx-4 flex items-center whitespace-nowrap px-4 font-medium text-slate-500 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200"
            :class="{
                'rounded-lg bg-white': ($page.props.route_current == route_name),
                'dark:text-white dark:opacity-80 dark:after:text-white/50 dark:after:text-white': $page.props.auth.user.dark_mode
            }" role="button">

        <div class="stroke-none shadow-soft-sm mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center"
            :class="{
                'bg-gradient-to-tl from-blue-700 to-sky-500 text-white': ($page.props.route_current == route_name),
                'text-slate-800': !($page.props.route_current == route_name)
            }">
            <slot />
        </div>
        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft text-slate-700">{{ name }}</span>
        </Link>
    </li>
    <li class="mt-0.5 w-full" v-if="!route_name">
        <hr class="h-px my-4 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" :class="{
            'dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent': $page.props.auth.user.dark_mode
        }">
        <h6 class="pl-6 mb-2 ml-2 font-bold leading-tight uppercase text-xs opacity-60" :class="{
            'dark:text-white': $page.props.auth.user.dark_mode
        }">{{ name }}</h6>
    </li>
</template>

<script>
export default {
    props: {
        name: String,
        route_name: String,
        submenu: Boolean
    }
}
</script>
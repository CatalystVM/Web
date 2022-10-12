<template>
    <li class="mt-0.5 w-full" v-if="route_name">
        <Link :id="id" :href="submenu ? 'javascript:;' : route(route_name, route_args)" @click="handler"
            class="ease-soft-in-out text-sm py-2.7 my-0 mx-4 flex items-center whitespace-nowrap px-4 font-medium shadow-none transition-colors"
            :class="{
                'rounded-lg bg-white': (this.submenu ? ($page.props.route_current.includes(route_name)) : $page.props.route_current == route_name),
                'dark:text-white dark:opacity-80': $page.props.auth?.user?.dark_mode
            }" role="button">

        <div class="stroke-none shadow-soft-sm mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center"
            :class="{
                'bg-gradient-to-tl from-blue-700 to-sky-500 text-white': (submenu ? ($page.props.route_current.includes(route_name)) : $page.props.route_current == route_name),
                'text-slate-800': !(submenu ? ($page.props.route_current.includes(route_name)) : $page.props.route_current == route_name)
            }">
            <font-awesome-icon :icon="icon" />
        </div>
        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft" :class="{
            'text-slate-700': (submenu ? ($page.props.route_current.includes(route_name)) : $page.props.route_current == route_name),
            'text-slate-200': !(submenu ? ($page.props.route_current.includes(route_name)) : $page.props.route_current == route_name)
        }">{{ name }}</span>
        </Link>
        <div v-if="submenu" class="h-auto overflow-hidden transition-all duration-200 ease-soft-in-out"
            :class="{'max-h-0': !isOpen}">
            <ul class="flex flex-wrap pl-4 mb-0 ml-6 list-none transition-all duration-200 ease-soft-in-out">
                <slot />
            </ul>
        </div>
    </li>
    <li class="mt-0.5 w-full" v-if="!route_name">
        <hr class="h-px my-4 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" :class="{
            'dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent': $page.props.auth?.user?.dark_mode
        }">
        <h6 class="pl-6 mb-2 ml-2 font-bold leading-tight uppercase text-xs opacity-60" :class="{
            'dark:text-white': $page.props.auth?.user?.dark_mode
        }">{{ name }}</h6>
    </li>
</template>

<script>
export default {
    props: {
        name: String,
        route_name: String,
        route_args: {
            type: Array,
            default: {}
        },
        icon: String,
        submenu: Boolean,
        active: Boolean
    },
    data() {
        return {
            id: Math.random().toString(36).substring(2, 7),
            isOpen: this.submenu ? (this.$page.props.route_current.includes(this.route_name)) : this.$page.props.route_current == this.route_name
        }
    },
    methods: {
        handler(event) {
            if (this.isOpen) {
                event.target.parentElement.children[1].classList?.remove("max-h-0");
                this.isOpen = false
            } else {
                event.target.parentElement.children[1].classList?.add("max-h-0");
                this.isOpen = true
            }
        }
    }

}
</script>
<script>
export default {
    props: {
        name: String,
        route_name: String
    }
}
</script>

<template>
    <li class="w-full">
        <Link
            class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 dark:text-white"
            :class="{
                'before:-left-5 rounded-lg font-semibold text-slate-800 before:h-2 before:w-2 before:bg-slate-800': this.$page.props.route_current == this.route_name,
                'before:-left-4.5 before:h-1.25 before:w-1.25 font-medium text-slate-800/50 before:bg-slate-800/50': this.$page.props.route_current != this.route_name,
    
                'before:rounded-3xl before:content-[\'\'] dark:opacity-100 dark:before:bg-white dark:before:opacity-80': this.$page.props.route_current == this.route_name,
                'before:rounded-3xl before:content-[\'\'] dark:opacity-60 dark:before:bg-white dark:before:opacity-80': this.$page.props.route_current != this.route_name
            }" :href=" route(route_name)" role="button">
        <span class="transition-all duration-100 pointer-events-none ease-soft"> {{ name }} </span>
        </Link>
    </li>
</template>
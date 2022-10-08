<template>
    <nav>
        <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
            <li class="leading-normal text-sm breadcrumb-item">
                <Link class="text-slate-700 opacity-30 dark:text-white" href="javascript:;">
                <Link class="opacity-50 text-slate-700 dark:text-white after:text-gray-600 capitalize"
                    href="javascript:;">
                {{ $page.props.app.name }}</Link>
                </Link>
            </li>
            <li class="text-sm pl-2 leading-normal before:float-left before:pr-2 before:text-gray-600 before:content-['/'] capitalize"
                v-for="breadcrumb in $page.props.route_current.split('::').splice(1)">
                <Link class="opacity-50 text-slate-700 dark:text-white" href="javascript:;">{{
                breadcrumb.replace('.', ' ') }}
                </Link>
            </li>
        </ol>
        <h6 class="mb-0 font-bold capitalize dark:text-white">{{
        $page.props.route_current.split('::').at(-1).replace('.', ' ') }}</h6>
    </nav>
</template>

<script>
export default {

}
</script>
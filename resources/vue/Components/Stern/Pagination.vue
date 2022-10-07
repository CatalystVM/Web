<!-- eslint-disable vue/no-v-text-v-html-on-component -->
<template>
    <div class="m-6">
        <nav aria-label="Page navigation example">
            <ul class="inline-flex -space-x-px">
                <li v-for="link in links">
                    <Component :is="link.url ? 'Link' : 'span'" :href="link.url" v-html="link.label"
                        :aria-current="link.active ? 'page' : ''" :class="{
                        'leading-tight text-gray-500 bg-white hover:text-gray-700': !link.active,
                        'text-blue-600 bg-blue-50 hover:text-blue-700': link.active,
                        
                        'dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white': !link.active && $page.props.auth.user.dark_mode,
                        'dark:border-gray-700 dark:bg-gray-700 dark:text-white': link.active && $page.props.auth.user.dark_mode
                        }" class="py-2 px-3 border border-gray-300 hover:bg-gray-100" />
                </li>
            </ul>
        </nav>
    </div>

</template>

<script>
export default {
    props: {
        links: Array
    }
}
</script>
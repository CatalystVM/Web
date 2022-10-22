<script setup lang="ts">
const route = useRoute()
const config = useRuntimeConfig()

definePageMeta({})

useHead({
    title: `Browse Apps | ${config.app.name}`
})

const { data: categories } = await useFetch(`/api/marketplace/browse`)
let activeCategory = ref(null)
activeCategory.value = categories.value[0]

function changeCategory(category) {
    activeCategory.value = category
}
</script>

<template>
    <div class="relative py-20 overflow-hidden">
        <div class="flex flex-wrap px-4 lg:px-32 w-full max-w-screen-2xl mx-auto">
            <div
                class="w-1/2 overflow-hidden lg:w-1/4 rounded-lg bg-slate-100 dark:bg-semi_dark mb-16 border-[1px] border-slate-50 border-solid border-opacity-10">
                <ul>
                    <li v-for="c in categories"
                        class="flex items-center cursor-pointer py-2 px-3.5 hover:px-6 opacity-70 hover:opacity-100"
                        :class="[{
                            'dark:bg-gray-900 px-6 opacity-100': activeCategory.id == c.id
                        }]">
                        <div v-on:click="changeCategory(c)" class="w-full h-full">
                            {{ c.name }}
                        </div>

                    </li>
                </ul>
            </div>

            <div class="w-1/2 overflow-hidden lg:w-3/4 pl-6">
                <div v-if="activeCategory">
                    {{ activeCategory.name }}
                </div>
            </div>
        </div>

    </div>
</template>

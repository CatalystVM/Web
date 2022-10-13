<script>
export default {
    props: {
        image: String,
        line1: String,
        line2: String
    },
}
</script>

<template>
    <td v-if="image" class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
        <div class="flex px-2 py-1">
            <div v-if="image">
                <img class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl"
                    :src="image" />
            </div>
            <div class="flex flex-col justify-center">
                <h6 v-if="line1" class="mb-0 leading-normal text-sm text-slate-200">{{ line1 }}</h6>
                <p v-if="line2" class="mb-0 leading-tight text-xs text-slate-400">{{ line2 }}</p>
            </div>
        </div>
    </td>
    <td v-else class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
        <p v-if="line1" class="mb-0 font-semibold leading-tight text-xs text-slate-200">{{ line1 }}</p>
        <p v-if="line2" class="mb-0 leading-tight text-xs text-slate-400">{{ line2 }}</p>
    </td>
</template>
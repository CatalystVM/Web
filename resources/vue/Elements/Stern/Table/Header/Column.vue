<script>
export default {
    props: {
        location: {
            type: String,
            default: "center"
        }
    },
    data() {
        return {
            text_location: 'text-' + this.location
        }
    }
}
</script>

<template>
    <th class="px-6 py-3 font-bold uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
        :class="text_location">
        <slot />
    </th>
</template>


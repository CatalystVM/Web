<script>
export default {
    props: {
        rounded: {
            type: Boolean,
            default: false
        },
        uppercase: {
            type: Boolean,
            default: false
        },
        bold: {
            type: Boolean,
            default: false
        },
        padding: {
            type: String,
            default: ''
        },
        margin: {
            type: String,
            default: 'mr-2.5'
        },
        shadow: {
            type: Boolean,
            default: true
        },
        shadowSize: {
            type: String,
            default: 'xl'
        },

        to: {
            type: String,
            default: null
        }
    },
    data() {
        return {
            shadows: this.shadow ?? 'shadow-' + this.shadowSize
        }
    }
}
</script>

<style scoped>
.btn {
    @apply text-sm text-slate-300 border
}
</style>

<template>
    <NuxtLink v-if="to" :to="to ? to : 'javascript:;'" :class="['btn', padding, margin, shadows, {
        'uppercase': uppercase,
        'rounded-full': rounded,
        'rounded-lg': !rounded,
    }]">
        <slot />
    </NuxtLink>

    <button v-else type="submit" :class="['btn', padding, margin, shadows, {
        'uppercase': uppercase,
        'rounded-full': rounded,
        'rounded-lg': !rounded,
    }]">
        <slot />
    </button>
</template>
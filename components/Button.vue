<script>
export default {
    props: {
        textSize: {
            type: String,
            default: 'sm'
        },
        textColor: {
            type: String,
            default: 'white'
        },
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
            default: 'py-2.5 px-7 lg:py-3 lg:px-5'
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

        href: {
            type: String,
            default: null
        }
    },
    data() {
        return {
            text_size: 'text-' + this.textSize,
            text_color: 'text-' + this.textColor,
            shadows: this.shadow ?? 'shadow-' + this.shadowSize
        }
    }
}
</script>

<template>
    <NuxtLink v-if="href" :to="href ? href : 'javascript:;'" :class="[text_size, text_color, padding, margin, shadows, {
        'uppercase': uppercase,
        'rounded-full': rounded,
        'rounded-lg': !rounded,
    }]">
        <slot />
    </NuxtLink>

    <button v-else type="submit" :class="[text_size, text_color, padding, margin, shadows, {
        'uppercase': uppercase,
        'rounded-full': rounded,
        'rounded-lg': !rounded,
    }]">
        <slot />
    </button>
</template>
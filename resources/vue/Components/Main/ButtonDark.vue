<script>
import Button from '@/Components/Main/Button.vue'

export default {
    components: {
        Button
    }
}
</script>

<template>
    <Button class="bg-semi_dark hover:text-white border border-slate-50 border-solid border-opacity-20 hover:border-opacity-50" textColor="slate-300" >
        <slot />
    </Button>
</template>
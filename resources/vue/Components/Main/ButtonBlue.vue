<script>
import Button from '@/Components/Main/Button.vue'

export default {
    components: {
        Button
    }
}
</script>

<template>
    <Button class="bg-blue-600 hover:bg-blue-700">
        <slot />
    </Button>
</template>
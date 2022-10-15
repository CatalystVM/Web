<script>
export default {
    props: {
        error: String,
        modelValue: '',
        model: {
            type: Array,
            default: null
        }
    },
}
</script>

<script setup>
import { useForm } from '@inertiajs/inertia-vue3'
import { defineComponent } from 'vue'

import Input from '@/Elements/Stern/Input/Input.vue'

defineComponent({
    Input
})

</script>

<template>
    <Input :error="error" id="email" type="email" label="Email" placeholder="Enter your email" :model="model" />
</template>
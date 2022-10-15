<script>
export default {
    props: {
        id: {
            type: String,
            default: Math.random()
        },
        label: String,
        placeholder: String,
        type: String,

        error: String,
        modelValue: '',
        model: {
            type: Array,
            default: null
        }
    },
    methods: {
        updateValue(event) {
            this.$emit('update:modelValue', event.target.value);
        }
    }
}
</script>

<template>
    <div class="mb-4 block text-left">
        <label v-if="label" class="mb-2 ml-1 font-normal cursor-pointer select-none text-sm text-slate-700" :for="id">{{
        label }}</label>
        <input :id="id" :name="id" :type="type" :value="modelValue" @input="updateValue" v-model="model"
            class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
            :class="{'bg-red-50 border border-red-500': error}" :placeholder="placeholder" required />
        <p v-if="error" class="mt-2 text-sm text-red-600 dark:text-red-500">
            <span class="font-medium">Oops!</span> {{ error }}
        </p>
    </div>
</template>
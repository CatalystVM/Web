<script>
export default {
    props: {
        error: String,
        modelValue: ''
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
        <label class="mb-2 ml-1 font-normal cursor-pointer select-none text-sm text-slate-700"
            for="password">Password</label>
        <input id="password" type="password" :value="modelValue" @input="updateValue"
            class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
            placeholder="Password" aria-label="Password" aria-describedby="password-addon" required />
        <p v-if="error" class="mt-2 text-sm text-red-600 dark:text-red-500">
            <span class="font-medium">Oops!</span> {{ error }}
        </p>
    </div>
</template>
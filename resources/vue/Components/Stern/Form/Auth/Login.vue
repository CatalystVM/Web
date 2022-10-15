<script setup>
import { useForm } from '@inertiajs/inertia-vue3'
import { defineComponent } from 'vue'

import InputEmail from '@/Elements/Stern/Input/Email.vue'
import InputPassword from '@/Elements/Stern/Input/Password.vue'

defineComponent({
    InputEmail,
    InputPassword
})

let form = useForm({
    email: '',
    password: '',
    rememberMe: ''
})

let submit = () => {
    form.post(route('stern::auth::login::post'), {
        wantsJson: true
    })
}
</script>

<template>
    <div class="flex-auto p-6 text-center">
        <form @submit.prevent="submit" role="form text-left">
            <input-email :error="form.errors?.email" :model="form.email" />
            <input-password :error="form.errors?.password" v-model="form.password" />

            <div class="min-h-6 mb-0.5 block pl-12 text-left">
                <input id="rememberMe" v-model="form.rememberMe"
                    class="mt-0.5 rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.3 h-5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right"
                    type="checkbox" checked="" />
                <label class="mb-2 ml-1 font-normal cursor-pointer select-none text-sm text-slate-700"
                    for="rememberMe">Remember me</label>
            </div>
            <div class="text-center">
                <button type="submit"
                    class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-blue-600 to-cyan-400 hover:border-slate-700 hover:bg-slate-700 hover:text-white"
                    :disabled="form.processing">Sign in</button>
            </div>
            <div class="relative w-full max-w-full px-3 mb-2 text-center shrink-0">
                <p
                    class="inline mb-2 px-4 text-slate-400 bg-white z-2 text-sm leading-normal font-semibold before:bg-gradient-to-r before:from-transparent before:via-neutral-500/40 before:to-neutral-500/40 before:right-2 before:-ml-1/2 before:content-[''] before:inline-block before:w-3/10 before:h-px before:relative before:align-middle after:left-2 after:-mr-1/2 after:bg-gradient-to-r after:from-neutral-500/40 after:via-neutral-500/40 after:to-transparent after:content-[''] after:inline-block after:w-3/10 after:h-px after:relative after:align-middle">
                    Can't remember your password?</p>
            </div>
            <div class="text-center">
                <Link :href="route('stern::auth::forgot')"
                    class="inline-block w-full px-6 py-3 mt-2 mb-6 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">
                Forgot Password</Link>
            </div>
        </form>
    </div>
</template>
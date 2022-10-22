<script setup lang="ts">
const route = useRoute()
const config = useRuntimeConfig();

definePageMeta({
    //middleware: 'auth'
})

useHead({
    title: `${config.app.name} | Premium Website & Server Hosting`
})
</script>

<template>
    <div class="relative py-20 overflow-hidden">
        <div class="flex flex-wrap px-4 lg:px-40 w-full max-w-screen-2xl mx-auto">
            <div class="relative w-full lg:w-8/12 lg:mt-10">
                <h1
                    class="text-4xl sm:text-6xl text-center md:text-left uppercase mx-auto mb-7 lg:mx-0 font-black font-poppins max-w-[700px]">
                    <span class="text-blue-700">Powerful</span>
                    <br />
                    Hosting Solutions!
                </h1>
                <p class="mx-auto mb-7 lg:mx-0 opacity-90 text-gray-500 max-w-[600px]">
                    Welcome to {{ config.app.name }}, we're delighted to have you. Please
                    feel free to peruse our packages and determine which one best fits your needs. Customer
                    satisfaction and convenience are of the utmost importance to us.
                </p>
                <div
                    class="inline-flex items-center justify-center rounded-full mr-4 bg-slate-100 dark:bg-semi_dark mb-16 border-[1px] border-slate-50 border-solid border-opacity-10">
                    <div class="inline-flex items-center justify-center sm:bg-white w-0 sm:w-14 h-14 rounded-full">
                        <img class="hidden sm:block w-4 max-w-full"
                            src="https://www.catalystvm.com/assets/images/icons/bell.svg" />
                    </div>
                    <div class="text-sm px-5 \">Now the official
                        recommended host
                        for the Uvodo
                        Ecommerce
                        platform!</div>
                </div>
            </div>
            <div class="hidden relative lg:block w-full lg:w-4/12">
                <form action="/"
                    class="text-center ml-auto p-10 pt-16 rounded-2xl bg-semi_dark border-[1px] border-slate-50 border-solid border-opacity-10">
                    <div class="mb-7 text-xl font-bold">
                        We're giving 10% off to all students!
                        <br />
                        Verify your .edu email today.
                    </div>
                    <input
                        class="flex h-14 w-full px-5 bg-gray-800 rounded border-[1px] border-slate-50 border-solid border-opacity-10 mb-4 outline-0"
                        type="email" name="email" placeholder="Email address" autocomplete="off" />
                    <input
                        class="flex h-14 w-full px-5 bg-gray-800 rounded border-[1px] border-slate-50 border-solid border-opacity-10 mb-4 outline-0"
                        type="password" name="password" placeholder="Password" required />
                    <button-blue :undercase="true" class="w-full h-14 mb-4">Login</button-blue>

                    <div
                        class="relative flex justify-center items-center mb-4
                            after:absolute after:left-0 after:h-px after:w-24 after:bg-slate-50 after:opacity-20 after:mt-px 
                            before:absolute before:right-0 before:h-px before:w-24 before:bg-slate-50 before:opacity-20 before:mt-px">
                        <span class="text-xs text-gray-500 font-jetbrains">
                            Or sign up here
                        </span>
                    </div>

                    <button-dark :undercase="true" class="w-full h-14 mb-4 bg-slate-50/5">Register</button-dark>

                    <div class="text-gray-500 text-xs">
                        The student discount promotion, requires a valid .edu email
                        <br />
                        By signing up, you agree to the
                        <a href="#" class="text-blue-700">Terms of Service</a>.
                    </div>
                </form>
            </div>
        </div>

    </div>
</template>

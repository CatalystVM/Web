<script setup lang="ts">
const config = useRuntimeConfig();
</script>

<template>
    <nav class="block">
        <div class="px-3 sm:px-17 mx-auto max-w-screen-2xl">
            <div class="flex py-2.5 border-b border-slate-50 border-solid border-opacity-10 items-center">
                <NuxtLink class="flex items-center no-underline" to="/">
                    <img src="~/assets/images/logo-d.webp" class="h-8 lg:h-14 max-h-full dark:inline-block hidden" />
                    <img src="~/assets/images/logo.webp" class="h-8 lg:h-14 max-h-full inline-block dark:hidden" />
                </NuxtLink>
                <div class="hidden lg:flex items-center ml-5">
                    <nav-link label="Products" :dropdown="[
                        {
                            title: 'Cloud Compute Node',
                            description: 'Powerful compute instances',
                            route: null
                        },
                        {
                            title: 'Managed Database',
                            description: 'Database that just works',
                            route: null,
                            new: true
                        }
                    ]" />
                    <nav-link label="Features" />
                    <nav-link label="Marketplace" :dropdown="[
                        {
                            title: 'Uvodo', 
                            description: 'Deploy an Uvodo ecommerce platform',
                            route: null,
                            new: true
                        },
                        {
                            title: 'Browse Apps', 
                            description: 'Deploy applications and games',
                            route: '/marketplace/browse'
                        },
                        {
                            title: 'Become a Vendor', 
                            description: 'Add your application to the marketplace',
                            route: '/marketplace/apply'
                        }
                    ]" />
                    <nav-link label="Pricing" />
                    <nav-link label="Company" :dropdown="[
                        {
                            title: 'About Us', 
                            description: 'We are simplifying infrastructure!',
                            route: '/company/about'
                        },
                        {
                            title: 'Our Team', 
                            description: 'Meet the team behind our services.',
                            route: '/company/team',
                            soon: true
                        },
                        {
                            title: 'Contact', 
                            description: 'Have questions? Reach out to us.',
                            route: '/company/contact',
                            new: true
                        },
                    ]"></nav-link>
                </div>
                <div class="flex items-center justify-end ml-auto">
                    <div class="lg:ml-2.5">
                        <button-dark :undercase="true" to="/login">Login</button-dark>
                        <button-blue :undercase="true" to="/register">Register</button-blue>
                    </div>
                    <NuxtLink class="ml-3 text-slate-50 lg:hidden">
                        <img class="w-6"
                            src="https://www.catalystvm.com/assets/images/templates/navbar/hamburger.webp" />
                    </NuxtLink>
                </div>
            </div>
            <div class="flex py-4 justify-between items-center">
                <div class="flex items-center">
                    <NuxtLink class="flex items-center text-white" :href="'mailto:support@' + config.app.url_base">
                        <font-awesome-icon class="mr-2 w-3 h-3" icon="fa-solid fa-envelope" />
                        <span class="text-xs font-jetbrains">support@{{ config.app.url_base }}</span>
                    </NuxtLink>
                </div>
            </div>
        </div>
    </nav>
</template>
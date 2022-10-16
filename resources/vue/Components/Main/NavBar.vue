<script>
export default {

}
</script>

<template>
    <nav class="block">
        <div class="mx-auto sm:px-17 max-w-full">
            <div class="flex py-2.5 border-b border-slate-50 border-solid border-opacity-10 items-center">
                <div class="mr-3 text-slate-50 lg:hidden">
                    <img class="w-6" src="https://www.catalystvm.com/assets/images/templates/navbar/hamburger.webp" />
                </div>
                <Link class="flex items-center no-underline" :href="route('main::home')" target="_blank">
                <img src="@/../assets/images/logo-d.webp" class="h-8 lg:h-14 max-h-full dark:inline-block hidden" />
                <img src="@/../assets/images/logo.webp" class="h-8 lg:h-14 max-h-full inline-block dark:hidden" />
                </Link>
                <div class="lg:flex hidden items-center justify-end ml-auto">
                    <Link class="flex items-center no-underline mr-8 opacity-50 hover:opacity-100" href="#">
                    <img class="w-6 mr-2.5" src="https://www.catalystvm.com/assets/images/templates/navbar/gear.png" />
                    <span class="text-xs text-slate-100">Website Control
                        Panel</span>
                    </Link>
                    <div class="ml-2.5">
                        <Link
                            class="font-sans text-sm bg-blue-600 hover:bg-blue-700 text-white py-2.5 px-7 mr-2.5 rounded-full uppercase"
                            href="#">Login</Link>
                        <Link
                            class="font-sans text-sm bg-semi_dark text-slate-300 hover:text-white border border-slate-50 border-solid border-opacity-20 hover:border-opacity-50 py-2.5 px-7 rounded-full uppercase"
                            href="#">Register</Link>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>
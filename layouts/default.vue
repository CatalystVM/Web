<script setup lang="ts">
import { useState } from '#app'
const route = useRoute()
const config = useRuntimeConfig()

const user = useState('user')
const setColorTheme = (newTheme: Theme) => {
    useColorMode().preference = newTheme
}
//setColorTheme('dark')
</script>

<style scoped>
main {
    @apply mt-0 transition-all duration-200 overflow-hidden w-full h-screen m-0 font-roboto
}

main>section {
    @apply relative py-20 overflow-hidden;
}
</style>

<template>

    <Head>
        <Meta charset="utf-8" />
        <Meta name="viewport" content="width=device-width, initial-scale=1" />

        <Meta name="description" :content="config.app.description" />

        <Link rel="shortcut icon" href="/assets/images/favicon/favicon.ico" />
        <Link rel="icon" sizes="16x16 32x32 64x64" href="/assets/images/favicon/favicon.ico" />
        <Link rel="icon" type="image/png" href="/assets/images/favicon/favicon-196x196.png" sizes="196x196" />
        <Link rel="icon" type="image/png" href="/assets/images/favicon/favicon-96x96.png" sizes="96x96" />
        <Link rel="icon" type="image/png" href="/assets/images/favicon/favicon-32x32.png" sizes="32x32" />
        <Link rel="icon" type="image/png" href="/assets/images/favicon/favicon-16x16.png" sizes="16x16" />
        <Link rel="icon" type="image/png" href="/assets/images/favicon/favicon-128.png" sizes="128x128" />

        <Link rel="apple-touch-icon-precomposed" sizes="57x57"
            href="/assets/images/favicon/apple-touch-icon-57x57.png" />
        <Link rel="apple-touch-icon-precomposed" sizes="114x114"
            href="/assets/images/favicon/apple-touch-icon-114x114.png" />
        <Link rel="apple-touch-icon-precomposed" sizes="72x72"
            href="/assets/images/favicon/apple-touch-icon-72x72.png" />
        <Link rel="apple-touch-icon-precomposed" sizes="144x144"
            href="/assets/images/favicon/apple-touch-icon-144x144.png" />
        <Link rel="apple-touch-icon-precomposed" sizes="60x60"
            href="/assets/images/favicon/apple-touch-icon-60x60.png" />
        <Link rel="apple-touch-icon-precomposed" sizes="120x120"
            href="/assets/images/favicon/apple-touch-icon-120x120.png" />
        <Link rel="apple-touch-icon-precomposed" sizes="76x76"
            href="/assets/images/favicon/apple-touch-icon-76x76.png" />
        <Link rel="apple-touch-icon-precomposed" sizes="152x152"
            href="/assets/images/favicon/apple-touch-icon-152x152.png" />

        <Meta property="og:title" :content="config.app.name" />
        <Meta property="og:site_name" :content="config.app.name" />
        <Meta property="og:description" :content="config.app.description" />
        <Meta property="og:url" :content="config.app.url" />

        <Meta name="application-name" :content="config.app.name" />
        <Meta name="msapplication-TileColor" content="#FFFFFF" />
        <Meta name="msapplication-TileImage" content="/assets/images/favicon/mstile-144x144.png" />
        <Meta name="msapplication-square70x70logo" content="/assets/images/favicon/mstile-70x70.png" />
        <Meta name="msapplication-square150x150logo" content="/assets/images/favicon/mstile-150x150.png" />
        <Meta name="msapplication-wide310x150logo" content="/assets/images/favicon/mstile-310x150.png" />
        <Meta name="msapplication-square310x310logo" content="/assets/images/favicon/mstile-310x310.png" />
    </Head>

    <!-- <CookiesDialog /> -->
    <NavBar />

    <main class="ease-soft-in-out">
        <section>
            <slot />
        </section>
    </main>
    <!-- <Footer /> -->
</template> 
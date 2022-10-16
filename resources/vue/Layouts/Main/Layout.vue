<script>
import NavBar from '@/Components/Main/NavBar.vue'
import Footer from '@/Components/Main/Footer.vue'
import CookiesDialog from '@/Components/Main/CookiesDialog.vue'

export default {
    components: {
        NavBar, Footer, CookiesDialog
    },
    mounted() {
        var channel = window.Echo.channel('my-channel')
        channel.listen('MyEvent', function (data) {
            alert(JSON.stringify(data))
        })
    }
}
</script>

<template>

    <Head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

        <meta name="description" :content="$page.props.app.description" />

        <link rel="shortcut icon" href="/build//assets/images/favicon/favicon.ico" />
        <link rel="icon" sizes="16x16 32x32 64x64" href="/build//assets/images/favicon/favicon.ico">
        <link rel="icon" type="image/png" href="/build//assets/images/favicon/favicon-196x196.png" sizes="196x196" />
        <link rel="icon" type="image/png" href="/build//assets/images/favicon/favicon-96x96.png" sizes="96x96" />
        <link rel="icon" type="image/png" href="/build//assets/images/favicon/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="/build//assets/images/favicon/favicon-16x16.png" sizes="16x16" />
        <link rel="icon" type="image/png" href="/build//assets/images/favicon/favicon-128.png" sizes="128x128" />

        <link v-if="$page.props.app.mobile" rel="apple-touch-icon-precomposed" sizes="57x57"
            href="/build//assets/images/favicon/apple-touch-icon-57x57.png" />
        <link v-if="$page.props.app.mobile" rel="apple-touch-icon-precomposed" sizes="114x114"
            href="/build//assets/images/favicon/apple-touch-icon-114x114.png" />
        <link v-if="$page.props.app.mobile" rel="apple-touch-icon-precomposed" sizes="72x72"
            href="/build//assets/images/favicon/apple-touch-icon-72x72.png" />
        <link v-if="$page.props.app.mobile" rel="apple-touch-icon-precomposed" sizes="144x144"
            href="/build//assets/images/favicon/apple-touch-icon-144x144.png" />
        <link v-if="$page.props.app.mobile" rel="apple-touch-icon-precomposed" sizes="60x60"
            href="/build//assets/images/favicon/apple-touch-icon-60x60.png" />
        <link v-if="$page.props.app.mobile" rel="apple-touch-icon-precomposed" sizes="120x120"
            href="/build//assets/images/favicon/apple-touch-icon-120x120.png" />
        <link v-if="$page.props.app.mobile" rel="apple-touch-icon-precomposed" sizes="76x76"
            href="/build//assets/images/favicon/apple-touch-icon-76x76.png" />
        <link v-if="$page.props.app.mobile" rel="apple-touch-icon-precomposed" sizes="152x152"
            href="/build//assets/images/favicon/apple-touch-icon-152x152.png" />

        <meta v-if="!$page.props.app.mobile" property="og:title" :content="$page.props.app.name" />
        <meta v-if="!$page.props.app.mobile" property="og:site_name" :content="$page.props.app.name" />
        <meta v-if="!$page.props.app.mobile" property="og:description" :content="$page.props.app.description" />
        <meta v-if="!$page.props.app.mobile" property="og:url" :content="$page.props.app.url" />

        <meta v-if="!$page.props.app.mobile" name="application-name" :content="$page.props.app.name" />
        <meta v-if="!$page.props.app.mobile" name="msapplication-TileColor" content="#FFFFFF" />
        <meta v-if="!$page.props.app.mobile" name="msapplication-TileImage"
            content="/build//assets/images/favicon/mstile-144x144.png" />
        <meta v-if="!$page.props.app.mobile" name="msapplication-square70x70logo"
            content="/build//assets/images/favicon/mstile-70x70.png" />
        <meta v-if="!$page.props.app.mobile" name="msapplication-square150x150logo"
            content="/build//assets/images/favicon/mstile-150x150.png" />
        <meta v-if="!$page.props.app.mobile" name="msapplication-wide310x150logo"
            content="/build//assets/images/favicon/mstile-310x150.png" />
        <meta v-if="!$page.props.app.mobile" name="msapplication-square310x310logo"
            content="/build//assets/images/favicon/mstile-310x310.png" />
    </Head>

    <div
        class="w-full h-screen m-0 font-roboto antialiased font-normal text-left leading-default text-base dark:bg-dark bg-gray-50 text-slate-500">
        <!-- <CookiesDialog /> -->
        <NavBar />

        <main class="mt-0 transition-all duration-200 ease-soft-in-out">
            <section>
                <slot />
            </section>
        </main>
        <!-- <Footer /> -->
    </div>
</template> 
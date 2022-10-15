<script>
export default {
	mounted() {
		//document.getElementsByTagName('html')[0].className = this.$page.props.auth?.user?.dark_mode && !this.simple ? 'dark' : ''

		document.body.classList?.add('m-0')
		document.body.classList?.add('font-sans')
		document.body.classList?.add('antialiased')
		document.body.classList?.add('font-normal')
		document.body.classList?.add('text-left')

		document.body.classList?.add('leading-default')
		document.body.classList?.add('text-base')
		document.body.classList?.add('dark:bg-slate-1000')
		document.body.classList?.add('bg-gray-50')
		document.body.classList?.add('text-slate-500')

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

	<main class="mt-0 transition-all duration-200 ease-soft-in-out">
		<nav class="block">
			<div class="mx-auto sm:px-8 max-w-full">
				<div class="flex py-15 border-b border-slate-50 border-solid items-center">
					<div class="mr-10 text-slate-50 lg:hidden">
						<font-awesome-icon icon="fa-solid fa-bars fa-xl" />
					</div>
					<Link class="flex items-center no-underline" :href="route('main::home')" target="_blank">
					<img src="@/../assets/images/logo-d.webp" class="h-14 max-h-full dark:inline-block hidden" />
					<img src="@/../assets/images/logo.webp" class="h-14 max-h-full inline-block dark:hidden" />
					</Link>
					<div class="md:flex hidden items-center justify-end ml-auto">
						<Link class="flex items-center no-underline mr-8" href="#">
						<img class="w-6 mr-2.5"
							src="https://www.catalystvm.com/assets/images/templates/navbar/gear.png" />
						<span class="text-xs text-slate-100">Website Control Panel</span>
						</Link>
					</div>
				</div>
			</div>
		</nav>
		<section>
			<slot />
		</section>
	</main>
</template> 
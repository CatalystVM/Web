<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>{!! $title !!} | {{ config('app.name') }}</title>
	<meta name="description" content="{{ config('app.description') }}"/>

	<link rel="shortcut icon" href="{{ asset('images/favicon/favicon.ico') }}">
	<link rel="icon" sizes="16x16 32x32 64x64" href="{{ asset('images/favicon/favicon.ico') }}">
	<link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-196x196.png') }}" sizes="196x196" />
	<link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-96x96.png') }}" sizes="96x96" />
	<link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-32x32.png') }}" sizes="32x32" />
	<link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-16x16.png') }}" sizes="16x16" />
	<link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-128.png') }}" sizes="128x128" />
	
	@if ($agent->isMobile())
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('images/favicon/apple-touch-icon-57x57.png') }}" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('images/favicon/apple-touch-icon-114x114.png') }}" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('images/favicon/apple-touch-icon-72x72.png') }}" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('images/favicon/apple-touch-icon-144x144.png') }}" />
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{ asset('images/favicon/apple-touch-icon-60x60.png') }}" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ asset('images/favicon/apple-touch-icon-120x120.png') }}" />
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ asset('images/favicon/apple-touch-icon-76x76.png') }}" />
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ asset('images/favicon/apple-touch-icon-152x152.png') }}" />
		
	@else
		<meta property="og:title" content="{{ config('app.name') }}" />
		<meta property="og:site_name" content="{{ config('app.name') }}" />		
		<meta property="og:description" content="{{ config('app.description') }}" />
		<meta property="og:url" content="{{ config('app.url') }}" />

		<meta name="application-name" content="{{ config('app.name') }}"/>
		<meta name="msapplication-TileColor" content="#FFFFFF" />
		<meta name="msapplication-TileImage" content="{{ asset('images/favicon/mstile-144x144.png') }}" />
		<meta name="msapplication-square70x70logo" content="{{ asset('images/favicon/mstile-70x70.png') }}" />
		<meta name="msapplication-square150x150logo" content="{{ asset('images/favicon/mstile-150x150.png') }}" />
		<meta name="msapplication-wide310x150logo" content="{{ asset('images/favicon/mstile-310x150.png') }}" />
		<meta name="msapplication-square310x310logo" content="{{ asset('images/favicon/mstile-310x310.png') }}" />
	@endif

	@php
		$manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
	@endphp
	<link rel="stylesheet" href="/build/{{ $manifest['resources/css/app.css']['file'] }}">

	<script src="https://unpkg.com/@popperjs/core@2"></script>
	<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
</head>
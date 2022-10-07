<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">
	<x-Stern.Header title="{{ $title }}" />

	<body class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">
        <div class="container sticky top-0 z-sticky">
            <div class="flex flex-wrap -mx-3">
                <div class="w-full max-w-full px-3 flex-0">
                    <nav class="absolute top-0 left-0 right-0 z-30 flex flex-wrap items-center px-4 py-2 mx-6 my-4 shadow-soft-2xl rounded-blur bg-white/80 backdrop-blur-2xl backdrop-saturate-200 lg:flex-nowrap lg:justify-start">
                        <div class="flex items-center justify-between w-full p-0 pl-6 mx-auto flex-wrap-inherit">
                            <a class="py-2.375 text-sm mr-4 ml-4 whitespace-nowrap font-bold text-slate-700 lg:ml-0" href="{{ config('app.url') }}">{{ config('app.name') }}</a>
                            
                            <div navbar-menu="" class="items-center flex-grow overflow-hidden transition-all duration-500 ease-soft lg-max:max-h-0 basis-full lg:flex lg:basis-auto">
                                <ul class="flex flex-col pl-0 mx-auto mb-0 list-none lg:flex-row xl:ml-auto">
                                    <li>
                                        <a class="block px-4 py-2 mr-2 font-normal transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-sm text-slate-700 lg:px-2" href="../pages/sign-in.html">
                                            <i class="mr-1 fas fa-key opacity-60" aria-hidden="true"></i>
                                            Forgot Password?
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <main class="mt-0 transition-all duration-200 ease-soft-in-out ps">
            <section>
                <div class="relative flex items-center p-0 overflow-hidden bg-center bg-cover min-h-75-screen">
                    <div class="container z-10">
                        <div class="flex flex-wrap mt-0 -mx-3">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <x-Stern.Footer center />

        @vite('resources/js/app.js')
	</body>
</html>
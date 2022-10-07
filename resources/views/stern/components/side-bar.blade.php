<aside mini="false" class="fixed inset-y-0 left-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto transition-all duration-200 -translate-x-full bg-white border-0 shadow-none xl:ml-4 dark:bg-gray-950 ease-soft-in-out z-990 max-w-64 rounded-2xl xl:translate-x-0 xl:bg-transparent ps ps--active-y" id="sidenav-main">
	<div class="h-20">
		<i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer text-slate-400 dark:text-white xl:hidden" aria-hidden="true" sidenav-close-btn=""></i>
		<a class="block px-8 py-6  text-sm whitespace-nowrap text-slate-700 dark:text-white" href="{{ config('app.url') }}" target="_blank">
			<img src="/images/logo.webp" class="inline-block h-full max-w-full transition-all duration-200 ease-soft-in-out dark:hidden" alt="main_logo">
			<img src="/images/logo-d.webp" class="hidden h-full max-w-full transition-all duration-200 ease-soft-in-out dark:inline-block" alt="main_logo">
			<!-- <span class="ml-1 font-semibold transition-all duration-200 ease-soft-in-out">{{ config('app.name') }}</span> -->
		</a>
	</div>

	<hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent">
	<div class="items-center block w-full h-auto grow basis-full" id="sidenav-collapse-main">
		<ul class="flex flex-col pl-0 mb-0 list-none">
			@foreach($items as $item)
				<x-Stern.SidebarItem :item=$item />
            @endforeach
		</ul>
	</div>

	<div sidenav-card="" class="">
		<div class="">
			<div class="">
				<i sidenav-card-icon="" class="" aria-hidden="true"></i>
			</div>
			<div class=""></div>
		</div>
	</div>

</aside>

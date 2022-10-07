@extends('stern.layouts.main', ['title' => $account->name_first.'\'s Account'])

@section('content')
<div class="hidden md:block w-full px-6 mx-auto">
	<div class="relative mt-16 flex items-center overflow-hidden rounded-2xl bg-center p-0">
	</div>
	<div class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 -mt-16 overflow-hidden break-words border-0 shadow-blur dark:shadow-soft-dark-xl dark:bg-gray-950 rounded-2xl bg-white/80 bg-clip-border backdrop-blur-2xl backdrop-saturate-200">
		<div class="flex flex-wrap -mx-3">
			<div class="flex-none w-auto max-w-full px-3">
				<div class="text-base ease-soft-in-out h-19 w-19 relative inline-flex items-center justify-center rounded-xl text-white transition-all duration-200">
					<img src="{!! $account->GetProfileImage() !!}" alt="profile_image" class="w-full shadow-soft-sm rounded-xl">
				</div>
			</div>
			<div class="flex-none w-auto max-w-full px-3 my-auto">
				<div class="h-full">
					<h5 class="mb-1 dark:text-white">{{ $account->name_first }} {{ $account->name_last }}</h5>
					<p class="mb-0 font-semibold leading-normal text-sm dark:text-white dark:opacity-60">{{ $account->email }}</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="w-full p-6 mx-auto mt-4">
	<div class="flex flex-wrap -mx-3">
		<div class="w-full max-w-full px-3 lg-max:mt-6 xl:w-4/12">
			<x-Stern.Account.Information :account=$account />
		</div>

		<div class="w-full max-w-full px-3 xl:w-4/12">
			
		</div>

		<div class="w-full max-w-full px-3 lg-max:mt-6 xl:w-4/12">
			<x-Stern.Account.Billing :account=$account />
		</div>
	</div>

    <x-Stern.Footer />
</div>
@endsection
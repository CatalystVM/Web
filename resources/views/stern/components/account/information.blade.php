@props(['account'])

<div class="relative flex flex-col h-1/2 min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
	<div class="p-4 pb-0 mb-0 border-b-0 rounded-t-2xl">
		<div class="flex flex-wrap -mx-3">
			<div class="flex items-center w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-none">
				<h6 class="mb-0 dark:text-white">Profile Information</h6>
			</div>
		</div>
	</div>
	<div class="flex-auto p-4">
		<ul class="flex flex-col pl-0 mb-0 rounded-lg">
			<li class="relative block px-4 py-2 pt-0 pl-0 leading-normal border-0 rounded-t-lg text-sm text-inherit">
				<strong class="text-slate-700 dark:text-white">Full Name:</strong> &nbsp; {{ $account->name_full }}
			</li>
			<li class="relative block px-4 py-2 pl-0 leading-normal border-0 border-t-0 text-sm text-inherit">
				<strong class="text-slate-700 dark:text-white">Mobile:</strong> &nbsp; {{ $account->phone_number }}
			</li>
			<li class="relative block px-4 py-2 pl-0 leading-normal border-0 border-t-0 text-sm text-inherit">
				<strong class="text-slate-700 dark:text-white">Email:</strong> &nbsp; {{ $account->email }}
			</li>
		</ul>
	</div>
</div>

<div class="relative flex flex-col h-1/2 min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border mt-4">
	<div class="p-4 pb-0 mb-0 border-b-0 rounded-t-2xl">
		<div class="flex flex-wrap -mx-3">
			<div class="flex items-center w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-none">
				<h6 class="mb-0 dark:text-white">Sessions</h6>
			</div>
		</div>
	</div>
	<div class="flex-auto p-4">
        <div class="p-0 overflow-x-auto">
            <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                <thead class="align-bottom">
                    <tr>
                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">User Agent</th>
                        <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Location</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($account->sessions as $session)
                        <tr>
                            <td class="p-2 text-left align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <span class="font-semibold leading-tight text-xs text-slate-400">{{ $session->browser }}</span>
                            </td>
                            <td class="p-2 text-left align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <span class="font-semibold leading-tight text-xs text-slate-400">{{ $session->ip_address }}</span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

	</div>
</div>
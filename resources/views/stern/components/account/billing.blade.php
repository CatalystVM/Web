@props(['account'])

<div class="relative flex flex-col h-1/2 min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border mb-4">
	<div class="p-4 pb-0 mb-0 border-b-0 rounded-t-2xl">
		<div class="flex flex-wrap -mx-3">
			<div class="flex items-center w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-none">
				<h6 class="mb-0 dark:text-white">Billing Address</h6>
			</div>
		</div>
	</div>
	<div class="flex-auto p-4">
		<ul class="flex flex-col pl-0 mb-0 rounded-lg">
			<li class="relative block px-4 py-2 pt-0 pl-0 leading-normal border-0 rounded-t-lg text-sm text-inherit">
				<strong class="text-slate-700 dark:text-white">Company Name:</strong> &nbsp; CatalystVM LLC
			</li>

			<li class="relative block px-4 py-2 pt-0 pl-0 leading-normal border-0 rounded-t-lg text-sm text-inherit">
				<strong class="text-slate-700 dark:text-white">Address:</strong> &nbsp; 173 Weaver Rd
			</li>
			<li class="relative block px-4 py-2 pt-0 pl-0 leading-normal border-0 rounded-t-lg text-sm text-inherit">
				<strong class="text-slate-700 dark:text-white">City:</strong> &nbsp; Haddock
			</li>
			<li class="relative block px-4 py-2 pt-0 pl-0 leading-normal border-0 rounded-t-lg text-sm text-inherit">
				<strong class="text-slate-700 dark:text-white">State/Region:</strong> &nbsp; Georgia
			</li>
			<li class="relative block px-4 py-2 pt-0 pl-0 leading-normal border-0 rounded-t-lg text-sm text-inherit">
				<strong class="text-slate-700 dark:text-white">Country:</strong> &nbsp; United States
			</li>
		</ul>
	</div>
</div>

<div class="relative flex flex-col h-1/2 min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
	<div class="p-4 pb-0 mb-0 border-b-0 rounded-t-2sm">
		<div class="flex flex-wrap -mx-3">
			<div class="flex items-center w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-none">
				<h6 class="mb-0 dark:text-white">Cards</h6>
			</div>
		</div>
	</div>
	<div class="flex-auto p-4">
		<div class="p-0 overflow-x-auto">
			<table class="items-center w-full mb-0 align-top border-gray-200">
				<thead class="align-bottom">
					<tr>
						<th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Card Holder</th>
						<th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Experian Date</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
							<div class="flex px-2 py-1">
								<div>
									<img src="/assets/img/logos/visa.png" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl" />
								</div>
								<div class="flex flex-col justify-center">
									<h6 class="mb-0 leading-normal text-sm text-slate-200">{{ $account->name_full }}</h6>
									<p class="mb-0 leading-tight text-xs text-slate-200">****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;7852</p>
								</div>
							</div>
						</td>
						<td class="p-2 text-left align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
							<span class="font-semibold leading-tight text-xs text-slate-400">12/25</span>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
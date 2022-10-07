@extends('stern.layouts.main', ['title' => 'Accounts'])

@section('content')
<div class="w-full px-6 mx-auto">
    <div class="relative flex flex-col w-full min-w-0 mb-0 break-words bg-white border-0 border-transparent border-solid dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="flex-auto px-0 pt-0 pb-2">
            <div class="p-0 overflow-x-auto">
                <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                    <thead class="align-bottom">
                        <tr>
                            <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Name</th>
                            <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Function</th>
                            <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Status</th>
                            <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Employed</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($accounts as $account)
                            <tr>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <div class="flex px-2 py-1">
                                        <div>
                                            <img src="{!! $account->GetProfileImage() !!}" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl" alt="user1" />
                                        </div>
                                        <div class="flex flex-col justify-center">
                                            <h6 class="mb-0 leading-normal text-sm"><a href="{{ route('stern::accounts', ['user' => $account->id]) }}">{{ $account->name_full }}</a></h6>
                                            <p class="mb-0 leading-tight text-xs text-slate-400">{{ $account->email }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 font-semibold leading-tight text-xs">Manager</p>
                                    <p class="mb-0 leading-tight text-xs text-slate-400">Organization</p>
                                </td>
                                <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                                    <span class="bg-gradient-to-tl {{ Cache::has('is_online' . $account->id) ? "from-green-600 to-lime-400" : "from-red-600 to-rose-400" }} px-3.6 text-xs rounded-1.8 py-2.2 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ Cache::has('is_online' . $account->id) ? "Online" : "Offline" }}</span>
                                </td>
                                <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <span class="font-semibold leading-tight text-xs text-slate-400">23/04/18</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <x-Stern.Footer />
</div>
@endsection
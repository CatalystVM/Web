@props(['item'])

@if (!empty($item->route_name) || $item->submenu)
    @php
        $id = Str::random(6);
    @endphp

    <li class="mt-0.5 w-full">
        <a {!! $item->active ? 'active_primary="true"' : "" !!} {!! $item->submenu ? 'collapse_trigger="primary"' : '' !!} href="{!! $item->submenu ? 'javascript:;' : route($item->route_name) !!}" class="after:ease-soft-in-out ease-soft-in-out text-sm py-2.7 active xl:shadow-soft-xl my-0 mx-4 flex items-center whitespace-nowrap {{ $item->active ? 'rounded-lg bg-white' : '' }} px-4 font-semibold text-slate-700 transition-all after:ml-auto after:inline-block after:font-bold after:antialiased after:transition-all after:duration-200 dark:text-white dark:opacity-80 after:text-slate-800/50" aria-controls="{{ $id }}" role="button" aria-expanded="'{{ $item->active ? "true" : "false" }}'">
            <div class="stroke-none shadow-soft-sm {{ $item->active ? "bg-gradient-to-tl from-blue-700 to-sky-500" : "" }} mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center {{ $item->active ? 'text-white' : 'text-slate-800' }}">
                <i class="{{ $item->icon }}"> </i>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft text-slate-700">{{ $item->name }}</span>
        </a>

        @if ($item->submenu)
            <div class="h-auto overflow-hidden transition-all duration-200 ease-soft-in-out {{ $item->active ? '' : 'max-h-0' }}" id="{{ $id }}">
                <ul class="flex flex-wrap mb-0 list-none transition-all duration-200 ease-soft-in-out pl-4 ml-6">
                    @foreach($item->submenu as $sub)
                        <x-Stern.SidebarItemSub :item=$sub />
                    @endforeach
                </ul>
            </div>
        @endif
    </li>
@else
    <li class="mt-0.5 w-full">
        <hr class="h-px my-4 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent">
        <h6 class="pl-6 mb-2 ml-2 font-bold leading-tight uppercase text-xs opacity-60 dark:text-white">{{ $item->name }}</h6>
    </li>
@endif

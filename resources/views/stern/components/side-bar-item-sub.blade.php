@props(['item'])

<li class="w-full">
    @if ($item->active)
        @php
            $clazz = "ease-soft-in-out py-1.6 pl-4 text-sm before:-left-5 relative my-0 mr-4 flex items-center whitespace-nowrap rounded-lg bg-transparent pr-4 font-semibold text-slate-800 shadow-none transition-colors before:absolute before:top-1/2 before:h-2 before:w-2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800 dark:text-white dark:opacity-100 dark:before:bg-white dark:before:opacity-80 before:content-[''] ml-5.4";
        @endphp
    @else
        @php
            $clazz = "ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80";
        @endphp
    @endif
    <a {!! $item->active ? "active_page" : "" !!} active_secondary="" class="{{ $clazz }}" href="{!! $item->submenu ? 'javascript:;' : route($item->route_name) !!}">
        <span class="w-0 text-center transition-all duration-200 pointer-events-none ease-soft-in-out opacity-0"> {{ str($item->name)->limit(1) }} </span>
        <span class="transition-all duration-100 pointer-events-none ease-soft opacity-100"> {{ $item->name }} </span>
    </a>
</li>
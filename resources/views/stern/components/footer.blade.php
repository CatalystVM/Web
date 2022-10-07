@props(['center'])

@if (isset($center))
    <footer class="py-12">
        <div class="container">
            <div class="flex flex-wrap -mx-3">
                <div class="w-8/12 max-w-full px-3 mx-auto mt-1 text-center flex-0">
                    <p class="mb-0 text-slate-400">
                        © {{ date('Y') }} <a href="{{ config('app.url') }}" target="_blank">{{ config('app.name') }}</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
@else
    <footer class="pt-4">
        <div class="w-full px-6 mx-auto">
            <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                    <div class="leading-normal text-center text-sm text-slate-500 lg:text-left">
                        © {{ date('Y') }} <a href="{{ config('app.url') }}" class="font-semibold text-slate-700" target="_blank">{{ config('app.name') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endif
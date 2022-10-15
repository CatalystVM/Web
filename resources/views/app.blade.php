<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-mode="dark">
    <head>
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

        @routes

        @vite('resources/css/app.css')
        @vite('resources/js/app.js')

        @inertiaHead
    </head>
    <body>
        @inertia
    </body>
</html>
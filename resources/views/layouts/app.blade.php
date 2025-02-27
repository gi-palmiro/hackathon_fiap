{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}
{{--    <title>Shift.io Blog</title>--}}


{{--    @vite('resources/css/app.css')--}}


{{--    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.5/dist/cdn.min.js" defer></script>--}}

{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fluxui@latest/dist/flux.css" />--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/fluxui@latest/dist/flux.js" defer></script>--}}
{{--</head>--}}

{{--<body x-data="{}" class="text-black bg-white dark:bg-black dark:text-white transition-colors duration-300">--}}
{{--<header>--}}
{{--    <h1>Header do Blog Shift.io</h1>--}}
{{--    <button--}}
{{--        x-on:click="$store.theme.toggle()"--}}
{{--        class="px-4 py-2 bg-blue-500 text-white rounded"--}}
{{--    >--}}
{{--        Alternar Tema--}}
{{--    </button>--}}
{{--</header>--}}

{{--<x-main>--}}
{{--    @yield('content')--}}
{{--</x-main>--}}

{{--<footer>--}}
{{--    <p>Footer do Blog Shift.io</p>--}}
{{--</footer>--}}

{{--<script src="{{ asset('js/app.js') }}" defer></script>--}}
{{--</body>--}}
{{--</html>--}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Shift.io Blog</title>


    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fluxui@latest/dist/flux.css" />

    <script src="https://cdn.jsdelivr.net/npm/fluxui@latest/dist/flux.js" defer></script>


    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.5/dist/cdn.min.js" defer></script>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('flux', {
                dark: localStorage.getItem('theme') === 'dark',
                toggle() {
                    this.dark = !this.dark;
                    localStorage.setItem('theme', this.dark ? 'dark' : 'light');
                    document.documentElement.classList.toggle('dark', this.dark);
                }

            });
            document.documentElement.classList.toggle('dark', Alpine.store('flux').dark);

        });
    </script>


   {{-- <script>
        window.addEventListener('DOMContentLoaded', () => {
            if (window.Alpine) {
                Alpine.store('flux', {
                    dark: localStorage.getItem('theme') === 'dark',
                    toggle() {
                        this.dark = !this.dark;
                        localStorage.setItem('theme', this.dark ? 'dark' : 'light');
                        document.documentElement.classList.toggle('dark', this.dark);
                    }
                });
                document.documentElement.classList.toggle('dark', Alpine.store('flux').dark);
            } else {
                console.error('Alpine.js não foi carregado corretamente.');
            }
        });
    </script>--}}


    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}


    @livewireStyles
</head>
<body x-data="{}" class="text-white bg-zinc-900 dark:bg-white dark:text-black">
<x-main>
    @yield('content')
</x-main>
@livewireScripts
</body>
</html>

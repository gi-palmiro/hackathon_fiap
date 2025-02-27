<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Shift.io Blog</title>

    {{-- CSS do Vite --}}
    @vite('resources/css/app.css')

    {{-- Carrega Alpine.js diretamente --}}
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.5/dist/cdn.min.js" defer></script>

    {{-- Carrega Flux UI --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fluxui@latest/dist/flux.css" />
    <script src="https://cdn.jsdelivr.net/npm/fluxui@latest/dist/flux.js" defer></script>

    <!-- Script de inicialização do Alpine -->
    <script>
        document.addEventListener('alpine:init', () => {
            console.log('Alpine.js inicializado corretamente!');
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
</head>
<body x-data="{}" class="text-white bg-zinc-900 dark:bg-white dark:text-black">
<x-main>
    @yield('content')
</x-main>
</body>
</html>

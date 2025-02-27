<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Shift.io Blog</title>

    {{-- CSS compilado pelo Vite --}}
    @vite('resources/css/app.css')
    {{-- Flux UI CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fluxui@latest/dist/flux.css" />

    {{-- Flux UI (pode ser defer, pois não depende de Alpine) --}}
    <script src="https://cdn.jsdelivr.net/npm/fluxui@latest/dist/flux.js" defer></script>

    {{-- Carrega Alpine.js 3.10+ (sem defer) para termos suporte a $store --}}
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.5/dist/cdn.min.js"></script>

    {{-- Cria o store do Alpine.js logo após Alpine ser carregado --}}
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
            // Ao iniciar, aplica o tema conforme o localStorage
            document.documentElement.classList.toggle('dark', Alpine.store('flux').dark);
        });
    </script>

    {{-- Agora podemos carregar nosso app.js (se precisar de lógica adicional) --}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    @livewireStyles
</head>
<body x-data="{}" class="text-white bg-zinc-900 dark:bg-white dark:text-black">
<x-main>
    @yield('content')
</x-main>
@livewireScripts
</body>
</html>

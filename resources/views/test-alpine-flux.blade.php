<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Alpine e Flux</title>

    <!-- Carrega o CSS do Vite -->
    @vite('resources/css/app.css')

    <!-- Carrega Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.5/dist/cdn.min.js" defer></script>

    <!-- Carrega Flux UI -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fluxui@latest/dist/flux.css" />
    <script src="https://cdn.jsdelivr.net/npm/fluxui@latest/dist/flux.js" defer></script>

    <!-- Inicializa o Store do Modo Escuro -->
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('theme', {
                dark: localStorage.getItem('theme') === 'dark',
                toggle() {
                    this.dark = !this.dark;
                    localStorage.setItem('theme', this.dark ? 'dark' : 'light');
                    document.documentElement.classList.toggle('dark', this.dark);
                }
            });

            console.log('Alpine: Carregado corretamente');
            console.log('Store Inicial:', window.Alpine.store('theme'));

            if (Alpine.store('theme').dark) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        });
    </script>
</head>
<body x-data="{}" class="text-white bg-zinc-900 dark:bg-white dark:text-black">
<h1>Teste de Alpine.js e Flux UI</h1>

<!-- Botão de Alternância de Tema -->
<button
    x-on:click="$store.theme.toggle()"
    class="px-4 py-2 bg-blue-500 text-white rounded"
>
    Alternar Tema
</button>
</body>
</html>

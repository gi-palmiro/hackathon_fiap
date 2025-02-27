<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste com Flux e Alpine</title>

    {{-- Carrega Alpine.js --}}
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.5/dist/cdn.min.js" defer></script>

    {{-- Carrega Flux UI --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fluxui@latest/dist/flux.css" />
    <script src="https://cdn.jsdelivr.net/npm/fluxui@latest/dist/flux.js" defer></script>
</head>
<body x-data="{}">
<h1>Teste com Flux e Alpine</h1>

<!-- Teste do Botão Flux -->
<div class="flex justify-center my-8">
    <flux:button
        x-on:click="$store.flux.toggle()"
        variant="subtle"
        aria-label="Alternar tema"
        class="transition-colors duration-300"
    >
        <div x-show="!$store.flux.dark" class="flex items-center">
            <flux:icon.sun class="text-yellow-500 size-6" />
        </div>
        <div x-show="$store.flux.dark" class="flex items-center">
            <flux:icon.moon class="text-white size-6" />
        </div>
    </flux:button>
</div>

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
</body>
</html>

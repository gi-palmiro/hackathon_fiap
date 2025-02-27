<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Alpine.js</title>

    {{-- Carrega Alpine.js --}}
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.5/dist/cdn.min.js" defer></script>
</head>
<body>
<h1>Teste com Alpine.js</h1>

<div x-data="{ dark: false }">
    <button x-on:click="dark = !dark">
        Alternar Tema
    </button>
    <p x-text="dark ? 'Modo Escuro' : 'Modo Claro'"></p>
</div>
</body>
</html>

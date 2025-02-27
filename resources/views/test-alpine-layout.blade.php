<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste com Alpine.js</title>

    <!-- Adicionando o CSS básico do Vite -->
    @vite('resources/css/app.css')

    <!-- Carregando apenas o Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.5/dist/cdn.min.js" defer></script>
</head>
<body class="bg-gray-100 text-black" x-data="alpineTest()" :class="{ 'dark': darkMode }">
<header class="p-4 bg-blue-500 text-white">
    <h1>Header do Blog Shift.io</h1>
</header>

<main class="p-6">
    <h2 class="text-2xl font-bold">Teste com Alpine.js</h2>
    <p>Esta é uma página de teste para validar o Alpine.js.</p>

    <!-- Botão de alternância de tema -->
    <button
        class="px-4 py-2 bg-gray-800 text-white rounded"
        x-on:click="toggleTheme()"
    >
        Alternar Tema
    </button>
</main>

<footer class="p-4 bg-blue-500 text-white">
    <p>Footer do Blog Shift.io</p>
</footer>

<script>
    function alpineTest() {
        return {
            darkMode: localStorage.getItem('theme') === 'dark',
            toggleTheme() {
                this.darkMode = !this.darkMode;
                localStorage.setItem('theme', this.darkMode ? 'dark' : 'light');
                document.documentElement.classList.toggle('dark', this.darkMode);
            }
        }
    }

    // Testar no console se Alpine está disponível
    window.addEventListener('DOMContentLoaded', () => {
        console.log('Alpine:', window.Alpine ? 'Carregado corretamente' : 'Não carregado');
    });
</script>
</body>
</html>

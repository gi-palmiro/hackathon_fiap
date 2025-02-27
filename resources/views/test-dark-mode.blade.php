<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Modo Escuro</title>
    @vite('resources/css/app.css')
</head>
<body>
<h1>Teste de Modo Escuro</h1>
<p>Se o modo escuro estiver ativado, o fundo deve ser escuro e o texto branco.</p>
<button onclick="ativarModoEscuro()">Ativar Modo Escuro</button>
<button onclick="ativarModoClaro()">Ativar Modo Claro</button>

<script>
    function ativarModoEscuro() {
        document.documentElement.classList.add('dark');
    }

    function ativarModoClaro() {
        document.documentElement.classList.remove('dark');
    }
</script>
</body>
</html>

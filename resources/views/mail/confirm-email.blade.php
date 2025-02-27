<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo à Newsletter do Shift.io Blog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f9f9f9;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 4px;
        }
        .header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }
        .content {
            padding: 20px 0;
        }
        .footer {
            font-size: 12px;
            color: #777;
            text-align: center;
            border-top: 1px solid #eee;
            padding-top: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Shift.io Blog Newsletter</h1>
    </div>
    <div class="content">
        <p>Olá, {{ $name }}!</p>
        <p>Obrigado por se inscrever na nossa newsletter de tecnologia. A partir de agora, você receberá as últimas notícias, análises e tendências do mundo tech diretamente na sua caixa de entrada.</p>
        <p>Fique de olho nos nossos conteúdos e aproveite para interagir com as novidades.</p>
        <p>Se tiver alguma dúvida ou sugestão, não hesite em nos contatar.</p>
        <p>Atenciosamente,<br>Equipe Shift.io Blog</p>
    </div>
    <div class="footer">
        <p>Shift.io Blog © {{ date('Y') }}. Todos os direitos reservados.</p>
    </div>
</div>
</body>
</html>

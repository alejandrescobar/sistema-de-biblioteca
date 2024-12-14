<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuidados Bucais Gerais</title>
    <!-- Link para o CSS do Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link para o FontAwesome para o ícone do WhatsApp -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background: linear-gradient(to right, #ffffff, #f2f2f2);
            padding-top: 20px;
        }
        .footer {
            background-color: #343a40; /* Cor de fundo escura */
            color: #fff; /* Cor do texto clara */
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <!-- Botão de Voltar -->
    <button onclick="window.history.back()" class="btn btn-secondary my-3">
        <i class="fas fa-arrow-left"></i> Voltar
    </button>

    <!-- Título da Página -->
    <div class="container text-center">
        <h1 class="my-4 text-primary">Cuidados Bucais Gerais</h1>
        <p class="lead">Manter uma boa saúde bucal é essencial para o bem-estar geral. A seguir, apresentamos algumas dicas e dois vídeos educativos para ajudar no cuidado da sua boca.</p>
    </div>

    <!-- Conteúdo Principal -->
    <div class="container">
        <h2 class="text-center my-4">Dicas Importantes para a Saúde Bucal</h2>
        <ul class="list-group">
            <li class="list-group-item"><strong>Escove os dentes:</strong> Escove os dentes pelo menos duas vezes ao dia, usando uma escova de dentes adequada e creme dental com flúor.</li>
            <li class="list-group-item"><strong>Use fio dental:</strong> O uso do fio dental é essencial para remover a placa bacteriana e restos de alimentos entre os dentes.</li>
            <li class="list-group-item"><strong>Visite o dentista regularmente:</strong> Realize consultas periódicas com um de nossos dentistas para verificar a saúde bucal e realizar limpezas profissionais.</li>
            <li class="list-group-item"><strong>Evite alimentos açucarados:</strong> Alimentos ricos em açúcar podem causar cáries. Tente limitar a ingestão de doces e refrigerantes.</li>
            <li class="list-group-item"><strong>Hidrate-se:</strong> Beba muita água para manter a boca hidratada e ajudar na produção de saliva, que ajuda a limpar a boca e prevenir cáries.</li>
        </ul>
    </div>

    <!-- Vídeos Educativos -->
    <div class="container my-5">
        <h2 class="text-center">Assista a dois vídeos sobre cuidados bucais:</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="embed-responsive embed-responsive-16by9">
                    <!-- Corrigido: link do vídeo com o formato embed -->
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/JzPy6Rc6ABY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="embed-responsive embed-responsive-16by9">
                    <!-- Corrigido: link do vídeo com o formato embed -->
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/U8LTZ-am0Sk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Rodapé -->
    <footer class="footer">
        <p>&copy; 2024 Cuidados Bucais. Todos os direitos reservados.</p>
    </footer>

    <!-- Scripts do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

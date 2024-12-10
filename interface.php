<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DR Marco</title>
    <!-- Link para o CSS do Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link para o FontAwesome para o ícone do WhatsApp -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Link para o CSS personalizado -->
    <link rel="stylesheet" href="css/estilo.css">
    <style>
        body {
            background: linear-gradient(to right, #ffffff, #999999); /* Degradê de branco para cinza */
            font-family: Arial, sans-serif;
        }
        .navbar {
            background: linear-gradient(to right, #00c6ff, #0072ff); /* Fundo do cabeçalho igual ao fundo da página */
            margin-bottom: 30px;
        }
        .carousel-item {
            position: relative;
        }
        .carousel-caption {
            position: absolute;
            bottom: 20px;
            left: 0;
            right: 0;
            text-align: center;
            color: #fff;
        }
        .carousel-item img {
            width: 100%;
            height: 500px; /* Tamanho fixo para a imagem do carrossel */
            object-fit: cover;
            filter: brightness(70%); /* Imagem escura por padrão */
            transition: filter 0.5s ease; /* Transição suave ao aplicar o filtro */
        }
        .carousel-item:hover img {
            filter: brightness(100%); /* Clareia a imagem ao passar o mouse */
        }
        .service-box {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
            margin: 8px;
            border-radius: 14px;
            color: white;
            cursor: pointer; /* Adiciona o cursor de pointer para indicar que é clicável */
            transition: transform 0.3s ease; /* Adiciona uma transição suave */
            position: relative; /* Necessário para o posicionamento do ícone */
            overflow: hidden; /* Para garantir que o ícone não ultrapasse os limites da caixa */
            height: 135px; /* Altura fixa para manter a consistência */
            box-sizing: border-box; /* Inclui o padding e border no cálculo da largura e altura total */
        }
        .service-box:hover {
            transform: scale(1.05); /* Aumenta a caixa ao passar o mouse */
        }
        .service-box img {
            width: 50px; /* Ajuste o tamanho do ícone para maior visibilidade */
            height: 50px; /* Ajuste o tamanho do ícone para maior visibilidade */
            margin-bottom: 10px; /* Espaçamento entre o ícone e o texto */
        }
        .service-box p {
            margin: 0; /* Remove a margem padrão do parágrafo */
            font-size: 16px; /* Ajusta o tamanho da fonte */
            font-weight: bold; /* Deixa o texto em negrito */
            color: white;
        }
        .service-box a {
            text-decoration: none; /* Remove o sublinhado dos links */
            color: inherit; /* Faz com que a cor do texto herde a cor da caixa */
        }
        .service-box a:hover {
            text-decoration: none; /* Remove o sublinhado dos links ao passar o mouse */
            color: inherit; /* Mantém a cor do texto consistente */
        }
        .estetica { background-color: #007bff; }
        .protese { background-color: #28a745; }
        .ortodontia { background-color: #17a2b8; }
        .periodontia { background-color: #dc3545; }
        .endodontia { background-color: #6f42c1; }
        .kids { background-color: #fd7e14; }

        /* Estilos para o botão do WhatsApp */
        .fixed-button {
            position: fixed;
            bottom: 20px; /* Distância do fundo da página */
            right: 20px; /* Distância da borda direita da página */
            background-color: #25D366; /* Cor de fundo do WhatsApp */
            color: white; /* Cor do ícone */
            border-radius: 50%; /* Botão redondo */
            width: 60px; /* Largura do botão */
            height: 60px; /* Altura do botão */
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Sombra do botão */
            z-index: 1000; /* Garante que o botão fique acima de outros elementos */
            font-size: 20px; /* Tamanho do ícone */
            text-decoration: none; /* Remove o sublinhado do link */
            transition: background-color 0.3s, transform 0.1s; /* Animação suave */
        }
        .fixed-button:hover {
            background-color: #128C7E; /* Cor de fundo mais escura ao passar o mouse */
            transform: scale(1.1); /* Aumenta o botão ao passar o mouse */
        }
        .fixed-button:active {
            transform: scale(0.9); /* Diminui o botão ao ser clicado */
        }
        /* Animação de pulsação */
        .fixed-button {
            animation: pulse 2s infinite; /* Animação de pulsação */
        }
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }

        /* Estilo do rodapé */
        .footer {
            background-color: #343a40; /* Cor de fundo escura */
            color: #fff; /* Cor do texto clara */
            padding: 20px 0; /* Espaçamento vertical */
        }
        .footer a {
            color: #fff; /* Cor dos links */
        }
        .footer a:hover {
            text-decoration: underline; /* Sublinha o link ao passar o mouse */
        }
        .footer .social-media {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }
        .footer .social-media img {
            max-width: 40px; /* Ajusta o tamanho da imagem do Instagram */
            margin-right: 10px; /* Espaçamento entre a imagem e o texto */
        }
        .footer .contact-info {
            text-align: center;
        }
        .footer .contact-info img {
            max-width: 40px; /* Ajusta o tamanho da imagem do e-mail */
            margin-top: 10px; /* Espaçamento acima da imagem do e-mail */
            padding: 10px;
        }
    </style>
</head>
<body>
    <!-- Navegação -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">DR Marco</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="site/cadatro.html">Agendar <span class="sr-only">(página atual)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Carrossel -->
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/img1.jpg" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Atendemos Todas as Idades</h5>
                    <p>Dos mais novos até os mais velhos</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/img4.jpg" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Conforto</h5>
                    <p>Apenas aqui terá uma experiência única</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/img5.jpg" class="d-block w-100" alt="Slide 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Profissional de Ponta</h5>
                    <p>Sendo referência na região</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm">
                <a href="site/cuidados.html" class="service-box estetica">
                    <img src="img/escova-de-dente.png" alt="Ícone Estética">
                    <p>Cuidado geral</p>
                </a>
            </div>
            <div class="col-sm">
                <a href="site/cadatro.html" class="service-box protese">
                    <img src="img/proteses.png" alt="Ícone Prótese Dentária">
                    <p>PRÓTESE</p>
                </a>
            </div>
            <div class="col-sm">
                <a href="/site/ortodontia.html" class="service-box ortodontia">
                    <img src="img/ortodontico.png" alt="Ícone Ortodontia">
                    <p>ORTODONTIA</p>
                </a>
            </div>
            <div class="col-sm">
                <a href="/site/periodontia.html" class="service-box periodontia">
                    <img src="img/gengivas.png" alt="Ícone Periodontia">
                    <p>PERIODONTIA</p>
                </a>
            </div>
            <div class="col-sm">
                <a href="/site/endodontia.html" class="service-box endodontia">
                    <img src="img/canal-radicular.png" alt="Ícone Endodontia">
                    <p>ENDODONTIA</p>
                </a>
            </div>
            <div class="col-sm">
                <a href="/site/cadastro.html" class="service-box kids">
                    <img src="img/dental.png" alt="Ícone Kids">
                    <p>KIDS</p>
                </a>
            </div>
        </div>
    </div>

    <!-- Botão do WhatsApp -->
    <a href="https://wa.me/3135312277" class="fixed-button" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Rodapé -->
    <footer class="footer text-center">
        <div class="container">
            <div class="social-media">
                
                <p>&copy; 2024 DR Marco. Todos os direitos reservados.</p>
            </div>
            <div class="contact-info">
               
                <p><a href="#">Política de Privacidade</a> | <a href="#">Termos de Serviço</a></p>
                <img src="img/gmail.png" alt="Email">
                <img src="img/instagram.png" alt="Instagram">
            </div>
        </div>
    </footer>

    <!-- Scripts do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

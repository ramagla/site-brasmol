<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bras-mol</title>

    <!-- Favicon -->
    <link rel="icon" href="imagens/Brasmol.png" type="image/png">

    <!-- Importação de estilos e fontes -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        @font-face {
            font-family: "Roboto";
            src: url("fonts/Roboto-Regular.ttf") format("truetype");
        }

        @font-face {
            font-family: "Roboto";
            src: url("fonts/Roboto-Medium.ttf") format("truetype");
            font-weight: 600;
        }

        @font-face {
            font-family: "Roboto";
            src: url("fonts/Roboto-Bold.ttf") format("truetype");
            font-weight: 800;
        }

        body {
            font-family: "Roboto", sans-serif;
        }
    </style>

    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js"></script>

    <!-- Google Ads -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-395261678"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-395261678');
        gtag('event', 'conversion', {
            'send_to': 'AW-395261678/Vy-0CL6hlb4CEO7tvLwB'
        });
    </script>
</head>

<body>

    <header id="cabecalho" style="position: fixed; top: 0; left: 0; width: 100%; z-index: 1000;">
        <a href="index.php">
            <h2>
                <figure id="logo">
                    <img class="log" src="imagens/brasmol-logo.svg" alt="Logotipo Bras-Mol">
                </figure>
            </h2>
        </a>
        <input type="checkbox" id="bt_menu">
        <label for="bt_menu" class="menu-button">
            <img class="botmenu" src="imagens/botao.svg" alt="Botão">
        </label>
        <nav id="menu" class="menu">
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#rodape">Contato</a></li>
            </ul>
        </nav>
    </header>

    <script>
        const menuItems = document.querySelectorAll('.menu a[href^="#"]');

        function getScrollTopByHref(element) {
            const id = element.getAttribute('href');
            return document.querySelector(id).offsetTop;
        }

        function scrollToPosition(to) {
            smoothScrollTo(0, to);
        }

        function scrollToIdOnClick(event) {
            event.preventDefault();
            const to = getScrollTopByHref(event.currentTarget) - 80;
            scrollToPosition(to);
        }

        menuItems.forEach(item => {
            item.addEventListener('click', scrollToIdOnClick);
        });

        function smoothScrollTo(endX, endY, duration) {
            const startX = window.scrollX || window.pageXOffset;
            const startY = window.scrollY || window.pageYOffset;
            const distanceX = endX - startX;
            const distanceY = endY - startY;
            const startTime = new Date().getTime();

            duration = typeof duration !== 'undefined' ? duration : 400;

            const easeInOutQuart = (time, from, distance, duration) => {
                if ((time /= duration / 2) < 1) return distance / 2 * time * time * time * time + from;
                return -distance / 2 * ((time -= 2) * time * time * time - 2) + from;
            };

            const timer = setInterval(() => {
                const time = new Date().getTime() - startTime;
                const newX = easeInOutQuart(time, startX, distanceX, duration);
                const newY = easeInOutQuart(time, startY, distanceY, duration);
                if (time >= duration) {
                    clearInterval(timer);
                }
                window.scroll(newX, newY);
            }, 1000 / 60); // 60 fps
        }
    </script>

    <div class="alinhamento mt-5">
        <div class="inicial">
            <h1 class="titulo-principal mt-5">Indústria de Molas</h1>
            <h2>Estampados e artefatos metálicos</h2>

            <div id="produtos" class="global-page-container">
                <div class="watch-slider">
                    <img data-name="Molas de tração" data-price="290.35" class="slide" src="imagens/mola-tracao.png" alt="Molas de tração">
                    <img data-name="Molas de compressão" data-price="360.20" class="slide" src="imagens/mola-compressao.png" alt="Molas de compressão">
                    <img data-name="Molas de Torção" data-price="220.00" class="slide" src="imagens/mola-torcao.png" alt="Molas de Torção">
                    <img data-name="Hastes e Aramados" data-price="220.00" class="slide" src="imagens/hastes-e-aramados.png" alt="Hastes e Aramados">
                    <img data-name="Estampados" data-price="2680.00" class="slide" src="imagens/estampados.png" alt="Estampados">
                </div>
                <div id="arrow-prev" class="arrow"></div>
                <div id="watch-name" class="description"></div>
                <div id="arrow-next" class="arrow"></div>
            </div>

            <div class="meta">
                <h1 class="titulo-principal">Metalúrgica em São Paulo</h1>
                <h4 class="subtitulo2">
                    ATENDIMENTO A NÍVEL NACIONAL - CERTIFICADA IATF 16949
                    <br>
                    <a href="https://servidor-estaticos-teal-ten.vercel.app/Certificado%20_IATF.pdf" target="_blank">
                        <img src="imagens/certificado-IATF.png" alt="Certificado IATF" style="width: 60px; height: auto; margin-top: 10px;">
                    </a>
                </h4>
            </div>
        </div>

        <div class="orcamento container mt-4">
            <div class="orcamento1">
                <h2>COTAÇÃO ONLINE</h2>
            </div>
            <div class="orcamento2 mt-5">
                <form class="form" method="POST" action="email.php">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="nome" placeholder="Nome" required>
                        </div>
                        <div class="form-group col-md-4">
                            <input type="tel" class="form-control" name="whatsapp" placeholder="Whatsapp ou Telefone" id="whatsapp">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="email" class="form-control" name="email" placeholder="email" id="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="mensagem" rows="4" placeholder="Mensagem" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-5">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <div class="background-fabrica">
        <div class="alinhamento">
            <div class="sobre">
                <h3 id="sobre" class="titulo-principal">Sobre nós</h3>
                <div class="sobre1">
                    <div class="fotos">
                        <img class="fundador" src="imagens/fundador.png" alt="Fundador da Brasmol">
                        <img class="fundador" src="imagens/fundador2.png" alt="Fundador da Brasmol 2">
                        <img class="fundador" src="imagens/fabrica.png" alt="Fábrica Brasmol">
                    </div>
                    <div class="texto">
                        <h4 class="subtitulo">Do início aos dias de hoje</h4>
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <ul class="timeline">
                                        <li>

                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">ANOS 40</h4>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Sr. Diego Daniel Pedro Villegas Ruiz, ou Sr. Pedro Villegas, como todos o conheciam, durante a 2ª Guerra Mundial começou a fabricar em sua casa peças de reposição para a indústria têxtil em que trabalhava.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">FIM DOS ANOS 40</h4>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Algum tempo depois o Sr. Pedro assumiu de vez as máquinas e equipamentos de artefatos para expansão dos negócios. Assim nasceu a Fábrica de Molas de Arame de Aço Pedro Villegas Ruiz.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">ENTRE OS ANOS 60 E 70</h4>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>A empresa atravessou épocas de crise na indústria nacional, e conseguiu resistir a uma série de obstáculos nos anos 70, tais como a crise do petróleo, quebra de bancos mundiais e a instabilidade política na época.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">ANOS 80</h4>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Em meados dos anos 80 a empresa se instalou numa grande área em Itaquaquecetuba – 35 km do Centro de São Paulo. Sua área construída, hoje, dobrou de tamanho para mais 5.000 m2 e seu terreno quadruplicado para mais de 40.000 m2. A privilegiada localização conta, hoje, com excelente malha de circulação e mobilidade, verificados a partir da extensão do Rodoanel, próximo à Rodovia Ayrton Senna, onde nos situamos.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">ANOS 2000</h4>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>A BRASMOL foi a primeira indústria de molas do país a receber a certificação ISO TS 16949. Atualmente certificada pela IATF 16949.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Seção Fábrica -->
    <div class="card-container fabrica">
        <!-- Card 1 -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img class="icons" src="imagens/cnc.svg" alt="Máquinas CNC">
                </div>
                <div class="flip-card-back">
                    <h2>Máquinas CNC</h2>
                    <p>Máquinas automáticas de última geração (CNC) para produção de molas.</p>
                </div>
            </div>
        </div>


        <!-- Card 4 -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img class="icons" src="imagens/demarcacao.svg" alt="Áreas demarcadas">
                </div>
                <div class="flip-card-back">
                    <h2>Áreas Demarcadas</h2>
                    <p>Áreas demarcadas, locais identificados para peças prontas, matéria-prima e sucata.</p>
                </div>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img class="icons" src="imagens/corredores.svg" alt="Corredores livres">
                </div>
                <div class="flip-card-back">
                    <h2>Corredores Livres</h2>
                    <p>Corredores livres para circulação e movimentação de caixas plásticas para transporte de peças e piso limpo.</p>
                </div>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img class="icons" src="imagens/organizacao.svg" alt="Organização">
                </div>
                <div class="flip-card-back">
                    <h2>Organização</h2>
                    <p>Organização, limpeza e disciplina; fatores motivacionais também para seus colaboradores.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="clientes">
        <div class="arraste">
            <p><img class="seta" src="imagens/arrow_prev.svg" alt="seta">ARRASTE PARA VER MAIS<img class="seta" src="imagens/arrow_next.svg" alt="seta"></p>
        </div>
        <div id="background" class="watch-sld">
            <img class="slide" src="imagens/Bras-Mol.jpg" alt="Imagem 1">
            <img class="slide" src="imagens/fabrica-metalurgica.jpg" alt="Imagem 2">
            <img class="slide" src="imagens/qualidade2.jpg" alt="Imagem 3">
            <img class="slide" src="imagens/qualidade.jpg" alt="Imagem 4">
            <img class="slide" src="imagens/maquina-2.jpg" alt="Imagem 5">
            <img class="slide" src="imagens/estoque.jpg" alt="Imagem 6">
            <img class="slide" src="imagens/materia-prima.jpg" alt="Imagem 7">
            <img class="slide" src="imagens/industria.JPG" alt="Imagem 8">
            <img class="slide" src="imagens/temperatura.jpg" alt="Imagem 9">
        </div>
    </div>

    <!-- Seção Qualidades -->
    <div class="card-container">
        <!-- Card 1 -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="imagens/materia-prima.webp" alt="Matéria-prima">
                </div>
                <div class="flip-card-back">
                    <h2>Matéria-prima de Qualidade</h2>
                    <p>Garantimos a excelência através da seleção rigorosa de matéria-prima, firmando parcerias estratégicas com fornecedores renomados como Belgo, Di Martino, Zincagem Marisa, Superfine e Zincagem Martins. Essa colaboração nos permite oferecer produtos e serviços da mais alta qualidade, consolidando nossa posição no mercado.</p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="imagens/64anos.png" alt="64 Anos de Tradição">
                </div>
                <div class="flip-card-back">
                    <h2>Anos de Tradição</h2>
                    <p>Com 64 anos de experiência no setor e o pioneirismo de ser a primeira empresa no Brasil a conquistar a certificação ISO IATF 16949.</p>
                </div>
            </div>
        </div>



        <div class="referencias">
            <div class="container">
                <h2 class="titulo-principal">Nossas Referências</h2>
                <div class="logo-carousel">
                    <div><img src="imagens/clientes/bosh.svg" alt="Logo Bosh"></div>
                    <div><img src="imagens/clientes/hitachi.png" alt="Logo Hitachi"></div>
                    <div><img src="imagens/clientes/marelli.svg" alt="Logo Marelli"></div>
                    <div><img src="imagens/clientes/volkswagen.png" alt="Logo Volkswagen"></div>
                    <div><img src="imagens/clientes/delphi.png" alt="Logo Delphi"></div>
                    <div><img src="imagens/clientes/fame.jpg" alt="Logo Fame"></div>
                    <div><img src="imagens/clientes/ncr.png" alt="Logo NCR"></div>
                    <div><img src="imagens/clientes/krj.png" alt="Logo KRJ"></div>
                    <div><img src="imagens/clientes/te.png" alt="Logo TE Connectivity"></div>
                    <div><img src="imagens/clientes/elgin.png" alt="Logo Elgin"></div>
                </div>
            </div>
        </div>

        <footer id="rodape">
            <ol>
                <li>
                    <h3>Contato</h3>
                    <a href="tel:1146482611">(11) 4648-2611</a>
                    <a href="mailto:vendas@brasmol.com.br">vendas@brasmol.com.br</a>
                    <a href="mailto:sac@brasmol.com.br">sac@brasmol.com.br</a>
                    <a href="mailto:rh@brasmol.com.br" target="_blank">Trabalhe Conosco</a></br>
                    <h3>Localização</h3>
                    <p>
                        <a href="https://www.google.com/maps/place/Est.+Bonsucesso,+1953+-+Rio+Abaixo,+Itaquaquecetuba+-+SP,+08579-000" target="_blank" class="map-link" title="Ir até o Maps">
                            Est. Bonsucesso, 1953 - Rio Abaixo - Itaquaquecetuba / SP - CEP 08579-000
                    </p>
                    </a>
                </li>
                <li>
                    <h3>Redes Sociais</h3>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/profile.php?id=100054303726073&sk=about" target="_blank">
                            <img src="imagens/facebook.png" alt="Facebook">
                        </a>
                        <a href="https://www.linkedin.com/company/brasmol" target="_blank">
                            <img src="imagens/linkedin.png" alt="LinkedIn">
                        </a>
                        <a href="https://www.youtube.com/@brasmolmolas1167" target="_blank">
                            <img src="imagens/youtube.png" alt="YouTube" style="height: 30px;">
                        </a>
                    </div>
                </li>
                <li>
                    <h3>Anéis de Trava</h3>
                    <a href="https://servidor-estaticos-teal-ten.vercel.app/Cat%C3%A1logo.pdf" target="_blank">Catálogo</a>
                    <a href="https://servidor-estaticos-teal-ten.vercel.app/Manual%20do%20Usu%C3%A1rio.pdf" target="_blank">Manual de Usuário</a>
                </li>
                <li>
                    <h3>Registros e Certificados</h3>
                    <a href="link-para-certificado-inmetro.pdf" target="_blank">INMETRO</a>
                    <a href="https://servidor-estaticos-teal-ten.vercel.app/Certificado%20_IATF.pdf" target="_blank">IATF 16949</a>
                </li>
            </ol>

            <a href="https://api.whatsapp.com/send?phone=551146482611" target="_blank" class="wpp">
                <svg enable-background="new 0 0 512 512" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                    <path d="M256.064,0h-0.128l0,0C114.784,0,0,114.816,0,256c0,56,18.048,107.904,48.736,150.048l-31.904,95.104  l98.4-31.456C155.712,496.512,204,512,256.064,512C397.216,512,512,397.152,512,256S397.216,0,256.064,0z" fill="#4CAF50" />
                    <path d="m405.02 361.5c-6.176 17.44-30.688 31.904-50.24 36.128-13.376 2.848-30.848 5.12-89.664-19.264-75.232-31.168-123.68-107.62-127.46-112.58-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624 26.176-62.304c6.176-6.304 16.384-9.184 26.176-9.184 3.168 0 6.016 0.16 8.576 0.288 7.52 0.32 11.296 0.768 16.256 12.64 6.176 14.88 21.216 51.616 23.008 55.392 1.824 3.776 3.648 8.896 1.088 13.856-2.4 5.12-4.512 7.392-8.288 11.744s-7.36 7.68-11.136 12.352c-3.456 4.064-7.36 8.416-3.008 15.936 4.352 7.36 19.392 31.904 41.536 51.616 28.576 25.44 51.744 33.568 60.032 37.024 6.176 2.56 13.536 1.952 18.048-2.848 5.728-6.176 12.8-16.416 20-26.496 5.12-7.232 11.584-8.128 18.368-5.568 6.912 2.4 43.488 20.48 51.008 24.224 7.52 3.776 12.48 5.568 14.304 8.736 1.792 3.168 1.792 18.048-4.384 35.52z" fill="#FAFAFA" />
                </svg>
            </a>

            <div class="end">
                <figure id="logo2">
                    <img class="logo_rodape" src="imagens/brasmol-logo-white.png" alt="Logotipo Brasmol">
                </figure>
                <p>© <span id="current-year"></span> Todos os direitos reservados</p>
                <a href="https://servidor-estaticos-teal-ten.vercel.app/politica_de_privacidade.pdf" class="border-0">Política de privacidade</a>
            </div>


            <!-- Slick Carousel JS -->
            <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
            <script src="js/scripts.js"></script>
            <script src="js/scripts2.js"></script>

            <!-- Incluindo o InputMask script -->
            <script>
                $(document).ready(function() {
                    $('#whatsapp').inputmask('(99) 99999-9999'); // Máscara para WhatsApp     

                });
            </script>

            <script>
                // Máscaras (utiliza o jQuery e InputMask que você já incluiu)
                $(document).ready(function() {
                    $('#whatsapp').inputmask('(99) 99999-9999');
                    $('#telefone').inputmask('(99) 9999-9999');
                });
            </script>


            <script>
                // Seleciona o elemento com o ID 'current-year'
                var currentYearElement = document.getElementById('current-year');

                // Obtém o ano atual
                var currentYear = new Date().getFullYear();

                // Define o conteúdo do elemento com o ano atual
                currentYearElement.textContent = currentYear;
            </script>
</body>

</html>
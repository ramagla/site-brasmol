<footer id="rodape">
    <ol>
        <li>
            <h3>Contato</h3>
            <a href="tel:1146482611">(11) 4648-2611</a>
            <a href="mailto:vendas@brasmol.com.br">vendas@brasmol.com.br</a>
            <a href="mailto:sac@brasmol.com.br">sac@brasmol.com.br</a>
            <a href="mailto:rh@brasmol.com.br" target="_blank">Trabalhe Conosco</a><br>
            <h3>Localização</h3>
            <p>
                <a href="https://www.google.com/maps/place/Est.+Bonsucesso,+1953+-+Rio+Abaixo,+Itaquaquecetuba+-+SP,+08579-000" target="_blank" class="map-link" title="Ir até o Maps">
                    Est. Bonsucesso, 1953 - Rio Abaixo - Itaquaquecetuba / SP - CEP 08579-000
                </a>
            </p>
        </li>
        <li>
            <h3>Redes Sociais</h3>
            <div class="social-icons">
                <a href="https://www.facebook.com/profile.php?id=100054303726073&sk=about" target="_blank">
                    <img src="assets/imagens/facebook.png" alt="Facebook">
                </a>
                <a href="https://www.linkedin.com/company/brasmol" target="_blank">
                    <img src="assets/imagens/linkedin.png" alt="LinkedIn">
                </a>
                <a href="https://www.youtube.com/@brasmolmolas1167" target="_blank">
                    <img src="assets/imagens/youtube.png" alt="YouTube" style="height: 30px;">
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

    <!-- Botão do WhatsApp -->
    <a href="https://api.whatsapp.com/send?phone=551146482611&text=Olá!%20Gostaria%20de%20mais%20informações." class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

    <div class="end">
        <figure id="logo2">
            <img class="logo_rodape" src="assets/imagens/brasmol-logo-white.png" alt="Logotipo Brasmol">
        </figure>
        <p>© <span id="current-year"></span> Todos os direitos reservados</p>
        <a href="https://servidor-estaticos-teal-ten.vercel.app/politica_de_privacidade.pdf" class="border-0">Política de privacidade</a>
    </div>
</footer>

<!-- Atualizando o Ano Corrente -->
<script>
    var currentYearElement = document.getElementById('current-year');
    if (currentYearElement) {
        var currentYear = new Date().getFullYear();
        currentYearElement.textContent = currentYear;
    }
</script>
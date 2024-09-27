// assets/js/scripts2.js
$(window).on('load', function () {
    console.log("Verificando a presença do(s) elemento(s) .watch-sld após o carregamento da página:", $(".watch-sld").length);

    // Verifique se o(s) elemento(s) .watch-sld existe(m) antes de inicializar
    if ($(".watch-sld").length > 0) {
        $(".watch-sld").each(function (index, element) {
            console.log("Inicializando o Slick Slider para o elemento .watch-sld de índice:", index);
            $(element).slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                centerMode: true,
                prevArrow: false,
                nextArrow: false,
                responsive: [
                    {
                        breakpoint: 640,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                ],
            });
        });
        console.log("Slick Slider foi inicializado com sucesso para todos os elementos .watch-sld");
    } else {
        console.error("Nenhum elemento .watch-sld foi encontrado no DOM");
    }
});

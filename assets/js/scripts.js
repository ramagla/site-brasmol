$(function () {
    function atualizar_informacoes() {
        $("#watch-name").text($(".slick-center").data("name"));
    }

    $(".watch-slider").on("init", function () {
        atualizar_informacoes();
    });

    $(".watch-slider").slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        prevArrow: $("#arrow-prev"),
        nextArrow: $("#arrow-next"),
        responsive: [
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 3,
                },
            },
        ],
    });

    $(".watch-slider").on("afterChange", function () {
        atualizar_informacoes();
    });
});

$(document).ready(function () {
    $(".logo-carousel").slick({
        dots: false,
        infinite: true,
        speed: 1000,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });
});

function expandImage(img) {
    const expandedImg = document.createElement("img");
    expandedImg.src = img.src;
    expandedImg.style.position = "fixed";
    expandedImg.style.top = "50%";
    expandedImg.style.left = "50%";
    expandedImg.style.transform = "translate(-50%, -50%)";
    expandedImg.style.width = "80%";
    expandedImg.style.boxShadow = "0 4px 8px rgba(0, 0, 0, 0.2)";

    expandedImg.onclick = function () {
        document.body.removeChild(expandedImg);
    };

    document.body.appendChild(expandedImg);
}

$(document).ready(function () {
    $('.nav-link').on('click', function () {
        $('.nav-link').removeClass('active');
        $(this).addClass('active');
    });

    var currentLocation = window.location.href;
    $('.nav-link').each(function () {
        if (this.href === currentLocation) {
            $(this).addClass('active');
        }
    });
});

$(window).on('load', function () {
    console.log("Verificando a presença do(s) elemento(s) .watch-sld após o carregamento da página:", $(".watch-sld").length);

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

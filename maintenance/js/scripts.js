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
    dots: false, // Remover indicadores de página
    infinite: true, // Loop infinito
    speed: 1000, // Velocidade da transição em milissegundos
    slidesToShow: 5, // Número de slides visíveis por vez (ajuste conforme necessário)
    slidesToScroll: 1, // Número de slides para rolar por vez
    autoplay: true, // Iniciar automaticamente
    autoplaySpeed: 3000, // Tempo entre cada slide em milissegundos
    responsive: [
      // Configurações responsivas para diferentes tamanhos de tela
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

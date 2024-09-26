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

function expandImage(img) {
        // Cria um elemento de imagem grande
        const expandedImg = document.createElement("img");
        expandedImg.src = img.src; // Define a fonte da imagem
        expandedImg.style.position = "fixed"; // Fixa a imagem na tela
        expandedImg.style.top = "50%"; // Centraliza verticalmente
        expandedImg.style.left = "50%"; // Centraliza horizontalmente
        expandedImg.style.transform = "translate(-50%, -50%)"; // Ajusta o posicionamento
        expandedImg.style.width = "80%"; // Define a largura da imagem expandida
        expandedImg.style.boxShadow = "0 4px 8px rgba(0,0,0,0.2)"; // Adiciona sombra

        // Adiciona um evento para fechar a imagem ao clicar
        expandedImg.onclick = function() {
            document.body.removeChild(expandedImg); // Remove a imagem expandida
        }

        document.body.appendChild(expandedImg); // Adiciona a imagem ao corpo do documento
    }

  


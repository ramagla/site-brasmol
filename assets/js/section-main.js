// assets/js/section-main.js
$(document).ready(function () {
    // Inicializando o Slick Carousel
    if ($(".watch-sld").length > 0) {
        $(".watch-sld").slick({
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
    }

    // Função para expandir a imagem ao clicar
    window.expandImage = function (img) {
        const overlay = document.createElement("div");
        overlay.style.position = "fixed";
        overlay.style.top = "0";
        overlay.style.left = "0";
        overlay.style.width = "100%";
        overlay.style.height = "100%";
        overlay.style.backgroundColor = "rgba(0, 0, 0, 0.8)"; 
        overlay.style.display = "flex";
        overlay.style.alignItems = "center";
        overlay.style.justifyContent = "center";
        overlay.style.flexDirection = "column"; 
        overlay.style.zIndex = "1000"; 

        const expandedImg = document.createElement("img");
        expandedImg.src = img.src;
        expandedImg.style.maxWidth = "95%"; 
        expandedImg.style.maxHeight = "80%"; 
        expandedImg.style.boxShadow = "0 4px 8px rgba(0,0,0,0.2)";
        expandedImg.style.borderRadius = "5px";

        const imgText = document.createElement("p");
        imgText.innerText = img.alt; 
        imgText.style.color = "#fff"; 
        imgText.style.marginTop = "10px"; 
        imgText.style.fontSize = "16px"; 
        imgText.style.textAlign = "center"; 

        overlay.onclick = function () {
            document.body.removeChild(overlay);
        };

        overlay.appendChild(expandedImg);
        overlay.appendChild(imgText);

        document.body.appendChild(overlay);
    };
});

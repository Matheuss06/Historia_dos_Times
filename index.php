<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Document</title>
</head>
<body id="background" style="background-color: #3243fc;">

<?php include 'header.html'; ?>
     <main class="container">

     <div class="slideshow-container">

          <div class="mySlides fade">
               <img src="images/banner2.jpg" style="width:100%">
          </div>
  
          <div class="mySlides fade">
               <img src="images/banner1.jpg" style="width:100%">
          </div>
  
          <div style="text-align:center" hidden>
               <span class="dot" onclick="currentSlide(1)"></span>
               <span class="dot" onclick="currentSlide(2)"></span>
          </div>

     </div>
     <div class="servico">

<div class="servicos">
    <div class="virar">
        <div class="front">
            <img src="images/instalacao.jpg" alt="" class="img_servico">
        </div>

        <div class="back">
            <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis molestiae ad nobis. Nobis sit, iure dolorum optio culpa id, eligendi accusantium hic natus nisi provident velit, voluptatibus blanditiis totam ab.</h1>
        </div>
    </div>
</div>

<div class="servicos">
    <div class="virar">
        <div class="front">
            <img src="images/ar_inverter_servico.jfif" alt="" class="img_servico">
        </div>

        <div class="back">
            <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis molestiae ad nobis. Nobis sit, iure dolorum optio culpa id, eligendi accusantium hic natus nisi provident velit, voluptatibus blanditiis totam ab.</h1>
        </div>
    </div>
</div>

<div class="servicos">
    <div class="virar">
        <div class="front">
            <img src="images/servico_solar.jpg" alt="" class="img_servico">
        </div>

        <div class="back">
            <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis molestiae ad nobis. Nobis sit, iure dolorum optio culpa id, eligendi accusantium hic natus nisi provident velit, voluptatibus blanditiis totam ab.</h1>
        </div>
    </div>
</div>
</div>
</div>
          <div class="d-flex justify-content-around distancia">

               <a href="time_detalhe.php?id=1"><img src="images/escudos/logo_saopaulo.png" alt="" class="escudos"></a>
               <a href="time_detalhe.php?id=2"><img src="images/escudos/logo_palmeiras.png" alt="" class="escudos"></a>
               <a href="time_detalhe.php?id=3"><img src="images/escudos/logo_corinthians.png" alt="" class="escudos"></a>
               <a href="time_detalhe.php?id=4"><img src="images/escudos/logo_santos.png" alt="" class="escudos"></a>

          </div>

          <div class="d-flex justify-content-around distancia">             
               <a href="time_detalhe.php?id=5"><img src="images/escudos/logo_flamengo.png" alt="" class="escudos"></a>    
               <a href="time_detalhe.php?id=6"><img src="images/escudos/logo_fluminense.png" alt="" class="escudos"></a>  
               <a href="time_detalhe.php?id=7"><img src="images/escudos/logo_vasco.png" alt="" class="escudos"></a>
               <a href="time_detalhe.php?id=8"><img src="images/escudos/logo_botafogo.png" class="escudos"></a>             
          </div>
          <div id="background" style="width: 100%; height:100%">a</div>
     </main>


</body>

<script>
  let slideIndex = 0;
  showSlides();
  
  function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); 
  }

  // Define as cores de fundo que deseja usar em um array
var colors = ["#3243fc", "#DAF7A6"];

// Seleciona o elemento de fundo do HTML
var background = document.querySelector('#background');

// Define o intervalo de tempo (em milissegundos) para mudar as cores de fundo
var intervalTime = 5000; // 2 segundos

// Define uma variável para armazenar o índice da cor atual
var currentColorIndex = 0;

// Define a função que irá mudar a cor de fundo
function changeBackgroundColor() {
  // Seleciona a próxima cor de fundo do array
  var nextColorIndex = (currentColorIndex + 1) % colors.length;
  var nextColor = colors[nextColorIndex];

  // Altera a cor de fundo do elemento de fundo
  background.style.backgroundColor = nextColor;

  // Atualiza o índice da cor atual
  currentColorIndex = nextColorIndex;
}

// Inicia o intervalo de tempo para mudar as cores de fundo
var intervalId = setInterval(changeBackgroundColor, intervalTime);

</script>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Historic Soccer</title>
</head>
<body class="fundo">

<!-- Header da página -->
<?php include 'header.html'; ?>

<!-- Carousel -->
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="5000">
      <img src="images/banner1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="5000">
      <img src="images/Banner_info.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/banner2.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Container da página -->
<div class="container1">

    <section class="d-flex">

        <div class="container_ball">
            <div class="ball"></div>
        </div>

        <!-- Imagem do Cristiano Ronaldo -->
        <span class="img-jogador1">
            <img src="images/cr7.png" alt="" style="width: 50%;">
        </span>

        <!-- Imagem do Lionel Messi -->
        <span class="img-jogador2">
            <img src="images/messi.png" alt="" style="width: 50%;">
        </span>

        <article class="w55 text-center">

            <span id="titulo_home" class="text-center">
                <h2 class="title">FUTEBOL</h2>
                <hr class="linha">
            </span>

            <span class="d-flex justify-content-center text-center" style="margin-top: 15px;">
                <p style="width: 80%; font-size: 16pt;">Bem-vindo ao nosso site de informações de times! Aqui você encontrará tudo o que precisa saber sobre o seu time favorito. Nossa plataforma é dedicada a fornecer aos torcedores estadios, camisas, titulos, historia e muito mais.</p>
            </span>

            <a href="times.php"><button class="btn">TIMES</button></a>
        </article>
    </section>

    <section class="d-flex" style="margin-top: 40px;">

        <article class="w55 text-center">

            <span id="titulo_home" class="text-center">
                <h2 class="title">BASQUETE</h2>
                <hr class="linha">
            </span>

            <span class="d-flex justify-content-center text-center" style="margin-top: 15px;">
                <p style="width: 80%; font-size: 16pt;">O nosso site de informações também possui uma área para o basquete! Aqui você encontrará estadios, camisas, titulos, historia e muito mais.</p>
            </span>

            <a href="timesBasquete.php"><button class="btn">Times NBA</button></a>
        </article>

        <div class="container_ball">
            <div class="basketball">
                <img src="images/basquetebol.png">
            </div>
        </div>

        <!-- Imagem do Michael Jordan -->
        <span class="img-jogador3">
            <img src="images/jordan.png" alt="" style="width: 70%;">
        </span>

        <!-- Imagem do Lebron James -->
        <span class="img-jogador4">
            <img src="images/lebron.png" alt="" style="width: 35%;">
        </span>

    </section>

<hr style="margin-top: 70px;">

</div>

<?php include 'footer.html'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
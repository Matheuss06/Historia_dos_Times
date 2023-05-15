<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilo.css">
  <title>Times</title>
</head>
<body class="fundo">

<!-- Topo do Site -->
<?php include 'header.html';?>

<!-- Container da página -->
<div class="container1">

  <!-- Imagens dos Times -->
  <div class="d-flex flex-wrap" id="times"></div>

</div>
</body>
</html>

<!-- Script do Banco (Array) -->
<script src="BancoTimes.js"></script>

<script>
const timess = document.getElementById('times');

times.forEach((time) => {
  const divTime = document.createElement('div');
  divTime.innerHTML = `<div class="times"><a href="time_detalhe.php?id=${time.id}"><img src="${time.img}"></div></a>`;
  timess.appendChild(divTime);
});

</script>
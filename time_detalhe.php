

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="BancoTimes.js"></script>
    <title>Document</title>
</head>
<body>

<p id="nome-time"></p>


<script>
  const params = new URLSearchParams(window.location.search);
  const id = params.get('id');

  const time = times.find(t => t.id == id);

  if (time) {
    const nomeTimeElemento = document.getElementById('nome-time');
    nomeTimeElemento.textContent = time.nome;
  } else {
    console.log('Time não encontrado');
  }
</script>
</script>

</body>
</html>
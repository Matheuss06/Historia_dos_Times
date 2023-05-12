<div class="d-flex flex-wrap" id="times"></div>

<script src="BancoTimes.js"></script>

<script>
const timess = document.getElementById('times');

times.forEach((time) => {
  const divTime = document.createElement('div');
  divTime.innerHTML = `<div class="times"><a href="time_detalhe.php?id=${time.id}"><img src="${time.img}" class="escudos"></div></a>`;
  timess.appendChild(divTime);
});

</script>
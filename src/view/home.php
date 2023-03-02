<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../../src/view/home.css">
	<title>Alyson Trizotto</title>
</head>
<body>
  <?php
    $vendor = dirname(__DIR__);
    include_once $vendor . DIRECTORY_SEPARATOR . "view" . DIRECTORY_SEPARATOR .  "nav.php";
  ?>
  <div class="cabecalho">
    <div>
      <span></span>
      <img src="../../src/view/img/alyson-capa.jpg" alt="Alyson Capa">
      <h1>Olá, Eu sou o Alyson Trizotto</h1>
      <span></span>
    </div>
    
  </div>

</body>
<?php
    $vendor = dirname(__DIR__);
    include_once $vendor . DIRECTORY_SEPARATOR . "view" . DIRECTORY_SEPARATOR . "footer.php";
  ?>
</html>
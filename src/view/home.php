<?php
if(array_key_exists("success", $_GET)){
  if($_GET["success"] == 0){
    //notification if sended
          echo "<script language='javascript'>";
          echo "alert('Mensagem enviada com sucesso!')";
          echo "</script>";  
  }else if($_GET["success"] == 2){
    //notification if failed
          echo "<script language='javascript'>";
          echo "alert('Falha ao enviar mensagem')";
          echo "</script>";  
  }
}	
?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../../src/view/css/home.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<title>Alyson Trizotto</title>
</head>
<body>
  <?php
    $vendor = dirname(__DIR__);
    include_once $vendor . DIRECTORY_SEPARATOR . "view" . DIRECTORY_SEPARATOR .  "nav.php";
  ?>
  <div class="body">
    <div class="cabecalho">
      <div class="container container-img"> 
        <img class="img-Cabecalho" src="../../src/view/img/alyson-capa.jpg" alt="Alyson Capa">
      </div>
      <div class="container container-text">
        <h1>Olá, sou o <br>Alyson Trizotto</h1>
      </div>
    </div>
    <div class="corpo">
      <button type="button" class="btn btn-outline-primary" onclick=" window.open('https://www.linkedin.com/in/alyson-trizotto/','_blank')">LinkedIn</button>
      <button type="button" class="btn btn-outline-secondary" onclick=" window.open('https://github.com/AlysonTrizotto?tab=repositories','_blank')">GitHub</button>
      <button type="button" class="btn btn-outline-success" onclick="window.open(' https://api.whatsapp.com/send?phone=+5541987438065&text=Olá Alyson, tudo bem? Vamos conversar?','_blank')">WhatsApp</button>
      <a class="btn btn-outline-danger" href='../../src/view/form.php'>E-mail</a>
    </div>

    <div class="corpo">
      <div>
        <h2>Mais sobre mim . . .</h2>
        <div class="card mb-3" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      </div>
    </div>

  </div>

</body>
<?php
    $vendor = dirname(__DIR__);
    include_once $vendor . DIRECTORY_SEPARATOR . "view" . DIRECTORY_SEPARATOR . "footer.php";
  ?>
</html>
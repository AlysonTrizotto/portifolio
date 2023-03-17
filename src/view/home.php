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
        <figure>
          <img class="img-Cabecalho" src="../../src/view/img/alyson-capa.jpg" alt="Alyson Capa">
        </figure> 
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
        <h2>Skills</h2>
        <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Desenvolvimento de Robotic Process Automated (RPA)
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Projetos em que trabalhei:<br></strong><br><strong>Projeto Automação de processos N1 e N2 como: </strong><br>Criação de usuários <br>Instalação de Software <br><br><strong>Técnologias usadas:</strong><br>Automation Edge<br>PowerShell<br>PHP<br>JavaScript<br>HTML<br>CSS<br>BootStrap<br>MySQL<br>RestAPI<br>LDAP<br>PsExec<br>JSON<br><br><strong>Projeto Sincronização de dados entre plataformas distintas</strong> <br>Sincronização de dados entre duas plataformas, validando existência de informações através de match de dados.<br><br><strong>Técnologias usadas:</strong><br>PHP<br>RestAPI<br>JSON<br>XML<br><br><strong>Projeto disparo automátio de mensagens WhatsApp</strong> <br>Disparo de mensagens atráves de acionamento Zabbix<br><br><strong>Técnologias usadas</strong><br>Apache2<br>PHP<br>JSON<br>Python<br>YowsUp<br>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Desenvolvimento de aplicações Desktop
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse " aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <strong>Projetos em que trabalhei:</strong><br><br><strong>Projeto Top11</strong><br>Consite em uma aplicação para controle de pedidos, vendas, pagamento e recebimento, onde cada pedido é impresso na cozinha para informar a chegada de um novo pedido.<br><br><strong>Técnologias usadas:</strong><br>C#<br>.Net<br>Postgress<br><br><strong>Projeto de Extração de tabelas de PDF</strong><br>O projeto foi consite na extração de tabelas de PDF, conversão das informações coletadas em CSV e compactação do arquivo gerado.<br><br><strong>Tecnologia usada:</strong><br>Java Maven<br>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Desenvolvimento Web
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse " aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Projetos em que trabalhei:</strong><br><br><strong>Este Portfólio</strong><br>O projeto foi construído com intuito de apresentação pessoal. Conta também com uma guia chamada (Conteúdo) onde armazeno trechos de códigos que usei, explicações e artuigos feitos por mim.<br><br><strong>Técnologias usadas:</strong><br>PHP<br>MySQL<br>JavaScript<br>HTML<br>CSS<br>BootStrap<br><br><strong>Projeto Site Alinare</strong><br>O site passou por reestruturação, inclusão de novas funcionalidades, atualização de plugins entre outros pontos.<br><br><strong>Tecnologias usadas</strong>PHP<br>WordPress<br>CSS<br>MySQL<br><br><strong>Projeto Formulário Criação de Usuário</strong><br><br>Formulário com autenticação LDAP, o forumlário faz uso de coleta de informações tanto de base de dados como de consumo LDAP. Após todo o preenchimento é realizado disparo de e-mail com as informações.<br><br><strong>Técnologias usadas</strong><br>PHP<br>JavaScrip<br>CSS<br>HTML<br>MySQL<br>LDAP<br>
            </div>
          </div>
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
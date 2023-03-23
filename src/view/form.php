<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="../../src/view/css/form.css">
        <title>Alyson Trizotto</title>
    </head>
    <body>
        <?php
            $vendor = dirname(__DIR__);
            include_once $vendor . DIRECTORY_SEPARATOR . "view" . DIRECTORY_SEPARATOR .  "nav.php";
        ?>
        <div class="body">
            <div class="body-form">
                <div>
                    <h1>Olá, vamos conversar?</h1>
                </div>
                <form action="../../src/controller/sendMail.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Endereço de e-mail</label>
                        <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Assunto</label>
                        <input name="assunto" class="form-control" id="exampleFormControlTInput1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Mensagem</label>
                        <textarea name="mensagem" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button class="button btn btn-outline-secondary" type="submit" name="send-mail" value="Enviar">Enviar</button>
                </form>                
            </div>
        </div>        
    </body>
    <?php
            $vendor = dirname(__DIR__);
            include_once $vendor . DIRECTORY_SEPARATOR . "view" . DIRECTORY_SEPARATOR . "footer.php";
    ?>
</html>
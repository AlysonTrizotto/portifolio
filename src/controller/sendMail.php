<?php
declare(strict_types=1);
namespace portfolio\mvc\controller\sendMail;

$vendor = dirname(__DIR__);

//Load Composer's autoloader
require $vendor . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\{   
                            PHPMailer,
                            SMTP,
                            Exception
                        };

class SendMail{
    
    public function sendMail(){
          
        $user = "portifolioalyson@gmail.com";

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug  = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->CharSet    = "UTF-8";                                  //Seting fomart string         
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = $user;                     //SMTP username
            $mail->Password   = "slyqnllrochwuxpj";                             //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            //Recipients    //Add a recipient
            $mail->setFrom($user, $user);
            $mail->addAddress('alysontrizotto1@gmail.com');         
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = "asdas";

            //Trata os dados
            $mail->Body    = "aasdasd";

            //Send mail
            $mail->send();

            print_r($mail);

            exit();

            header("location: ../view/home.php?success=0");
        } catch (Exception $e){   
            print_r($mail);

            exit();
            
            header("location: ../view/home.php?success=1");
        }
    }   
}

if(isset($_POST["email"])){
    $send = new SendMail();
    $send->sendMail();
}

?>
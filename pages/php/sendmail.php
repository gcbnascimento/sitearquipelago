<?php


require_once('mailer/src/PHPMailer.php');
require_once('mailer/src/SMTP.php');
require_once('mailer/src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_POST) {


	
	$nome= filter_var($_POST["nome"], FILTER_SANITIZE_STRING);
	$email		= filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
	$assunto		= filter_var($_POST["assunto"], FILTER_SANITIZE_STRING);
	$fone		= filter_var($_POST["telefone"], FILTER_SANITIZE_STRING);
	$message		= filter_var($_POST["message"], FILTER_SANITIZE_STRING);




    try {
		$mail->Charset = 'UTF-8';
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'email-ssl.com.br';
        $mail->SMTPAuth = true;
        $mail->Username = 'contato@supergeniooficial.com.br';
        $mail->Password = 'Grupo@2020*';
		$mail->Port = 587;
		$mail->CharSet = 'UTF-8';
		$mail->Encoding = 'quoted-printable';
		

        $mail->setFrom('contato@supergeniooficial.com.br');
        $mail->addAddress('gustavon@grupooportunidade.com.br');

		$mail->isHTML(true);
		
        $mail->Subject = '[E-mail SUPER GÊNIO]: '. $assunto;
        $mail->Body = '[MENSAGEM DO USUÁRIO]: ' .$message. "<br><br>". 'Dados do usuário:'. "<br><br>" . 'Nome: '. $nome. "<br>". 'Email: '.$email. "<br>". 'Telefone: '.$fone;
        $mail->AltBody = '[MENSAGEM DO USUÁRIO]: ' .$message;
		$mail->send();
		

		$mail2->Charset = 'UTF-8';
        $mail2 = new PHPMailer(true);
        $mail2->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail2->isSMTP();
		$mail2->Host = 'email-ssl.com.br';
        $mail2->SMTPAuth = true;
        $mail2->Username = 'contato@supergeniooficial.com.br';
        $mail2->Password = 'Grupo@2020*';
		$mail2->Port = 587;
		$mail2->CharSet = 'UTF-8';
		$mail2->Encoding = 'quoted-printable';
		

        $mail2->setFrom('contato@supergeniooficial.com.br');
        $mail2->addAddress($email);

		$mail2->isHTML(true);
		
        $mail2->Subject = '[SUPER GÊNIO]: Olá, '.$nome.', obrigado pelo seu contato em nosso site. ';
        $mail2->Body = 'Enquando aguarda o contato de nossos consultores, que tal dar uma olhada em um de nossos produtos?'. "<br><br>". 'Acesse: <b>www.supergeniooficial.com.br/pages/pagcursos.php</b> , escolha um curso e depois clique em Material Didático ou Aula Teste.'. "<br><br>".'Equipe Super Gênio';
		$mail2->send();
		

    } catch (Exception $e) {
        echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
    }
}

		
 


?>
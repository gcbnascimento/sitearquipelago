<?php

$Nome		= $_POST["nome"];	// Pega o valor do campo Nome
$Fone		= $_POST["telefone"];	// Pega o valor do campo Telefone
$Email		= $_POST["email"];	// Pega o valor do campo Email
$Mensagem	= $_POST["message"];	// Pega os valores do campo Mensagem

// Variável que junta os valores acima e monta o corpo do email

$Vai 		= "Nome: $Nome\n\nE-mail: $Email\n\nTelefone: $Fone\n\nMensagem: $Mensagem\n";

require_once("email/class.phpmailer.php");
require_once("email/PHPMailerAutoload.php");

define('GUSER', 'informacoes@dreduca.com.br');	// <-- Insira aqui o seu GMail
define('GPWD', 'Grupo@2020');		// <-- Insira aqui a senha do seu GMail

function smtpmailer($para, $de, $de_nome, $assunto, $corpo)
{
    global $error;
    $mail = new PHPMailer();
    $mail->IsSMTP();		// Ativar SMTP
    $mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
    $mail->SMTPAuth = true;		// Autenticação ativada
    $mail->SMTPSecure = 'ssl';	// SSL REQUERIDO pelo GMail
    $mail->Host = 'email-ssl.com.br';	// SMTP utilizado
    $mail->Port = 587;  		// A porta 587 deverá estar aberta em seu servidor
    $mail->Username = GUSER;
    $mail->Password = GPWD;
    $mail->SetFrom($de, $de_nome);
    $mail->Subject = $assunto;
    $mail->Body = $corpo;
    $mail->AddAddress($para);
    if (!$mail->Send()) {
        $error = 'Mail error: '.$mail->ErrorInfo;
        return false;
    } else {
        $error = 'Mensagem enviada!';
        return true;
    }
}


$send_mail = smtpmailer('gustavoblj@hotmail.com', GUSER, 'email.php', 'Assunto do Email', $Vai);



if(!$send_mail)
{
    //If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
    $output = json_encode(array('type'=>'error', 'text' => '<p>Não enviado</p>'));
    die($output);
}else{
    // you can edit your success message below  
    $output = json_encode(array('type'=>'message', 'text' => '<div class="alert alert-success" role="alert">
    Olá '.$Nome.', obrigado por sua mensagem. Entraremos em contato com você em breve.</div>'));
    die($output);
}
if (!empty($error)) echo $error;



?>
<?php
require_once('PHPMailer_5.2.4/class.phpmailer.php'); /* classe PHPMailer */
 
/* Recebe os dados do cliente ajax via POST */
$nome = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];
 
try {
$mail = new PHPMailer(true); //New instance, with exceptions enabled
 
/* CORPO DO E-MAIL */
$body = "<h2>Enviando e-mails com AJAX e PHP via SMTP</h2>";
$body .= "Nome: $nome <br>";
$body .= "E-mail: $email <br>";
$body .= "WhatsApp: $phone <br>";
$body .= "Mensagem:<br>";
$body .= $msg;
$body .= "<br>";
$body .= "----------------------------";
$body .= "<br>";
$body .= "Enviado em <strong>".date("h:m:i d/m/Y")." por ".$_SERVER['REMOTE_ADDR']."</strong>"; //mostra a data e o IP
$body .= "<br>";
$body .= "----------------------------";
 
$mail->IsSMTP(); //tell the class to use SMTP
$mail->SMTPAuth = true; // enable SMTP authentication
$mail->Port = 465; //SMTP porta (as mais utilizadas são '25' e '587'
$mail->Host = "mail.domain.com.br"; // SMTP servidor
$mail->Username = "mail.domain.com.br";  // SMTP  usuário
$mail->Password = "xxxxx";  // SMTP senha
 
$mail->IsSendmail();  
 
$mail->AddReplyTo($email, $nome); //Responder para..
$mail->From = $email; //e-mail fornecido pelo cliente
$mail->FromName   = $nome; //nome fornecido pelo cliente
 
$to = "contato@leobezr.com.br"; //Enviar para
$mail->AddAddress($to); 
$mail->Subject  = $subject; //Assunto
$mail->WordWrap   = 80; // set word wrap
 
$mail->MsgHTML($body);
 
$mail->IsHTML(true); // send as HTML
 
$mail->Send();
echo 'Mensagem enviada com sucesso.'; //retorno devolvido para o ajax caso sucesso
} catch (phpmailerException $e) {
echo $e->errorMessage(); //retorno devolvido para o ajax caso erro
}
<?php
echo "oi";
die();
//$site = $_SERVER['SERVER_NAME'];
//$name = $_POST['name'];
$email= $_POST['email'];
//$phone = $_POST['phone'];
//$message = $_POST['message'];
//$ipaddress = $_POST['ipaddress'];

echo 'email='.$site;
echo '<br />ip='.$ipaddress;

  $to = "contato@lins.com.br";
  $assunto = strtoupper($site)." - Email do website";
// Cabeçalho do Email
	$headers = "From: $email\r\n";
	$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
// Corpo do Email
	$mensagem = "<h1>Contato Recebido</h1>";		
	$mensagem .= "<b>Nome:</b> ".$name." <br />";		
	$mensagem .= "<b>Email:</b> ".$email." <br />";
	$mensagem .= "<b>phone:</b> ".$phone." <br />";
	$mensagem .= "<hr><br />";
	$mensagem .= "<b>Mensagem:</b> <br />";
	$mensagem .= $message." <br />";
	$mensagem .= "<hr><br />";
	$mensagem .= "<b>Site:</b> ".$site." <br />";
	$mensagem .= '<b>IP:</b> <a href="https://myip.ms/info/whois/'.$ip.'">'.$ip.'</a><br />';
echo 	$headers;
echo "<br /><hr>"
echo $mensagem;
  //mail($to,$assunto,$mensagem,$headers);
?>
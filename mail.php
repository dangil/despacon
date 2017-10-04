<?php
// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.

$conteudo = "Nome:".$_POST[nome]."\n E-mail: ".$_POST[email]."\n  Empresa: ".$_POST[empresa]."\n Telefone: ".$_POST[telefone]."\n\n Mensagem: \n ".$_POST[mensagem];

$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
$headers .= "From: contato@despacon.com.br\r\n"; // remetente
$headers .= "Return-Path: contato@despacon.com.br\r\n"; // return-path

$envio = mail("rubens@despacon.com.br", "Novo contato no site da Despacon", $conteudo, $headers);
$envio = mail("carloscesar@despacon.com.br", "Novo contato no site da Despacon", $conteudo, $headers);
$envio = mail("rose@despacon.com.br", "Novo contato no site da Despacon", $conteudo, $headers);
$envio = mail("vanessa@despacon.com.br", "Novo contato no site da Despacon", $conteudo, $headers);

 
if($envio)
	header("Location:http://despacon.com.br/faleConosco.php?status=ok");
else
	echo "Houve um problema ao enviar o E-mail. Nos desculpe os transtornos.";

//header("Location:http://despacon.com.br/faleConosco.php?status=ok");
?>


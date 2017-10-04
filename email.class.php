<?php

	require("class.phpmailer.php");

	

	class Email{

		

		public $mail;

		function __construct($remetente,$destinatario,$assunto,$nomeRemetente,$nomeDestinatario,$mensagem,$imagem,$emailResposta)

		{

			//===============CONFIGURAÇÕES NECESSÁRIAS PARA O ENVIO===================================//

			$this->mail = new PHPMailer();

			$this->mail->IsSMTP(); //ENVIAR VIA SMTP

			//smtp.inobox.com.br

			$this->mail->Host = "mail.despacon.com.br"; //SERVIDOR DE SMTP, USE smtp.SeuDominio.com OU smtp.hostsys.com.br 

			$this->mail->SMTPAuth = true; 

			$this->mail->Username = "contato@despacon.com.br"; //Email PARA SMTP AUTENTICADO (pode ser qualquer conta de email do seu domínio)

			$this->mail->Password = "142536"; //SENHA DO EMAIL PARA SMTP AUTENTICADO

			$this->mail->From = "contato@despacon.com.br"; //E-MAIL DO REMETENTE 

			

			//===========PREPARANDO O ENVIO===================================//

			$this->mail->FromName = $nomeRemetente; //NOME DO REMETENTE

			$this->mail->AddAddress($destinatario,$nomeDestinatario); //E-MAIL DO DESINATÁRIO, NOME DO DESINATÁRIO 

			$this->mail->AddReplyTo($emailResposta,$nomeRemetente); //OPCIONAL PARA DEFINIR OUTRO EMAIL DE RESPOSTA

			$this->mail->WordWrap = 50; // ATIVAR QUEBRA DE LINHA

			$this->mail->IsHTML(true); //ATIVA MENSAGEM NO FORMATO HTML

			$this->mail->Subject = $assunto; //ASSUNTO DA MENSAGEM

			$this->mail->Body = $mensagem; //MENSAGEM NO FORMATO HTML

			$this->mail->AltBody = $mensagem; //MENSAGEM NO FORMATO TXT

			//$this->mail->AddAttachment($imagem); //OPCIONAL PARA ENVIO DE ARQUIVO EM ANEXO NA MENSAGEM			

		}

		

		function envia()

		{

			if(!$this->mail->Send())

			{

				

				return false;

				$this->mail->ErrorInfo;

			}else{

			

				return true;	

			}	

		}

	}

?>
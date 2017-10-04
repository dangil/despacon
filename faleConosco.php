<?php
		if(isset($_POST['nome']))
		{
			print_r($_POST);
			exit;
		}
					
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="website/atributos/estilos/id.css"/>
<link rel="stylesheet" type="text/css" href="website/atributos/estilos/page.css"/>
<link rel="stylesheet" type="text/css" href="website/atributos/estilos/class.css"/>
<title>DESPACON - Servi&ccedil;os cont&aacute;beis Ltda.</title>
</head>

<body>
<div id="corpo">
	<?php require("website/atributos/biblioteca/include/topo.php"); ?>
	<div id="conteudo">
		<div id="colDir">
			<?php require("website/atributos/biblioteca/include/esquerda.php"); ?>
		</div>
		<div id="paginas">
			<h1>Fale Conosco</h1>
			<p class="peqtxt">Preencha o formul&aacute;rio abaixo:</p>
			<form method="post" action="http://despacon.com.br/mail.php">
				<div class="campoMaior">
					<div class="campoMenor"><input type="text" name="nome" id="nome"  value="Seu nome:" onclick="this.value='';"/></div>
					<div class="campoMenor"><input type="text" name="telefone" id="telefone"  value="Seu Telefone:" onclick="this.value='';"/></div>
                    <br /><p>&nbsp;</p>
				<div class="campoMenor"><input type="text" name="email" id="email"  value="E-mail:" onclick="this.value='';"/></div>
					<div class="campoMenor"><input type="text" name="empresa" id="empresa"  value="Empresa:" onclick="this.value='';"/></div>
				</div>
				<textarea name="mensagem" id="mensagem" cols="" rows="" onclick="this.value='';">mensagem:</textarea>			
				<p class="botao"><input name="" type="image" src="website/atributos/imagens/enviar.jpg" /></p>	
			</form>		
		</div>
	</div>
</div>
<div id="rodape">
	<div id="base">
		<?php require("website/atributos/biblioteca/include/rodape.php"); ?>
	</div>
</div>
<?php  
if(isset($_GET['status'])){?>
<script type="text/javascript">
alert("E-mail enviado com sucesso. Por favor aguarde o nosso contato.");
</script>
<?php } ?>
</body>
</html>
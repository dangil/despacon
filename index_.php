<?php require_once('atributos/biblioteca/include/config.inc.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="atributos/estilos/page.css"/>
<link rel="stylesheet" type="text/css" href="atributos/estilos/id.css"/>
<link rel="stylesheet" type="text/css" href="atributos/estilos/class.css"/>
<link rel="stylesheet" type="text/css" href="atributos/estilos/aumenta.css"/>
<?php require("atributos/biblioteca/js/data.php"); ?>


<!-- Galeria de Imagens -->
<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
<link rel="stylesheet" href="css/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/themes/pascal/pascal.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/themes/orman/orman.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>


<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
</script>

<!-- Fim da Galeria de Imagens -->

<title>Animal VIP</title>

<meta name="google-site-verification" content="eKrt7pAasb7Kk_2a47n5JeQpTxMXm6eRNSgg2H69qjI" />

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20948316-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<?php require("atributos/biblioteca/include/topo.php"); ?>
<div id="corpo" class="fonte1">
  <?php require("atributos/biblioteca/include/menu.php"); ?>
  <div id="paginas" >
    <div id="bannerPrincipal">
    	<div id="wrapper">
        <div class="slider-wrapper theme-default">
            <div class="ribbon"></div>
            <div id="slider" class="nivoSlider">
            	<a href="http://www.animalvip.com.br/emailmkt/valores.jpg" target="_blank"><img src="atributos/imagens/img-Banner3.jpg" alt="Banner" /></a>
                <img src="atributos/imagens/img-Banner2.jpg" alt="Banner" />               
            </div>
        </div>

    </div>
    </div>
	
    <div class="tituloLaranja">
      <?php require("atributos/biblioteca/include/aumenta.php"); ?>
      <h1 title="Institucional">Institucional</h1>
    </div>
    <div id="institucional">
      <div class="ch_animalVip bordaDireita left">
        <p><img src="atributos/imagens/img_animalVip.jpg" alt="Animal VIP" title="Animal VIP" /></p>
        <p>A <strong>Animal VIP</strong>, onde voc&ecirc; e seu  animal s&atilde;o vips de verdade, sem pagar nenhum centavo a mais por isso.</p>
        <p class="saibaMais" title="Saiba Mais"><a href="<?php echo RAIZ_ABSOLUTA;?>animalVip/">+ Saiba mais</a></p>
      </div>
      <div class="ch_tocaCursos bordaDireita left">
        <div style="width:100%; height:212px;"> <a href="/publicidade/"><img src="atributos/imagens/publicidade.jpg" alt="" title="" /></a>
            
        </div>
      </div>
      <div class="ch_produtos right">
        <p class="titulo" title="Produtos">Produtos</p>
        <p><strong>O Animal VIP oferece mais de 1000 itens de produtos para o seu pet. </strong></p>
        <div class="especificacoes">
          <ul>
            <li><img src="atributos/imagens/img_cao.jpg" alt="C&atilde;es" /><a href="produtos/caes.php">C&atilde;es</a></li>
            <li><img src="atributos/imagens/img_gato.jpg" alt="Gatos" /><a href="produtos/gatos.php">Gatos</a></li>
          </ul>
          <ul>
            <li><img src="atributos/imagens/img_aves.jpg" alt="Aves" /><a href="produtos/aves.php">Aves</a></li>
            <li><img src="atributos/imagens/img_reptil.jpg" alt="R&eacute;pteis" /><a href="produtos/repteis.php">R&eacute;pteis</a></li>
          </ul>
        </div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
		<p class="saibaMais" title="Saiba Mais">&nbsp;</p>
		<p class="saibaMais" title="Saiba Mais">&nbsp;</p>
		<p class="saibaMais" title="Saiba Mais"><a href="produtos/">+ Saiba mais</a></p>
</div>
      <div class="clearBoth"></div>
    </div>
    <div class="tituloAzul">
      <h1 title="Clientes VIP">Clientes VIP</h1>
    </div>
    <div id="clientesVips">
      <div class="ch_galeriaVip left">
        <p class="titulo" title="Galeria VIP">Galeria VIP<br />
          <br />
        </p>
        <p>Confira a galeria dos nossos clientes Vips de verdade.<br />
          <br />
        </p>
<p class="saibaMais" title="Saiba Mais"><a href="<?php echo RAIZ_ABSOLUTA;?>galeriaVip/">+ Saiba mais</a></p>
      </div>
      <div class="ch_namoro left">
      <p class="titulo" title="Namoro Virtual">Cole&ccedil;&atilde;o Inverno 2012</p>
        <div class="fundoCinza">
          <div class="imagem left"><img src="atributos/imagens/img_namoro.jpg" alt="Namoro Virtual" title="Namoro Virtual" /></div>
          
          <div class="textos left">
            
            <p>Confira as Tend&ecirc;ncias da <strong>Nova Cole&ccedil;&atilde;o de Inverno 2012!</strong></p>
</div>
<div class="clearBoth"></div>
        </div>
        <p class="saibaMais" title="Saiba Mais"><a href="<?php echo RAIZ_ABSOLUTA;?>boutique/">+ Saiba mais</a></p>
      </div>
      <div class="ch_classificados right">
        <p class="titulo" title="Classificados"> <a href="variedades/"><img src="atributos/imagens/img-Cachorro.jpg" alt="" title="" /></a>
		</p>
</div>
      <div class="clearBoth"></div>
    </div>
    <div id="imprensa">
        <div class="tituloCinza">
          <h1 title="Imprensa">Imprensa</h1>
        </div>
        <div class="ch_midiaContato left">
       	  <p class="titulo" title="Classificados">Links Interessantes</p>
            <p>Separamos  alguns links interessantes para que voc&ecirc; possa ter mais informa&ccedil;&otilde;es a respeito  do seu pet.</p>
<p class="saibaMais" title="Saiba Mais"><a href="<?php echo RAIZ_ABSOLUTA;?>links/">+ Saiba mais</a></p>
          <p class="titulo afastamento" title="Fale Conosco">Seu Pet</p>
            <p>Saiba mais a respeito da ra&ccedil;a, temperamento e como cuidar do  seu pet.</p>
<p class="saibaMais" title="Saiba Mais"><a href="seuPet/">+ Saiba mais</a></p>
            
        </div>
     	<div class="ch_midiaContato left">
       	  <p class="titulo" title="Eventos">Videos</p>
          <p><a href="videos/video05.php"><img src="atributos/imagens/img-VideoIndex.jpg" alt="Eventos" title="Eventos" /></a></p>
          <p>Confira aqui um novo vídeo: papagaio cantor.</p>
<p class="saibaMais" title="Saiba Mais"><a href="videos/">+ Saiba mais</a></p>
      </div>
      <div class="clearBoth"></div>
    </div>
    <div id="boutique" class="right">
    	<p class="titulo" title="Boutique">Boutique Pet</p>
        <p>Quer  deixar o seu pet na moda? Confira as &uacute;ltimas tend&ecirc;ncias.</p>
<p><img src="atributos/imagens/img_boutique.jpg" alt="Boutique Pet" title="Boutique Pet" /></p>
        <p class="saibaMais" title="Saiba Mais"><a href="boutique/">+ Saiba mais</a></p>
    </div>
   <div class="clearBoth"></div>
  </div>
  <?php require("atributos/biblioteca/include/direita.php"); ?>
  <div class="clearBoth"></div>
</div>
  <?php require("atributos/biblioteca/include/rodape.php"); ?>
<script type="text/javascript">
<!--
swfobject.registerObject("FlashID");
swfobject.registerObject("FlashID");
//-->
</script>
</body>
</html>
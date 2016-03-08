<?php 
	header('content-type: text/html; charset=utf-8');
	// if ( ! isset($_SERVER['HTTPS'])) { header('Location: https://' . $_SERVER["SERVER_NAME"] . $_SERVER['REQUEST_URI']); }
?>

<!--
Programación, Desarrollo e Implementación por:
https://www.Zeti.net
info@zeti.net

Coordinación para el sitio web, propuesta de desarrollo y diseño por: Producciones Máquina 
producciones.maquina@gmail.com                          
-->


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;  charset= UTF-8" />

      <meta name="ROBOTS" content="INDEX,FOLLOW" >
      <meta name="title" content="Música Orquestal Mexicana: espacio para conocer y difundir nuestra música.">
      <meta name="description" content="Catálogo: Compositores, obras, editoras, fonografía de compositores mexicanos.">
     
      <meta name="google-site-verification" content="">
      
      <meta name="DC.creator" content="Xochiquetzal Ruíz Ortíz">
      <meta name="author" content="Producciones Máquina - Daniela Peña">
      <meta name="development" content="Programación, Desarrollo e Implementación por:
      Zeti.net">
      <meta name="Copyright" content="Copyright Música Orquestal Mexicana">
      
      <meta name="DC.title" content="Musica Orquestal Mexicana">
      <meta name="DC.subject" content="Mexican Orquestal Composers">
     
      <meta name="keywords" content="Compositores, biografías músicos mexicanos, obras mexicanas, discografía, musica orquestal mexicana, directores de orquesta, intérpretes, compositores, musicólogos, mexican composers">
      
<title>M&uacute;sica Orquestal Mexicana - Cat&aacute;logo</title>

<link href="css/estilosMOM.css" rel="stylesheet" type="text/css" />
<link href="css/styleOrgTabs.css" rel="stylesheet" type="text/css">
<link href="css/bios.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/anythingslider.css">

<link rel="shortcut icon" href="imagenes/favicon.ico" type="image/x-icon">
<link rel="icon" href="imagenes/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ruluko|Simonetta|Alegreya:400,400italic">

	<script type="text/javascript" src="js/audio-player.js"></script>  
    <script type="text/javascript">  
        AudioPlayer.setup("js/player.swf", {  
            width: 200  
        });  
    </script>  
				<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
			    <!-- slider -->
	
    <script type="text/javascript" src="lib/conaculta.js"></script>
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        //If Javascript is running, change css on product-description to display:block
        //then hide the div, ready to animate
        $("div.pop-up").css({'display':'block','opacity':'0'})

        $("a.trigger").hover(
          function () {
            $(this).prev().stop().animate({
              opacity: 1
            }, 500);
          },
          function () {
            $(this).prev().stop().animate({
              opacity: 0
            }, 200);
          }
        )
      });
    </script>		
                
     
<style type="text/css">
	.autocomplete-loading { background: white url('images/ui-anim_basic_16x16.gif') right center no-repeat; }
</style>

    
<style type="text/css">
	.autocomplete-loading { background: white url('images/ui-anim_basic_16x16.gif') right center no-repeat; }
</style>


</head>

<body>

<div class="container">

    
<div class="header">  
  
  <div id="header">  
      
      <div id="titulo"><a href="home.html"><img src="imagenes/logo.jpg" alt="Musica Orquestal Mexicana"/></a> 
      </div> 
       <div class="subtitulo">
      <div style="float:left; padding-right:15px;">Sitio comisionado <br />
       por 
      el Sistema Nacional de Fomento <br />
      Musical / Conaculta  </div>  <div style="float:right;"><a href="http://cantaromusicasenmexico.com" target="_blank"><img src="imagenes/cantaro.png" alt="Cántaro Músicas en México" name="LogoCantaro" width="84" height="120" id="LogoCantaro" /></a></div><div style="float:right;"><a href="http://snfm.conaculta.gob.mx" target="_blank"><img src="imagenes/logo_dependencia.jpg" alt="Sistema Nacional de Fomento Musical" width="250" height="100" style="padding:15px;"/></a></div> 
      </div>
      
      <div class="frase">
      <p>Busca, del&eacute;itate, escucha, conoce, lee su m&uacute;sica... <br />
        Est&aacute;s en el acervo m&aacute;s grande de m&uacute;sica sinf&oacute;nica de compositores mexicanos.</span></p>
      </div> 
      <div id="indiceInstitucional">
          <ul class="nav" >
            <li><a href="home.html">INICIO</a></li>
            <li><a href="catalogo.html">CAT&Aacute;LOGO</a></li>
            <li><a href="comisionadas.html" onClick="doShowInformacion();">Novedades</a></li>
            <li><a href="legales.html" onClick="doShowLegales();">LEGALES</a></li>
            <li><a href="creditos.html" onClick="doShowContacto();">Cr&Eacute;ditos y Contacto</a></li>
          </ul>
      </div>  
     
   </div>

 <!-- end .header -->  
   
 <div class="clearfloat"> </div>
 
   
  
  <div id="main"> 
  
  <div >
        <div id="sidebar1" >
          <h1>&nbsp;</h1> <p>&nbsp;</p> <p>&nbsp;</p></div>
      </div>
      
  

       <div style="width: 700px; position: relative; margin-top: 0px; right: -40px;">  


    <div id="page-wrap">  <!--(organic Tabs) -->
		<script src="js/organictabs.jquery.js"></script><script>$(function() { $("#example-two").organicTabs({ "speed": 200 }); }); </script> 
 <div id="page-wrap">   
<div id="example-two">
	<h2>Opciones de B&uacute;squeda:</h2>	         			
    		         			
    		<ul class="nav">                
                <li class="nav-two"><a href="#obras" class="current">Obras</a></li>
                <li class="nav-one"><a href="#compositores">Compositores</a></li>
                <li class="nav-three"><a href="#categorias">Categor&iacute;as</a></li>
                <li class="nav-four"><a href="#editoras">Editoras</a></li>
                <li class="nav-five last"><a href="#fonografia">Fonograf&iacute;a</a></li>
            </ul>
    		
    		<div class="list-wrap">
            
            	<ul id="obras">
                    <li>
                	  <div class="listaBuscador">
                          <div style="padding-left:10px">B&uacute;squeda: </div>
                  		  <div style="position:relative;">
		                      <input type="text" size="60" value="" id="inputStringObra" onkeyup="lookupObra(this.value);" />
        	              </div>
            	          <div class="textoDerechos">Escriba su consulta. Los resultados aparecer&aacute;n autom&aacute;ticamente</div>
	            	  </div>
                    </li>
                                     
                    <div class="suggestionsBoxObra" id="suggestionsObra">
						<div class="suggestionListObra" id="autoSuggestionsListObra">								
                         	<? include('lib/showUltimosAgregadosObra.php'); ?>
                         <!--	<script> showUltimosAgregadosObra(); </script>	   -->
						</div>
					</div>                                      
        		 </ul>
    		
    			<ul id="compositores" class="hide">
                  <li >
                   <div class="listaBuscador">
                   		<div style="padding-left:10px">B&uacute;squeda: </div>
                  		<div style="position:relative;">
	                        <input type="text" size="60" value="" id="inputStringAutor" onkeyup="lookupAutor(this.value);" />
                        </div>
                        <div class="textoDerechos">Escriba su consulta. Los resultados aparecer&aacute;n autom&aacute;ticamente</div>                    
                   </div>
                  </li>	
                  
                   <div class="suggestionsBoxAutor" id="suggestionsAutor">
						<div class="suggestionListAutor" id="autoSuggestionsListAutor">
                        	<?php  include('lib/showCompositores.php'); ?>					 
							<!-- <script> showCompositores(); </script>	-->
						</div>
					</div>
                  	
    			</ul>        		 
        		 
        		 <ul id="categorias" class="hide">
        		    <li><a href="#" onclick="mostrarCategoria(this.name);" name="arreglosOrquestaciones">Arreglos y Orquestaciones</a></li>
        		    <li><a href="#" onclick="mostrarCategoria(this.name);" name="onciertos" >Solista y Orquesta</a></li>
                    <li><a href="#" onclick="mostrarCategoria(this.name);" name="orquestaCuerdas">Orquesta de Cuerdas</a></li>
                    <li><a href="#" onclick="mostrarCategoria(this.name);" name="orquestaPercusiones">Orquesta de Percusiones</a></li>
    				<li><a href="#" onclick="mostrarCategoria(this.name);" name="coroOrquesta">Coro y Orquesta</a></li>
    				<li><a href="#" onclick="mostrarCategoria(this.name);" name="orquesta">Orquesta</a></li> 
                    <li><a href="#" onclick="mostrarCategoria(this.name);" name="orquestaCamara">Orquesta de C&aacute;mara</a></li> 
                    <li><a href="#" onclick="mostrarCategoria(this.name);" name="vozCoroOrquesta">Voz, Coro y Orquesta</a></li> 
                    <li><a href="#" onclick="mostrarCategoria(this.name);" name="vozOrquesta">Solista y Orquesta</a></li> 
                    <li><a href="#" onclick="mostrarCategoria(this.name);" name="vozOrquestaCamara">Orquesta de cuerdas</a></li>
                 </ul>
        		 
        		 <ul id="editoras" class="hide">                      
                      <?php include ('lib/showEditoras.php');  ?>              
        		 </ul>
                 
                 <ul id="fonografia" class="hide">
                    <li>
                  <div class="listaBuscador">
                  	  <div style="padding-left:10px">B&uacute;squeda: </div>
              		  <div style="position:relative;">
                    		<input type="text" size="60" value="" id="inputStringFonografia" onkeyup="lookupFonografia(this.value);" />
	                  </div>
                  <div class="textoDerechos">Escriba su consulta. Los resultados aparecer&aacute;n autom&aacute;ticamente</div>
                  </div>
                    </li>
                                     
                    <div class="suggestionsBoxFonografia" id="suggestionsFonografia">
						<div class="suggestionListFonografia" id="autoSuggestionsListFonografia">								
							<? include('lib/showUltimosAgregadosFonografia.php'); ?>
                         <!--	<script> showUltimosAgregadosFonografia(); </script>	   -->
						</div>
					</div>                                      
        		 </ul>
                 
        		 
   		   </div> <!-- end .list-wrap -->
           
	</div>	<!-- end .example-two -->
    </div>
    </div> <!-- end .page-wrap (organic Tabs) -->
	
</div>
<div class="clearfloat"></div>    
</div> <!-- end .content -->
    






   
<div id="footer0">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
 
</div>

 
<div id="footer">

    <div class="listaAbajo" >

     <ul class="listasite">	
	    <li class="listasite">MAPA DE SITIO
        <h1></li>      
        <li class="listasite"><a href="home.html">Inicio</a></li>
        <li class="listasite"><a href="catalogo.php">Cat&aacute;logo</a></li>
        <li class="listasite"><a href="comisionadas.html" >Novedades</a></li>
        <li class="listasite"><a href="legales.html" >Legales</a></li>
        <li class="listasite"><a href="creditos.html" >Cr&eacute;ditos y contacto</a></li>
     </ul>
     </div>
  <div class="listaAbajo" >
		  <ul class="listasite">	         
                <li class="listasite">CAT&Aacute;LOGO<h1></li>
                <li><a href="#" onClick="showSearchBoxOnly();" >Autor</a></li>
		        <li><a href="#" onClick="showSearchBoxOnly();">Obras</a></li>
    		    <li><a href="#" onClick="showSearchBoxOnly();">Categor&iacute;as</a></li>
	        	<li><a href="#" onClick="showSearchBoxOnly();">Editoras</a></li>
                <li><a href="#" onClick="showSearchBoxOnly();">Fonograf&iacute;a</a></li>
                  
       	  </ul>
     </div>
 </div>
 
  <div id="footerContacto">  	    
    <div style="float:left"> 
    <a href="home.html"><img src="imagenes/logo.jpg" alt="Musica Orquestal Mexicana"   /></a>
       </div>  
    <div style="float:left; padding-left:50;margin-left:60px;padding-top:10px;" > 
        
         <p>Sitio realizado por C&aacute;ntaro M&uacute;sicas en M&eacute;xico para el Sistema Nacional de Fomento Musical</p>
         <p>M&eacute;xico 2012 &copy; Todos los derechos reservados </p>
          <p><a href="http://snfm.conaculta.gob.mx/" target="_blank"><img src="imagenes/logo_dependencia.jpg" alt="Sistema Nacional de Fomento Musical" width="151" height="100" style="padding:15px;"/></a><a href="http://cantaromusicasenmexico.com" target="_blank"><img src="imagenes/cantaro.png" alt="Cántaro Músicas en México" name="LogoCantaro" width="84" height="120" id="LogoCantaro2" /></a><br />
         </p>
    </div>
       
    <p>&nbsp;</p><p>&nbsp;</p>
    <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
    <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p> 
    
  </div>
    
 <!-- end .footer -->

    
 <!-- end .footer --><!-- end .footer --></div>
    
    <div class="clearfloat"> </div>
<? if (isset($_REQUEST['mostrarAutor'])){ ?>
	<script type="text/javascript">fillAutor('null', '<? echo $_REQUEST['mostrarAutor']; ?>');</script>
<? } ?>
</body>
</html>

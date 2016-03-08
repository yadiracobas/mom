<!--
Programación, Desarrollo e Implementación por:
https://www.Zeti.net
info@zeti.net

Coordinación para el sitio web, propuesta de desarrollo y diseño por: Producciones Máquina 
producciones.maquina@gmail.com                          
-->
<?php 
	include('./lib/DB.php');
	if(isset($_REQUEST['id'])) { 
		$id = $db->real_escape_string($_REQUEST['id']); 
		$query = $db->query("SET NAMES utf8");
  		$query = $db->query("SELECT * FROM musicos WHERE IdMusico = '$id' LIMIT 1");
	    if($query) {
			while ($result = $query ->fetch_object()) { 
				$nombre = $result->Nombre;
				$especialidad = $result->Especialidad;
				$vitae = $result->Vitae;
			}
		}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

      <meta name="ROBOTS" content="INDEX,FOLLOW" >
      <meta name="title" content="Música Orquestal Mexicana: Catálogo">
     <meta name="description" content="Catálogo decompositores, obras, editoras, fonografía de compositores mexicanos.">
     
     <meta name="google-site-verification" content="">
      
     <meta name="DC.creator" content="Xochiquetzal Ruíz Ortíz">
      <meta name="author" content="Producciones Máquina - Daniela Peña">
      <meta name="development" content="Programación, Desarrollo e Implementación por:
      Zeti.net">
      <meta name="Copyright" content="Copyright Música Orquestal Mexicana">
      
      <meta name="DC.title" content="Musica Orquestal Mexicana">
      <meta name="DC.subject" content="Mexican Orquestal Composers">
     
      <meta name="keywords" content="Compositores, biografías músicos mexicanos, obras mexicanas, discografía, musica orquestal mexicana, directores de orquesta, intérpretes, compositores, musicólogos, mexican composers">
      
<title>Música Orquestal Mexicana - Catálogo</title>

<link href="css/estilosMOM.css" rel="stylesheet" type="text/css" />
<link href="css/styleOrgTabs.css" rel="stylesheet" type="text/css">
<link href="css/bios.css" rel="stylesheet" type="text/css" />

<link rel="shortcut icon" href="imagenes/favicon.ico" type="image/x-icon">
<link rel="icon" href="imagenes/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ruluko|Simonetta|Alegreya:400,400italic">
           
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
			    <!-- slider -->
	<script src="js/jquery.anythingslider.js"></script>
	<script>
		$(function(){
			$('#slider').anythingSlider();
		});
	</script> 
        
    <script type="text/javascript" src="lib/conaculta.js"></script>
<style type="text/css">
	.autocomplete-loading { background: white url('images/ui-anim_basic_16x16.gif') right center no-repeat; }
</style>

</head>

<body>

<div class="container">

<div id="header">  
      
      <div id="titulo"><a href="home.html"><img src="imagenes/logo.jpg" alt="Musica Orquestal Mexicana"/></a> 
      </div> 
       <div class="subtitulo">
      <div style="float:left; padding-right:15px;">Sitio comisionado <br />
       por 
      el Sistema Nacional de Fomento <br />
      Musical / Conaculta  </div>  <div style="float:right;"><a href="http://cantaromusicasenmexico.com" target="_blank"><img src="imagenes/cantaro.png" alt="Cántaro Músicas en México" name="LogoCantaro" width="84" height="120" id="LogoCantaro" /></a></div><div style="float:right;"><a href="snfm.conaculta.gob.mx/" target="_blank"><img src="imagenes/logo_dependencia.jpg" alt="Sistema Nacional de Fomento Musical" width="151" height="100" style="padding:15px;"/></a></div> 
      </div>
      
      <div class="frase">
      <p>Busca, deléitate, escucha, conoce, lee su música... <br />
        Estás en el acervo más grande de música sinfónica de compositores mexicanos.</span></p>
      </div> 
      <div id="indiceInstitucional">
          <ul class="nav" >
            <li><a href="home.html">INICIO</a></li>
            <li><a href="catalogo.html">CATÁLOGO</a></li>
            <li><a href="comisionadas.html" onClick="doShowInformacion();">Novedades</a></li>
            <li><a href="legales.html" onClick="doShowLegales();">LEGALES</a></li>
            <li><a href="creditos.html" onClick="doShowContacto();">CrÉditos y Contacto</a></li>
          </ul>
      </div>  
     
   </div>
     <!-- end .header --> 
   
   
 <!-- end .content -->
<div >
  <div id="contenidoPrincipal" style="padding-left:20px;">

<h1><? echo $nombre; ?></h1></br>
<div style="width:85%;">
 <? if (hasSemblanzaImg($id)) { ?>
	 <div class="fotoBios"><img src=<? echo 'uploads/imagenesBios/'.$id.'.jpg'; ?>  /></div><br />
 <? } ?>
<!--
<h4><?php // echo $especialidad; ?></h4>
<h4><?php // echo $vitae; ?></h4>
-->

<h3><?php echo getSemblanzaTxt($id); ?></h3>
<p><a href="catalogo.php?mostrarAutor=<? echo $nombre; ?>">REGRESAR A LA B&Uacute;SQUEDA</a>  </p>


  </div>
  </div></div>



<div class="clearfloat"></div>

   
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
        <li class="listasite"><a href="catalogo.php">Catálogo</a></li>
        <li class="listasite"><a href="comisionadas.html" >Novedades</a></li>
        <li class="listasite"><a href="legales.html" >Legales</a></li>
        <li class="listasite"><a href="creditos.html" >Créditos y contacto</a></li>
     </ul>
     </div>
  <div class="listaAbajo" >
		  <ul class="listasite">	         
                <li class="listasite">CATÁLOGO<h1></li>
                <li><a href="#" onClick="showSearchBoxOnly();" >Autor</a></li>
		        <li><a href="#" onClick="showSearchBoxOnly();">Obras</a></li>
    		    <li><a href="#" onClick="showSearchBoxOnly();">Categorías</a></li>
	        	<li><a href="#" onClick="showSearchBoxOnly();">Editoras</a></li>
                <li><a href="#" onClick="showSearchBoxOnly();">Fonografía</a></li>
                  
       	  </ul>
     </div>
 </div>
 
  <div id="footerContacto">  	    
    <div style="float:left"> 
    <a href="home.html"><img src="imagenes/logo.jpg" alt="Musica Orquestal Mexicana"   /></a>
       </div>  
    <div style="float:left; padding-left:50;margin-left:60px;padding-top:10px;" > 
        
         <p>Sitio realizado por Cántaro Músicas en México para el Sistema Nacional de Fomento Musical</p>
         <p>México 2012 © Todos los derechos reservados </p>
          <p><a href="http://snfm.conaculta.gob.mx/" target="_blank"><img src="imagenes/logo_dependencia.jpg" alt="Sistema Nacional de Fomento Musical" width="151" height="100" style="padding:15px;"/></a><a href="http://cantaromusicasenmexico.com" target="_blank"><img src="imagenes/cantaro.png" alt="Cántaro Músicas en México" name="LogoCantaro" width="84" height="120" id="LogoCantaro2" /></a><br />
         </p>
    </div>
       
    <p>&nbsp;</p><p>&nbsp;</p>
    <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
    <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p> 
    
  </div>
    
 <!-- end .footer --></div>
    
    
    <div class="clearfloat"> </div>
</body>
</html>

<? } else { 
		echo "<center><br><br>No tiene permiso para accesar a esta página."; 
}  // <- cierre IF de INICIO


// Funciones
function getSemblanzaTxt($idObra) {
	$semblanza = "";	
	$file = "./uploads/biografias/".$idObra.".html";
	if(file_exists($file)) {
		$f = fopen($file, "r");
		while ( $line = fgets($f, 1000) ) {
			$semblanza .= $line;
		}	
	} else {	
		$file = "./uploads/biografias/".$idObra.".txt";
		if(file_exists($file)) {
			$f = fopen($file, "r");
			while ( $line = fgets($f, 1000) ) {
				$semblanza .= $line;
			}	
			$semblanza = nl2br($semblanza);
		}
	}
	
	return $semblanza;	
}

function hasSemblanzaIMG($idObra) {
	// create an array to hold directory list
    $results = array();
	$flag = false;
	$dir = "./uploads/imagenesBios/";
    // create a handler for the directory
	
    $handler = opendir($dir);
    // open directory and walk through the filenames
    while ($file = readdir($handler)) {
      // if file isn't this directory or its parent, add it to the results
	  $fileExt = substr(strrchr($file,'.'),1);
      if ($fileExt == "jpg") {
        $flag = true;
		break;
      }
    }
    // tidy up: close the handler
    closedir($handler);
    // done!
    return $flag;
}
?>
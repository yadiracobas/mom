// JavaScript Document
function doLogin() {	
	$.post("showLogin.php", {}, function(data) {
		  if(data=='yes') { //if login form is needed		  
			    $('#login').css("visibility","visible");
		  } else { // login already
			    $("#main").empty().html('<br><br><center>Cargando el contenido...<br><img width="50" src="loading.gif" /></center>');
				$.post('mostrarConsolaAdmin.php', {}, function(data) {
				     $('#main').html(data);
				});  
		  }		  
	});	
}

function showMusicos() {
	$("#content").empty().html('<br><br><center>Cargando el contenido...<br><img width="50" src="loading.gif" /><br>Puede tardar unos minutos, espere por favor!</center>');
	$.post('mostrarMusicos.php', {}, function(data) {
	     $('#content').html(data);
	}); 		
}

function showAgregarMusico() {
	$("#content").empty().html('<br><br><center>Cargando el contenido...<br><img width="50" src="loading.gif" /></center>');
	$.post('agregarMusico.php', {}, function(data) {
	     $('#content').html(data);
	}); 
}

function doAgregarMusico() {	
	var nombre = $("#nombreMusicoNuevo").val();
	var vitae = $("#vitaeMusicoNuevo").val();
	var sexo = $("#sexoMusicoNuevo").val();
	var crono = $("#cronoMusicoNuevo").val();
	var especialidad = $("#especialidadMusicoNuevo").val();
	var notas = $("#notasMusicoNuevo").val();	
	if (nombre == "" || nombre==" ") { alert("Debe ingresar el nombre del Musico necesariamente!"); }
	else {
		$("#content").empty().html('<br><br><center>Agregando el contenido...<br><img width="50" src="loading.gif" /></center>');
		$.post('processAgregarMusico.php', {nombre:nombre, vitae:vitae, sexo:sexo, crono:crono, especialidad:especialidad, notas:notas}, function(data) {
		     $('#content').html(data);
		}); 
	}
	
}

function editarMusico(id, i) {
	var pr = '#musico_'+i;	
	var nombre = $("#nombre_"+i).val();
	var vitae = $("#vitae_"+i).val();
	var sexo = $("#sexo_"+i).val();
	var crono = $("#crono_"+i).val();
	var especialidad = $("#especialidad_"+i).val();
	var notas = $("#notas_"+i).val();	
	if (nombre == "" || nombre==" ") { alert("Debe ingresar el nombre del Musico necesariamente!"); }
	else {
		$(pr).empty().html('<center><img width="50" src="loading.gif" /><br>Editando el contenido...</center>');
		$.post('editMusico.php', {i:i, id:id, nombre:nombre, vitae:vitae, sexo:sexo, crono:crono, especialidad:especialidad, notas:notas}, function(data) {
			  $(pr).html(data);
		});	
	}
}

function eliminarMusico(id, i) {
	var answer = confirm ("¿Esta seguro que desea eliminar este Musico?")
	if (answer) {
		var pr = '#musico_'+i;
		$(pr).empty().html('<center><img width="50" src="loading.gif" /><br>Eliminando el contenido...</center>');
		$.post('eliminarMusico.php', {id : id}, function(data) {
			  $(pr).html(data);
		});
	}
		
}

function showObras() {
	$("#content").empty().html('<br><br><center>Cargando el contenido...<br><img width="50" src="loading.gif" /><br>Puede tardar unos minutos, espere por favor!</center>');
	$.post('mostrarObras.php', {}, function(data) {
	     $('#content').html(data);
	}); 		
}

function editarObra(id) {
	$("#content").empty().html('<br><br><center>Cargando el contenido...<br><img width="50" src="loading.gif" /></center>');
	$.post('editObra.php', {id:id}, function(data) {
	     $('#content').html(data);
	}); 
}

function doEditarObra() {	
	var IdObra = $("#idObra").val();
	var Titulo = $("#titulo").val();
	var AnoComposicion = $("#anoComposicion").val();
	var Duracion = $("#duracion").val();
	var Duracion2 = $("#duracion2").val();
	var Periodo = $("#periodo").val();
	var Tema = $("#tema").val();	
	var Texto = $("#texto").val();	
	var Solista = $("#solista").val();	
	var DotacionEspecifica = $("#dotacionEspecifica").val();	
	var Solista = $("#solista").val();	
	var IdDotacion = $("#idDotacion").val();
	var Localizacion = $("#localizacion").val();	
	var Movimientos = $("#movimientos").val();	
	var Estreno = $("#estreno").val();	
	var Fuentes = $("#fuentes").val();			
	var IdMusico = $("#idMusico").val();
	
	$('#content').empty().html('<center><img width="50" src="loading.gif" /><br>Editando el contenido...</center>');	
	$.post('doEditObra.php', {IdObra:IdObra, Titulo:Titulo, AnoComposicion:AnoComposicion, Duracion:Duracion, Duracion2:Duracion2, Periodo:Periodo, Tema:Tema, Texto:Texto, Solista:Solista, DotacionEspecifica:DotacionEspecifica, Solista:Solista, IdDotacion:IdDotacion, Localizacion:Localizacion, Movimientos:Movimientos, Estreno:Estreno, Fuentes:Fuentes, IdMusico:IdMusico}, function(data) {
		  $('#content').html(data);
	});	
}

function eliminarObra(id) {
	var answer = confirm ("¿Esta seguro que desea eliminar esta Obra?")
	if (answer) {	
		$('#content').empty().html('<center><img width="50" src="loading.gif" /><br>Eliminando el contenido...</center>');	
		$.post('eliminarObra.php', {id : id}, function(data) {
			  showObras();
		});
	}
		
}

function showAgregarObra(){
	$("#content").empty().html('<br><br><center>Cargando el contenido...<br><img width="50" src="loading.gif" /></center>');
	$.post('agregarObra.php', {}, function(data) {
	     $('#content').html(data);
	}); 
}

function doAgregarObra() {	
	var Titulo = $("#titulo").val();
	var Composicion = $("composicion").val();
	var Duracion = $("#duracion").val();
	var Duracion2 = $("#duracion2").val();
	var Periodo = $("#periodo").val();
	var Tema = $("#tema").val();
	var Texto = $("#texto").val();	
	var Solista = $("#solista").val();	
	var DotacionEspecifica = $("#dotacionEspecifica").val();
	var IdDotacion = $("#idDotacion").val();
	var IdMusico = $("#idMusico").val();
	var Localizacion = $("#localizacion").val();
	var Movimientos = $("#movimientos").val();
	var Estreno = $("#estreno").val();
	var Fuentes = $("#fuentes").val();
	
	if (Titulo == "" || Titulo ==" ") { alert("Debe ingresar el nombre dee la Obra necesariamente!"); }
	else {
		$("#content").empty().html('<br><br><center>Agregando el contenido...<br><img width="50" src="loading.gif" /></center>');
		$.post('processAgregarObra.php', {Titulo:Titulo,Composicion:Composicion,Duracion:Duracion,Duracion2:Duracion2,Periodo:Periodo,Tema:Tema,Texto:Texto,Solista:Solista,DotacionEspecifica:DotacionEspecifica,IdDotacion:IdDotacion,Localizacion:Localizacion,Movimientos:Movimientos,Estreno:Estreno,Fuentes:Fuentes,IdMusico:IdMusico}, function(data) {
		     $('#content').html(data);
		}); 
	}
	
}

function showDiscos() {
	$("#content").empty().html('<br><br><center>Cargando el contenido...<br><img width="50" src="loading.gif" /><br>Puede tardar unos minutos, espere por favor!</center>');
	$.post('mostrarDiscos.php', {}, function(data) {
	     $('#content').html(data);
	}); 		
}

function editarDisco(id) {
	$("#content").empty().html('<br><br><center>Cargando el contenido...<br><img width="50" src="loading.gif" /></center>');
	$.post('editDisco.php', {id:id}, function(data) {
	     $('#content').html(data);
	}); 
}

function doEditDisco(id) {
	var Titulo = $("#Titulo").val();
	var IdMarca = $("#IdMarca").val();
	var NoSerie = $("#NoSerie").val();
	var Ano	= $("#Ano").val();
	var Formato = $("#Formato").val();
	var Claves = $("#Claves").val();
	var Interpretes = $("#Interpretes").val();
	var Director = $("#Director").val();
	var Solista = $("#Solista").val();
	var Digitalizacion = $("#Digitalizacion").val();
		
	$('#content').empty().html('<br><br><center>Editando el contenido...<br><img width="50" src="loading.gif" /></center>');
	$.post('editDisco.php', {id:id}, function(data) {
	     $('#content').html(data);
	}); 
}

function eliminarDisco(id) {
	var answer = confirm ("¿Esta seguro que desea eliminar este Disco?")
	if (answer) {	
		$('#content').empty().html('<center><img width="50" src="loading.gif" /><br>Eliminando el contenido...</center>');	
		$.post('eliminarDisco.php', {id : id}, function(data) {
			  showDiscos();
		});
	}		
}

function doEditarDisco() {	
	var IdDisco = $("#IdDisco").val();
	var	Titulo = $("#Titulo").val();
	var	IdMarca = $("#IdMarca").val();
	var	NoSerie = $("#NoSerie").val();
	var	Ano = $("#Ano").val();
	var	Formato = $("#Formato").val();
	var	Claves = $("#Claves").val();
	var	Interpretes = $("#Interpretes").val();
	var	Director = $("#Director").val();
	var	Solista = $("#Solista").val();
	var	Digitalizacion = $("#Digitalizacion").val();	
	$('#content').empty().html('<center><img width="50" src="loading.gif" /><br>Editando el contenido...</center>');	
	$.post('doEditDisco.php', {IdDisco:IdDisco,Titulo:Titulo,IdMarca:IdMarca,NoSerie:NoSerie,Ano:Ano,Formato:Formato,Claves:Claves,Interpretes:Interpretes,Director:Director,Solista:Solista,Digitalizacion:Digitalizacion}, function(data) {
		  $('#content').html(data);
	});	
}

function showAgregarDisco(){
	$("#content").empty().html('<br><br><center>Cargando el contenido...<br><img width="50" src="loading.gif" /></center>');
	$.post('agregarDisco.php', {}, function(data) {
	     $('#content').html(data);
	}); 
}

function doAgregarDisco(id) {
	var Titulo = $("#Titulo").val();
	var IdMarca = $("#IdMarca").val();
	var NoSerie = $("#NoSerie").val();
	var Ano	= $("#Ano").val();
	var Formato = $("#Formato").val();
	var Claves = $("#Claves").val();
	var Interpretes = $("#Interpretes").val();
	var Director = $("#Director").val();
	var Solista = $("#Solista").val();
	var Digitalizacion = $("#Digitalizacion").val();
		
	$('#content').empty().html('<br><br><center>Agregando el contenido...<br><img width="50" src="loading.gif" /></center>');
	$.post('processAgregarDisco.php', {id:id}, function(data) {
	     $('#content').html(data);
	}); 
}

function showEditores() {
	$("#content").empty().html('<br><br><center>Cargando el contenido...<br><img width="50" src="loading.gif" /><br>Puede tardar unos minutos, espere por favor!</center>');
	$.post('mostrarEditoras.php', {}, function(data) {
	     $('#content').html(data);
	}); 
}

function editarEditor(id) {
	$("#content").empty().html('<br><br><center>Cargando el contenido...<br><img width="50" src="loading.gif" /></center>');
	$.post('editEditor.php', {id:id}, function(data) {
	     $('#content').html(data);
	}); 
}

function doEditarEditor() {	
	var IdEditor = $("#IdEditor").val();
	var Nombre = $("#Nombre").val();
	var Abreviatura = $("#Abreviatura").val();
	var Direccion = $("#Direccion").val();
	var Email = $("#Email").val();
	var Contacto = $("#Contacto").val();
	var Telefono = $("#Telefono").val();

	$('#content').empty().html('<center><img width="50" src="loading.gif" /><br>Editando el contenido...</center>');	
	$.post('doEditEditor.php', {IdEditor:IdEditor,Nombre:Nombre,Abreviatura:Abreviatura,Direccion:Direccion,Email:Email,Contacto:Contacto,Telefono:Telefono}, function(data) {
		  $('#content').html(data);
	});	
}

function eliminarEditor(id) {
	var answer = confirm ("¿Esta seguro que desea eliminar este Editor/Contacto?")
	if (answer) {	
		$('#content').empty().html('<center><img width="50" src="loading.gif" /><br>Eliminando el contenido...</center>');	
		$.post('eliminarEditor.php', {id : id}, function(data) {
			  showEditores();
		});
	}		
}

function showAgregarEditor(){
	$("#content").empty().html('<br><br><center>Cargando el contenido...<br><img width="50" src="loading.gif" /></center>');
	$.post('agregarEditor.php', {}, function(data) {
	     $('#content').html(data);
	}); 
}

function doAgregarEditor(id) {
	var IdEditor = $("#IdEditor").val();
	var Nombre = $("#Nombre").val();
	var Abreviatura = $("#Abreviatura").val();
	var Direccion = $("#Direccion").val();
	var Email = $("#Email").val();
	var Contacto = $("#Contacto").val();
	var Telefono = $("#Telefono").val();
		
	$('#content').empty().html('<br><br><center>Agregando el contenido...<br><img width="50" src="loading.gif" /></center>');
	$.post('processAgregarEditor.php', {IdEditor:IdEditor,Nombre:Nombre,Abreviatura:Abreviatura,Direccion:Direccion,Email:Email,Contacto:Contacto,Telefono:Telefono}, function(data) {
	     $('#content').html(data);
	}); 
}

function showObrasGrabadas() {
	$("#content").empty().html('<br><br><center>Cargando el contenido...<br><img width="50" src="loading.gif" /></center>');
	$.post('mostrarObrasGrabadas.php', {}, function(data) {
	     $('#content').html(data);
	}); 	
}

function showAgregarObraGrabada() {
	$("#content").empty().html('<br><br><center>Cargando el contenido...<br><img width="50" src="loading.gif" /></center>');
	$.post('agregarObraGrabada.php', {}, function(data) {
	     $('#content').html(data);
	}); 
}

function editarObraGrabada(id) {
	$("#content").empty().html('<br><br><center>Cargando el contenido...<br><img width="50" src="loading.gif" /></center>');
	$.post('editObraGrabada.php', {id:id}, function(data) {
	     $('#content').html(data);
	}); 
}

function eliminarObraGrabada(id) {
	var answer = confirm ("¿Esta seguro que desea eliminar esta Obra Grabada?")
	if (answer) {	
		$('#content').empty().html('<center><img width="50" src="loading.gif" /><br>Eliminando el contenido...</center>');	
		$.post('eliminarObraGrabada.php', {id : id}, function(data) {
			  showObrasGrabadas();
		});
	}		
}

function doEditarObraGrabada() {	
	var id = $("#IdObraGrabada").val();
	var IdObra = $("#IdObra").val();
	var Titulo = $("#Titulo").val();		
	var	IdMusico = $("#IdMusico").val();
	var	Dotacion = $("#Dotacion").val();
	var	Orquesta = $("#Orquesta").val();
	var	Director = $("#Director").val();			
	var	Solistas = $("#Solistas").val();
	var	Movimientos = $("#Movimientos").val();
	var	Track = $("#Track").val();
	var	Duracion = $("#Duracion").val();
	var	IdDisco = $("#IdDisco").val();
	var	Notas = $("#Notas").val();	

	$('#content').empty().html('<center><img width="50" src="loading.gif" /><br>Editando el contenido...</center>');	
	$.post('doEditObraGrabada.php', {id:id,IdObra:IdObra,Titulo:Titulo,IdMusico:IdMusico,Dotacion:Dotacion,Orquesta:Orquesta,Director:Director,Solistas:Solistas,Movimientos:Movimientos,Track:Track,Duracion:Duracion,IdDisco:IdDisco,Notas:Notas}, function(data) {
		  $('#content').html(data);
	});	
}

function doAgregarObraGrabada() {
	var id = $("#IdObraGrabada").val();
	var IdObra = $("#IdObra").val();
	var Titulo = $("#Titulo").val();		
	var	IdMusico = $("#IdMusico").val();
	var	Dotacion = $("#Dotacion").val();
	var	Orquesta = $("#Orquesta").val();
	var	Director = $("#Director").val();			
	var	Solistas = $("#Solistas").val();
	var	Movimientos = $("#Movimientos").val();
	var	Track = $("#Track").val();
	var	Duracion = $("#Duracion").val();
	var	IdDisco = $("#IdDisco").val();
	var	Notas = $("#Notas").val();	

	$('#content').empty().html('<center><img width="50" src="loading.gif" /><br>Agregando el contenido...</center>');	
	$.post('processAgregarObraGrabada.php', {id:id,IdObra:IdObra,Titulo:Titulo,IdMusico:IdMusico,Dotacion:Dotacion,Orquesta:Orquesta,Director:Director,Solistas:Solistas,Movimientos:Movimientos,Track:Track,Duracion:Duracion,IdDisco:IdDisco,Notas:Notas}, function(data) {
		  $('#content').html(data);
	});	
}
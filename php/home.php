<?php
	session_start();
	if ($_SESSION['rol'] != "Estudiante")
	{
		echo '<script>window.location="../index.php";</script>';
	}
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
	$data->Connect();
	date_default_timezone_set ( 'America/Lima' ); 
?>
<html>
	<head>
		<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
		<link type="text/css" rel="stylesheet" href="../calendario/estilo.css" media="screen"></LINK>
		<title>OFICINA DE RECURSOS HUMANOS</title>
		<script type="text/javascript" src="../highslide/highslide-with-html.js"></script>
		<!-- 
		    2) Optionally override the settings defined at the top
		    of the highslide.js file. The parameter hs.graphicsDir is important!
		-->
		<script type="text/javascript">    
    		hs.graphicsDir = '../highslide/graphics/';
    		hs.outlineType = 'rounded-white';
    		hs.outlineWhileAnimating = true;
		</script>
			<!-- 
			    3) These CSS-styles are necessary for the script to work. You may also put
    			them in an external CSS-file. See the webpage for documentation.
			-->
			<style type="text/css">
				.highslide-html 
				{
				    background-color: #74B743;
				}
				.highslide-html-blur 
				{
				}
				.highslide-html-content 
				{
					position: absolute;
    				display: none;
				}
				.highslide-loading 
				{
    				display: block;
					color: black;
					font-size: 8pt;
					font-family: sans-serif;
					font-weight: bold;
    				text-decoration: none;
					padding: 2px;
					border: 1px solid black;
    				background-color: white;
    			    padding-left: 22px;
    				background-image: url(../highslide/graphics/loader.white.gif);
    				background-repeat: no-repeat;
    				background-position: 3px 1px;
				}
				a.highslide-credits,
				a.highslide-credits i 
				{
    				padding: 2px;
    				color: silver;
    				text-decoration: none;
					font-size: 10px;
				}
				a.highslide-credits:hover,
				a.highslide-credits:hover i 
				{
    				color: white;
    				background-color: gray;
				}
				/* Styles for the popup */
				.highslide-wrapper 
				{
					background-color: white;
				}
				.highslide-wrapper .highslide-html-content 
				{
    				width: 600px;
    				padding: 5px;
				}
				.highslide-wrapper .highslide-header div 
				{
				}
				.highslide-wrapper .highslide-header ul 
				{
					margin: 0;
					padding: 0;
					text-align: right;
				}
				.highslide-wrapper .highslide-header ul li 
				{
					display: inline;
					padding-left: 1em;
				}
				.highslide-wrapper .highslide-header ul li.highslide-previous, .highslide-wrapper .highslide-header ul li.highslide-next 
				{
					display: none;
				}
				.highslide-wrapper .highslide-header a 
				{
					font-weight: bold;
					color: gray;
					text-transform: uppercase;
					text-decoration: none;
				}
				.highslide-wrapper .highslide-header a:hover 
				{
					color: black;
				}
				.highslide-wrapper .highslide-header .highslide-move a 
				{
					cursor: move;
				}
				.highslide-wrapper .highslide-footer 
				{
					height: 11px;
				}
				.highslide-wrapper .highslide-footer .highslide-resize 
				{
					float: right;
					height: 11px;
					width: 11px;
					background: url(../highslide/graphics/resize.gif);
				}
				.highslide-wrapper .highslide-body 
				{
				}
				.highslide-move 
				{
    				cursor: move;
				}
				.highslide-resize 
				{
    				cursor: nw-resize;
				}
				/* These must be the last of the Highslide rules */
				.highslide-display-block 
				{
    				display: block;
				}
				.highslide-display-none 
				{
    				display: none;
				}
			</style>			
		<SCRIPT type="text/javascript" src="../calendario/java.js?random=20060118"></script>
		<script language="javascript" src="stmenu.js"></script>
		<script language="javascript" src="../js/prototype.js"></script>
		<script language="javascript" src="../js/start_pop.js"></script>
		<script language="javascript" src="../js/socios.js"></script>
		<script language="javascript">
			function reg_tipo()
			{
				window.open("http://localhost/registroplanilla/php/reg_tipo.php" , "ventana", "scrollbars=1, resizable=1 ,toolbar=no,titlebar=yes,menubar=no,status=1,width=380,height=130,top=200,left=300");
			}
			function reg_remuneracion()
			{
				window.open("http://localhost/registroplanilla/php/reg_remuneracion.php" , "ventana", "scrollbars=1, resizable=1 ,toolbar=no,titlebar=yes,menubar=no,status=1,width=430,height=260,top=200,left=300");
			}
			function reg_seguro()
			{
				window.open("http://localhost/registroplanilla/php/reg_seguro.php" , "ventana", "scrollbars=1, resizable=1 ,toolbar=no,titlebar=yes,menubar=no,status=1,width=430,height=260,top=200,left=300");
			}
			function reg_personal()
			{
				window.open("http://localhost/registroplanilla/php/reg_personal.php" , "ventana", "scrollbars=1, resizable=1 ,toolbar=no,titlebar=yes,menubar=no,status=1,width=630,height=477,top=100,left=200");
			}
			function llamarAjax1(div,pagina)
			{
				campos = Form.serialize('f1');
				var url = pagina;
				var miAleatorio = parseInt(Math.random()*99999999);
				var op;
	   			var pars = campos+'&miAleatorio='+miAleatorio;	
	    		var target = div;
	    		var miAjax = new Ajax.Updater(target, url, {method: 'get', parameters: pars});
			}
			function cambia_color(color,id)
			{
				document.getElementById(id).style.background=color;
			}
			function inicio_color(color,id)
			{
				document.getElementById(id).style.background=color;
			}
		</script> 
	</head>
	<body>
		<div class="banner"><img src="../imagenes/adunas-izq.jpg" width="143" height="62"></div>
		<div>
			<table width="804" height="38" border="0" cellpadding="0" cellspacing="0">
  				<tr>
    				<td width="804" height="32">
						<?php 
							echo "Nivel : ";
							if ($_SESSION['rol'] == "Estudiante")
					    	echo "AREA RECURSOS HUMANOS";
						?>				
					</td>
    			</tr>
			</table>
		</div>
		<div class="menu">
			<?php 
				include("menus/menu.php");
			?>
		</div>
		<div class="general" id="general">
			<?php 
			switch($_GET["a"])
			{
				case 0: include("logo.php");break;
				case 1: include("tipo.php");break;
				case 2: include("tipo_nivel.php");break;
				case 3: include("nivel.php");break;
				case 4: include("tipo_asig.php");break;
				case 5: include("asignacion.php");break;
				case 6: include("asignacion_depe.php");break;
				case 7: include("dependencia.php");break;
				case 8: include("dependencia_area.php");break;
				case 9: include("area.php");break;
				case 10: include("seguro.php");break;
				case 11: include("remuneracion.php");break;
				case 12: include("personal.php");break;
				case 13: include("registro_tarjeta.php");break;
				case 14: include("tarjeta.php");break;
				case 15: include("control_tarjeta.php");break;
				case 24: include("buscar_dni.php");break;
			}
			?>
			</div>
	</body>
</html>
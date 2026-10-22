<?php 	 
	session_start();
	if ($_SESSION['rol'] != "Estudiante")
	{
		echo '<script>window.location="../error.php";</script>';
	}
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$promo = $_GET['promo'];
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
	$data->Connect();
?>
<html>
<style type="text/css">
	<!--
		body,td,th 
		{
			color: #999999;
		}
body {
	background-color: #EBEAE7;
}
.Estilo14 {color: #000000; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
	-->
</style>
	<link href="../css/estilos.css" rel="stylesheet" type="text/css">
<body>
<form name="form1" method="post" >
	<table width="523" height="423" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000" class="tabla1">
		<?php
			$q = "SELECT * FROM personal WHERE dni = $promo";
		    $data->ExecuteRowFetcher($q);
		    while($data->Row != 0)
			{
		?>
		<tr>
			<td width="150" class="th_2" style=" border-bottom:solid 0px #000000;">
		  		<span class="Estilo14">
					&nbsp;&nbsp;&nbsp;DNI				</span>			</td>
		  	<td width="10" height="22" class="th_2" style=" border-bottom:solid 0px #000000;">
				<span class="Estilo14">
					:				</span>			</td>
		  	<td width="363" class="th_2" style=" border-bottom:solid 0px #000000;">
				<span class="Estilo14">
					<?php echo ($data->Row['dni']) ?>				</span>			</td>
	  	</tr>
		<tr>
		    <td style=" border-bottom:solid 0px #000000;" class="th_2">
				<span class="Estilo14"> 
					&nbsp;&nbsp;&nbsp;Fecha Reg				</span>			</td>
		    <td height="22" style=" border-bottom:solid 0px #000000;" class="th_2">
				<span class="Estilo14">
					:				</span>			</td>
		    <td style=" border-bottom:solid 0px #000000;" class="th_2">
				<span class="Estilo14">
					<?php echo $data->Row['fechareg']; ?>				</span>			</td>
  		</tr>
  		<tr>
    		<td style=" border-bottom:solid 0px #000000;" class="th_2">
				<span class="Estilo14"> 
					&nbsp;&nbsp;&nbsp;Apellido				</span>			</td>
    		<td height="22" style=" border-bottom:solid 0px #000000;" class="th_2">
				<span class="Estilo14">
					:				</span>			</td>
    		<td style=" border-bottom:solid 0px #000000;" class="th_2">
				<span class="Estilo14">
					<?php echo ($data->Row['apellidos']) ?>				</span>			</td>
  		</tr>
  		<tr>
    		<td style=" border-bottom:solid 0px #000000;" class="th_2">
				<span class="Estilo14"> 
					&nbsp;&nbsp;&nbsp;Nombres				</span>			</td>
    		<td height="21" style=" border-bottom:solid 0px #000000;" class="th_2">
				<span class="Estilo14"> 
					:				</span>			</td>
    		<td style=" border-bottom:solid 0px #000000;" class="th_2">
				<span class="Estilo14">
					<?php echo ($data->Row['nombres']) ?>				</span>			</td>
  		</tr>
  		<tr>
    		<td style=" border-bottom:solid 0px #000000;" class="th_2">
				<span class="Estilo14"> 
					&nbsp;&nbsp;&nbsp;Direccion				</span>			</td>
    		<td height="21" style=" border-bottom:solid 0px #000000;" class="th_2">
				<span class="Estilo14">
					:				</span>			</td>
    		<td style=" border-bottom:solid 0px #000000;" class="th_2">
				<span class="Estilo14">
					<?php echo ($data->Row['direccion']) ?>				</span>			</td>
  		</tr>
  		<tr>
  			<td style=" border-bottom:solid 0px #000000;" class="th_2">
		  		<span class="Estilo14">
					&nbsp;&nbsp;&nbsp;Contrato				</span>			</td>
  		  	<td height="21" style=" border-bottom:solid 0px #000000;" class="th_2">
		  		<span class="Estilo14">
					:				</span>			</td>
  		  	<td style=" border-bottom:solid 0px #000000;" class="th_2"><span class="th_2" style=" border-bottom:solid 0px #000000;"><span class="Estilo14"><?php echo ($data->Row['contrato']) ?></span></span></td>
	  	</tr>
  		<tr>
  		  <td style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14">&nbsp;&nbsp;&nbsp;Fecha Cese </span></td>
  		  <td height="21" style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14">: </span></td>
  		  <td style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14"><?php echo ($data->Row['fecharfin']) ?></span></td>
	  </tr>
  		<tr>
  			<td style=" border-bottom:solid 0px #000000;" class="th_2">
				<span class="Estilo14">
					&nbsp;&nbsp;&nbsp;Resolucion				</span>			</td>
  			<td height="21" style=" border-bottom:solid 0px #000000;" class="th_2">
				<span class="Estilo14">
					:				</span>			</td>
  			<td style=" border-bottom:solid 0px #000000;" class="th_2">
				<span class="Estilo14">
					<?php echo ($data->Row['resolucion']) ?>				</span>			</td>
	  	</tr>
  		<tr>
  		  <td style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14">&nbsp;&nbsp;&nbsp;Tipo</span></td>
  		  <td height="21" style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14">: </span></td>
  		  <td style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14"><?php echo ($data->Row['nomtipo']) ?></span></td>
	  </tr>
  		<tr>
  		  	<td style=" border-bottom:solid 0px #000000;" class="th_2">
		  		<span class="Estilo14">
					&nbsp;&nbsp;&nbsp;Nivel				</span>			</td>
  		  	<td height="21" style=" border-bottom:solid 0px #000000;" class="th_2">
				<span class="Estilo14">
					:				</span>			</td>
  		  	<td style=" border-bottom:solid 0px #000000;" class="th_2">
				<span class="Estilo14">
					<?php echo ($data->Row['nomnivel']) ?>				</span>			</td>
	  	</tr>
  		<tr>
  		  <td style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14">&nbsp;&nbsp;&nbsp;Asignacion</span></td>
  		  <td height="21" style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14">: </span></td>
  		  <td style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14"><?php echo ($data->Row['nomasig']) ?></span></td>
	  </tr>
  		<tr>
  		  <td style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14">&nbsp;&nbsp;&nbsp;Dependencia</span></td>
  		  <td height="21" style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14">:</span></td>
  		  <td style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14"><?php echo ($data->Row['nomdepe']) ?></span></td>
	  </tr>
  		<tr>
  		  <td style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14">&nbsp;&nbsp; Area </span></td>
  		  <td height="21" style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14">: </span></td>
  		  <td style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14"><?php echo ($data->Row['nomarea']) ?></span></td>
	  </tr>
  		<tr>
  		  	<td style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14">&nbsp;&nbsp;&nbsp;Titulo</span></td>
  		  	<td height="21" style=" border-bottom:solid 0px #000000;" class="th_2">
				<span class="Estilo14">
					:				</span>			</td>
  		  	<td style=" border-bottom:solid 0px #000000;" class="th_2">
				<span class="Estilo14">
					<?php echo ($data->Row['titulo']) ?>				</span>			</td>
	  	</tr>
  		<tr>
  		  <td style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14">&nbsp;&nbsp;&nbsp;Especialidad</span></td>
  		  <td height="21" style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14">: </span></td>
  		  <td style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14"><?php echo ($data->Row['especialidad']) ?></span></td>
	  </tr>
  		<tr>
  		  	<td style=" border-bottom:solid 0px #000000;" class="th_2">
				<span class="Estilo14">
					&nbsp;&nbsp;&nbsp;Remuneracion</span>			</td>
  		  	<td height="21" style=" border-bottom:solid 0px #000000;" class="th_2">
				<span class="Estilo14">
					:				</span>			</td>
  		  	<td style=" border-bottom:solid 0px #000000;" class="th_2">
				<span class="Estilo14">
					<?php echo ($data->Row['nomremu']) ?>				</span>			</td>
	  	</tr>
  		<tr>
  		  <td style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14">&nbsp;&nbsp;&nbsp;Seguro</span></td>
  		  <td height="21" style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14">: </span></td>
  		  <td style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14"><?php echo ($data->Row['nomseg']) ?></span></td>
	  </tr>
  		<tr>
  		  <td style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14">&nbsp;&nbsp;&nbsp;Genero</span></td>
  		  <td height="21" style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14">:</span></td>
  		  <td style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14"><?php echo ($data->Row['genero']) ?></span></td>
	  </tr>
  		<tr>
  		  	<td style=" border-bottom:solid 0px #000000;" class="th_2">
				<span class="Estilo14">
					&nbsp;&nbsp;				</span>			<span class="Estilo14">Telefono</span></td>
  		  	<td height="21" style=" border-bottom:solid 0px #000000;" class="th_2">
				<span class="Estilo14">
					:				</span>			</td>
  		  	<td style=" border-bottom:solid 0px #000000;" class="th_2">
				<span class="Estilo14">
					<?php echo ($data->Row['telefono']) ?>				</span>			</td>
	  	</tr>
  		<tr>
    		<td style=" border-bottom:solid 0px #000000;" class="th_2">
				<span class="Estilo14"> 
					&nbsp;&nbsp;&nbsp;Email				</span>			</td>
    		<td height="21" style=" border-bottom:solid 0px #000000;" class="th_2">
				<span class="Estilo14">
					:				</span>			</td>
    		<td style=" border-bottom:solid 0px #000000;" class="th_2">
				<span class="Estilo14">
					<?php echo ($data->Row['email']) ?>				</span>			</td>
  		</tr>
		<?php
		   		$data->FetchRow();
	   		}			
		?>
	</table>
</form>
    </body>
</html>
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
<form name="form1" method="post" action="ver_alumno_proc.php">
	<table width="523" height="297" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000" class="tabla1">
		<?php
			$q = "SELECT * FROM personal WHERE dniper = $promo";
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
					<?php echo ($data->Row['dniper']) ?>				</span>			</td>
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
					<?php echo $data->Row['fecharper']; ?>				</span>			</td>
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
					<?php echo ($data->Row['apellidosper']) ?>				</span>			</td>
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
					<?php echo ($data->Row['nombresper']) ?>				</span>			</td>
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
					<?php echo ($data->Row['direccionper']) ?>				</span>			</td>
  		</tr>
  		<tr>
  			<td style=" border-bottom:solid 0px #000000;" class="th_2">
		  		<span class="Estilo14">
					&nbsp;&nbsp;&nbsp;Contrato				</span>			</td>
  		  	<td height="21" style=" border-bottom:solid 0px #000000;" class="th_2">
		  		<span class="Estilo14">
					:				</span>			</td>
  		  	<td style=" border-bottom:solid 0px #000000;" class="th_2">
				<span class="Estilo14">
					<?php echo ($data->Row['contratoper']) ?>				</span>			</td>
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
					<?php echo ($data->Row['resolucionper']) ?>				</span>			</td>
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
					<?php echo ($data->Row['nivelper']) ?>				</span>			</td>
	  	</tr>
  		<tr>
  		  <td style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14">&nbsp;&nbsp;&nbsp;Dependencia</span></td>
  		  <td height="21" style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14">:</span></td>
  		  <td style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14"><?php echo ($data->Row['dependenciaper']) ?></span></td>
	  </tr>
  		<tr>
  		  	<td style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14">&nbsp;&nbsp;&nbsp;Titulo</span></td>
  		  	<td height="21" style=" border-bottom:solid 0px #000000;" class="th_2">
				<span class="Estilo14">
					:				</span>			</td>
  		  	<td style=" border-bottom:solid 0px #000000;" class="th_2">
				<span class="Estilo14">
					<?php echo ($data->Row['tituloper']) ?>				</span>			</td>
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
					<?php echo ($data->Row['remuneracionper']) ?>				</span>			</td>
	  	</tr>
  		<tr>
  		  <td style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14">&nbsp;&nbsp;&nbsp;Genero</span></td>
  		  <td height="21" style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14">:</span></td>
  		  <td style=" border-bottom:solid 0px #000000;" class="th_2"><span class="Estilo14"><?php echo ($data->Row['generoper']) ?></span></td>
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
					<?php echo ($data->Row['telefonoper']) ?>				</span>			</td>
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
					<?php echo ($data->Row['emailper']) ?>				</span>			</td>
  		</tr>
		<?php
		   		$data->FetchRow();
	   		}			
		?>
	</table>
</form>
    </body>
</html>
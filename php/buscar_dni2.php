<?php 
	session_start();
	require("../utiles/config.php");
	require("../utiles/mysqldatabase.php");
	$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
	$data->Connect();
	date_default_timezone_set ( 'UTC' ); 
?>
<div class="titulo">
		<p>Reporte de Prestamos por DNI : <?php echo $dni ?></p>
	</div>
	<div class="izq">
		<table width="895" border="0" cellpadding="0" >
		<tr>
			<td width="136" class="th_1">Codigo Control </td>
			<td width="122" class="th_1">Fecha</td>
			<td width="149" class="th_1">Codigo Tarjeta </td>
			<td width="103" class="th_1">DNI</td>
			<td width="92" class="th_1">Hora Entrada </td>
		    <td width="134" class="th_1">Hora Salida </td>
		    <td colspan="3" class="th_1">Opcion</td>
		</tr>
		<?php 
	$sql=mysql_query("SELECT * FROM `prestamos` WHERE `dni` like '$dni' ;",$link);
		while($row=mysql_fetch_array($sql))
		{
			//letras_garante($cod)
			$sql3=mysql_query($pro->letras_garante($row["id_prestamo"]),$link);
			if($row2=mysql_fetch_array($sql3))
			{
				$dni_garante=$row2["dni"];
			}
		?>
		<tr>
			<td class="th_2" >&nbsp;<?php echo $row["id_prestamo"];?></td>
			<td class="th_2" >&nbsp;<?php echo $row["fecha"];?></td>
			<td class="th_2" >&nbsp;<?php echo $dni=$row["dni"];?></td>
			<td class="th_2" >&nbsp;<?php echo number_format($row["cant_pagar_total"],2); 	?></td>
			<td class="th_2" >&nbsp;<?php echo $row["num_letras"];?></td>
		    <td class="th_2" >&nbsp;<?php echo contar_letras($row["id_prestamo"],$link);?></td>
	        <td width="46" class="th_2">
				<div align="center">
					<a href="prestamo_busc_menu_ver.php?dni=<? echo $dni ?>&dni_garante=<? echo $dni_garante ?>&id_prest=<? echo $row["id_prestamo"];  ?>" onClick="return hs.htmlExpand(this, { objectType: 'iframe' } )" >
						<img src="../imagen/b_select.png" width="16" height="16">
					</a>
				</div>			
			</td>
		    <td width="45" class="th_2">
				<div align="center">
<a href="prestamos_pdf.php?dni=<? echo $dni ?>&dni_garante=<? echo $dni_garante ?>&id_prest=<? echo $row["id_prestamo"];  ?>">
				<img src="../imagen/acrobat.gif" width="16" height="16" />			</a>		</div>			</td>
		    <td width="48" class="th_2">
				<div align="center">
					<a HREF="javascript:eli_x_prest2('marco5','prestamo_busc_dni2.php','eli','<? echo $row["id_prestamo"] ?>','<? echo $dni ?>');" onClick="return confirmLink2(this, 'Eluminar el Item: [<?php echo $row3[0] ?>]\n' )">
						<img src="../imagen/publish_x.png" width="16" height="16" border="0" align="absmiddle" title=" Eliminar [<?php echo $row3[0] ?>] "/>
					</a>						
				</div>			
			</td>
		</tr>
		<?php 
		}
		?>
	</table> 
	</div> 
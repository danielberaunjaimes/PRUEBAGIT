<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
	<!--
		.Estilo1 
		{
			color: #FF0000;
			font-weight: bold;
		}
	-->
</style>
<table width="540" height="33" border="0" cellpadding="0" cellspacing="0" class="tabla1">
	<tr>
    	<td width="258" height="23" bgcolor="#EDEDED"><strong>&nbsp;Registro de nuevo personal Administrativo </strong></td>
   	  <td width="68" bgcolor="#EDEDED"><p>&nbsp;</p></td>
    	<td width="57" bgcolor="#EDEDED"></td>
    	<td width="155" align="center" valign="middle" bgcolor="#EDEDED">
			<div align="center">
    			<input name="Submit" type="button" class="texto" value="Registrar Administrativo" onclick="reg_personal_administrativo()"/>
    		</div>
	  </td>
  	</tr>
</table>
<br />
<div id="socios">
<div class="marco">
  <div class="titulo">
    <p>TOTAL DEL PERSONAL ADMINISTRATIVO </p>
  </div>
  <div class="izq">
    <table width="801" border="0" cellpadding="0" >
      <tr>
        <td width="73" class="th_1">&nbsp;DNI </td>
        <td width="73" class="th_1">Fecha Reg </td>
        <td width="151" class="th_1">&nbsp;Apellidos</td>
        <td width="147" class="th_1">&nbsp;Nombres</td>
        <td width="105" class="th_1">&nbsp;Dependencia</td>
        <td width="126" class="th_1">&nbsp;Email</td>
        <td colspan="60" class="th_1">&nbsp;Opcion</td>
      </tr>
      <?php
				$q = "SELECT * FROM personal ORDER BY dniper";
		    	$data->ExecuteRowFetcher($q);
		    	while($data->Row != 0)
				{
			?>
      <tr>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="center"> <?php echo ($data->Row['dniper']) ?> </div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="center"> <?php echo ($data->Row['fecharper']) ?> </div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="center"> <?php echo ($data->Row['apellidosper']) ?> </div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="center"> <?php echo ($data->Row['nombresper']) ?> </div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="center"> <?php echo ($data->Row['dependenciaper']) ?> </div></td>
        <td style=" border-bottom:solid 0px #000000;" class="th_2"><div align="center"> <?php echo ($data->Row['emailper']) ?> </div></td>
        <td class="th_2" width="26">
			<a href="personal_administrativo_pdf.php?promo=<?php echo $data->Row['dniper']; ?>"> 
				<img src="../imagenes/acrobat.gif" width="16" height="16" border="0" /> 
			</a> 
		</td>
        <td class="th_2" width="26">
			<a href="ver_personal_administrativo.php?promo=<?php echo $data->Row['dniper'];?>" onclick="return hs.htmlExpand(this,{objectType: 'iframe'})"> 
				<img src="../imagenes/b_select.png" width="16" height="16" border="0" /> 
			</a> 
		</td>
        <td class="th_2" width="26">
			<a href="javascript:startPop('mod_reg_personal_administrativo.php?promo=<?php echo $data->Row['dniper']; ?>','610','335','320','190');"> 
				<img src="../imagenes/b_usredit.png" width="16" height="16" border="0" /> 
			</a> 
		</td>
        <td class="th_2" width="26">
			<a href="reg_personal_docente_del.php?promo=<?php echo $data->Row['dniper']; ?>" onclick="return confirm('Esta seguro de eliminar al personal')"> 
				<img src="../imagenes/b_usrdrop.png" width="16" height="16" border="0" /> 
			</a> 
		</td>
      </tr>
      <?php
					$data->FetchRow();
				}			
			?>
    </table>
  </div>
</div>

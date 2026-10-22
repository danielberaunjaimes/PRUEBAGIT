<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
<form name="f1" id="f1" action="personal_control_tarjeta.php">
	<table width="566" border="0" cellpadding="0" cellspacing="0" bgcolor="#D4D0C8" class="tabla1">
  	<!--DWLayoutTable-->
  		<tr>
    		<td width="21" height="18">&nbsp;</td>
    		<td width="517">&nbsp;</td>
    		<td width="26">&nbsp;</td>
  		</tr>
  		<tr>
    		<td height="39">&nbsp;</td>
    		<td valign="top">
				<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tabla1">
    	  		<!--DWLayoutTable-->
      				<tr>
        				<td width="15" height="37" valign="top" bgcolor="#EBEAE7"><!--DWLayoutEmptyCell-->&nbsp;</td>
          				<td width="111" valign="middle" bgcolor="#EBEAE7">N&ordm; Tarjeta : </td>
          				<td width="232" valign="middle" bgcolor="#EBEAE7">
							<input name="tarjeta" type="text" class="texto" id="tarjeta" size="30" maxlength="8"  >
							<input name="a" type="hidden" id="a" value="8" />
						</td>
          				<td width="157" valign="middle" bgcolor="#EBEAE7">
							<div align="center">
            					<input type="submit" name="Submit" value="Control Tarjeta" onClick="enviarY('marco1','personal_control_tarjeta.php')" >
          					</div>
						</td>
          			</tr>
    			</table>
			</td>
    		<td>&nbsp;</td>
  		</tr>
  		<tr>
    		<td height="22"></td>
    		<td></td>
    		<td></td>
  		</tr>
	</table>
</form>
<br/>
<div class="marco1" id="marco1">
</div>
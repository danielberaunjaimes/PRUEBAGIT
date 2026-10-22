<?php 
function calen_mes($mes)
{
	switch ($mes):
	case "01": return "ENERO";break;
	case "02": return "FEBRERO";break;
	case "03": return "MARZO";break;
	case "04": return "ABRIL";break;
	case "05": return "MAYO";break;
	case "06": return "JUNIO";break;
	case "07": return "JULIO";break;
	case "08": return "AGOSTO";break;
	case "09": return "SEPTIEMBRE";break;
	case "10": return "OCTUBRE";break;
	case "11": return "NOVIEMBRE";break;
	case "12": return "DICIEMBRE";break;
	endswitch;
}
function codigo($recibe)
{	
	$anho= date("Y");
	$separador2=explode("-",$recibe);
	$num_otro=$separador2[0]+1;
	$num_ok=str_pad($num_otro, 4, "0", STR_PAD_LEFT);
	$cod=$num_ok."-".$anho;
	return ($cod);
}
?>
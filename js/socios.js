// JavaScript Document
function ing_socio(div,pagina)
{
			campos = Form.serialize('f1');
			var url = pagina;
			var miAleatorio = parseInt(Math.random()*99999999);
			var op;
   			var pars = campos+'&miAleatorio='+miAleatorio;
    		var target = div;
    		var miAjax = new Ajax.Updater(target, url, {method: 'get', parameters: pars});
}
function activo_socio(div,pagina,op)
{
			var url = pagina;
			var miAleatorio = parseInt(Math.random()*99999999);
			var op;
   			var pars = 'miAleatorio='+miAleatorio+'&op='+op;
    		var target = div;
    		var miAjax = new Ajax.Updater(target, url, {method: 'get', parameters: pars});
			
}

function reporte_aportes(div,pagina)
{
			campos = Form.serialize('f1');
			var url = pagina;
			var miAleatorio = parseInt(Math.random()*99999999);
			var op;
   			var pars = campos+'&miAleatorio='+miAleatorio;
    		var target = div;
    		var miAjax = new Ajax.Updater(target, url, {method: 'get', parameters: pars});	
}
function reporte_aportes2(div,pagina)
{
			campos = Form.serialize('f2');
			var url = pagina;
			var miAleatorio = parseInt(Math.random()*99999999);
			var op;
   			var pars = campos+'&miAleatorio='+miAleatorio;
    		var target = div;
    		var miAjax = new Ajax.Updater(target, url, {method: 'get', parameters: pars});	
}

function ver_prestamo(div,pagina)
{
		var band=0;
		if($F('dni')=='')
			band=1;
			
		switch(band)
		{
			case 1: alert("Seleccionar DNI del Socio");break
			default: 
			campos = Form.serialize('f1');
			var url = pagina;
			var miAleatorio = parseInt(Math.random()*99999999);
			var op;
   			var pars = campos+'&miAleatorio='+miAleatorio;
    		var target = div;
    		var miAjax = new Ajax.Updater(target, url, {method: 'get', parameters: pars});	
		
			break;
		}
}
function reg_prestamo(div,pagina)
{
			var band=0;
		if($F('dni')=='')
			band=1;
		else
			if($F('dni_socio')==$F('dni'))
			band=2;
			else
				if($F('cant_prest')=='')
				band=3;
				else
					if($F('interes')=='')
					band=4;
					else
						if($F('num_letras')=='')
						band=5;

			
		switch(band)
		{
			case 1: alert("Seleccionar DNI del Garante");break;
			case 2: alert("DNI del Garante tiene que ser Diferente al DNI del SOCIO");break;
			case 3: alert("Ingresar Cantidad de prestamo");break;
			case 4: alert("Ingresar Interes de prestamo");break;
			case 5: alert("Ingresar Numero de Letras");break;
			default:
				campos = Form.serialize('f1');
				var url = pagina;
				var miAleatorio = parseInt(Math.random()*99999999);
				var op;
   				var pars = campos+'&miAleatorio='+miAleatorio;
    			var target = div;
    			var miAjax = new Ajax.Updater(target, url, {method: 'get', parameters: pars});
			break;
		}
}
function cal_prestamo()
{
	if($F('cant_prest')!="")
	{
		var cant_prest = parseFloat($F('cant_prest'));
		var interes = parseFloat($F('interes'));
		document.f1.total_pagar.value = cant_prest+(cant_prest*(interes/100));
	}
}
function cal_letras()
{
	if($F('num_letras')!="")
	{
		var cant_prest = parseFloat($F('cant_prest'));
		var interes = parseFloat($F('interes'));
		var num_letras = parseFloat($F('num_letras'));
		document.f1.total_letras.value = (cant_prest+(cant_prest*(interes/100)))/num_letras;
	}
	
}
function prestamo_eli(div,pagina)
{
				campos = Form.serialize('f2');
				//alert(campos);
				var url = pagina;
				var miAleatorio = parseInt(Math.random()*99999999);
				var op;
   				var pars = campos+'&miAleatorio='+miAleatorio;
    			var target = div;
    			var miAjax = new Ajax.Updater(target, url, {method: 'get', parameters: pars});
}
function letras_prest(div,pagina)
{
				campos = Form.serialize('f1');
				//alert(campos);
				if($F('cod_prestamo')!='')
				{
					var url = pagina;
					var miAleatorio = parseInt(Math.random()*99999999);
					var op;
   					var pars = campos+'&miAleatorio='+miAleatorio;
    				var target = div;
    				var miAjax = new Ajax.Updater(target, url, {method: 'get', parameters: pars});
				}
}
function letra_insert(div,pagina)
{

				if($F('num_letras')!=$F('letras_pagadas'))
				{
					campos = Form.serialize('f1');
					//alert(campos);
					var url = pagina;
					var miAleatorio = parseInt(Math.random()*99999999);
					var op;
   					var pars = campos+'&miAleatorio='+miAleatorio;
    				var target = div;
    				var miAjax = new Ajax.Updater(target, url, {method: 'get', parameters: pars});
				}
				else
				{
					alert("La Deuda del Prestamo esta Cancelada...");	
				}
}
function letras_eli(div,pagina,op,id_prest,id_letra,t_x_letra,letra_ins)
{
		campos = Form.serialize('f1');
				//alert(campos);
				var url = pagina;
				var miAleatorio = parseInt(Math.random()*99999999);
				var op;
 var pars = 'miAleatorio='+miAleatorio+'&op='+op+'&id_prestamo='+id_prest+'&id_letra='+id_letra+'&total_x_letra='+t_x_letra+'&letra_ins='+letra_ins;
				//alert(pars);
    			var target = div;
    			var miAjax = new Ajax.Updater(target, url, {method: 'get', parameters: pars});
}
function letras_eli2(div,pagina,op,id_prest,id_letra,dni)
{
						//alert(campos);
				var url = pagina;
				var miAleatorio = parseInt(Math.random()*99999999);
				var op;
				var pars = 'miAleatorio='+miAleatorio+'&op='+op+'&id_prestamo='+id_prest+'&id_letra='+id_letra+'&dni='+dni;
				alert(pars);
    			var target = div;
    			var miAjax = new Ajax.Updater(target, url, {method: 'get', parameters: pars});
}
function junta_insertar()
{
	
	if( $F('dni_pres')!="" && $F('dni_pres')!="" && $F('dni_tes')!="" && $F('dni_vice')!="" && $F('dni_vocal_1')!="" && $F('dni_vocal_2')!="" )
	{
		if( ($F('dni_pres')!=$F('dni_secret')) && ($F('dni_pres')!=$F('dni_tes')) )
		{
			if( ($F('dni_vice')!=$F('dni_vocal_1')) && ($F('dni_vocal_1')!=$F('dni_vocal_2')) )
			{	
				document.f1.submit();
			}
			else
			{
				alert("Los Datos de los Socios no se Deben Duplicar");	
			}
		}
		else
		{
			alert("Los Datos de los Socios no se Deben Duplicar");
		}
	}
	else
	{
		alert("Uno de Los Datos de los Socios estan Vacios");
	}
}
function enviar(div,pagina)
{
			var url = pagina;
			var miAleatorio = parseInt(Math.random()*99999999);
			var op;
   			var pars = 'miAleatorio='+miAleatorio;
    		var target = div;
			var miAjax = new Ajax.Updater(target, url, {method: 'get', parameters: pars});
}
function enviar2(div,pagina,fecha)
{
			var url = pagina;
			var miAleatorio = parseInt(Math.random()*99999999);
			var op;
   			var pars = 'miAleatorio='+miAleatorio+'&fecha='+fecha;
    		var target = div;
			var miAjax = new Ajax.Updater(target, url, {method: 'get', parameters: pars});
}

function enviarX(div,pagina)
{
					campos = Form.serialize('f1');
					//alert(campos);
					var url = pagina;
					var miAleatorio = parseInt(Math.random()*99999999);
					var op;
   					var pars = campos+'&miAleatorio='+miAleatorio;
    				var target = div;
    				var miAjax = new Ajax.Updater(target, url, {method: 'get', parameters: pars});
}			
function enviarY(div,pagina)
{
			
			if( $F('dni')!="")
			{
				campos = Form.serialize('f1');
					//alert(campos);
					var url = pagina;
					var miAleatorio = parseInt(Math.random()*99999999);
					var op;
   					var pars = campos+'&miAleatorio='+miAleatorio;
    				var target = div;
    			var miAjax = new Ajax.Updater(target, url, {method: 'get', parameters: pars});
			}
			else
			{
				alert("Ingresar DNI");
			}
			
					
}	
function eli_x_prest(div,pagina,op,cod,f1,f2)
{
					//alert(pagina);
					//alert(campos);
					var url = pagina;
					var miAleatorio = parseInt(Math.random()*99999999);
					var op;
   					var pars = 'miAleatorio='+miAleatorio+'&op='+op+'&id_prestamo='+cod+'&fecha='+f1+'&fecha2='+f2;
    				var target = div;
					/*alert(pars);*/
    				var miAjax = new Ajax.Updater(target, url, {method: 'get', parameters: pars});
}	
function eli_x_prest2(div,pagina,op,cod,dni)
{
					//alert(pagina);
					//alert(campos);
					var url = pagina;
					var miAleatorio = parseInt(Math.random()*99999999);
					var op;
   					var pars = 'miAleatorio='+miAleatorio+'&op='+op+'&id_prestamo='+cod+'&dni='+dni;
    				var target = div;
					/*alert(pars);*/
    				var miAjax = new Ajax.Updater(target, url, {method: 'get', parameters: pars});
}	
function eli_letras(div,pagina,dni,dni_garante,id_prestamo)
{
				var url = pagina;
				var miAleatorio = parseInt(Math.random()*99999999);
				var op;
   				var pars = 'miAleatorio='+miAleatorio+'&dni='+dni+'&dni_garante='+dni_garante+'&id_prestamo='+id_prestamo;
    			var target = div;
				alert(pars);
    			var miAjax = new Ajax.Updater(target, url, {method: 'get', parameters: pars});
}
function enviar_c(div,pagina)
{
			if($F('cantidad')=="")
			{
				alert("Iingresar Cantidad Inicial");
			}
			else
			{
				campos = Form.serialize('f1');
					//alert(campos);
					var url = pagina;
					var miAleatorio = parseInt(Math.random()*99999999);
					var op;
   					var pars = campos+'&miAleatorio='+miAleatorio;
    				var target = div;
    				var miAjax = new Ajax.Updater(target, url, {method: 'get', parameters: pars});	
			}
			
			
}
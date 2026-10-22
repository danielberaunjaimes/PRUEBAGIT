<html> 
<head> 
<title>Ajax Simple</title> 
<script src="jquery-1.3.2.min.js" type="text/javascript"></script> 
<script> 
$(document).ready(function(){  
      $("#cargando").css("display", "inline"); 
      $("#destino").load("pagina-lenta.php", function(){ 
         $("#cargando").css("display", "none"); 
      }); 
  
}) 
</script> 
</head> 
<body> 
<br> 
<br> 
<div id="cargando" style="display:none; color: green;"><img src="ajax-loader.gif"></div> 
<br> 
<div id="destino"></div> 
<br><br><br><br> 
Este es el final de la web 
</body> 
</html>
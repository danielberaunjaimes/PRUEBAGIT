<?php
	require('font/fpdf.php');
	include("class/class.php"); 
	$promo = $_GET['promo'];
	//require("../font/fpdf.php");
	//include("../utiles/config.php");
	//include("../utiles/mysqldatabase.php");
	class PDF extends FPDF
	{
		//Cabecera de página
		function Header()
		{
		    //Logo
		    //Arial bold 15
		    $this->SetFont('Arial','B',19);
		    //Movernos a la derecha
		    $this->Ln(20);
		}
		//Pie de página
		function Footer()
		{
    		//Posición: a 1,5 cm del final
    		$this->SetY(-15);
    		//Arial italic 8
    		$this->SetFont('Arial','I',8);
    		//Número de página
    		$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
		}
	}
	//Creación del objeto de la clase heredada
	$pdf=new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pro = new DB_mysql;
	$link = $pro->conectar();
	//$data = new MySqlDatabase(DATASERVER, DATACATALOG, USERNAME, USERPWD);
	//$data->Connect();
	//$q = "SELECT * FROM alumno  WHERE id = $promo";
	//$sql=mysql_query("SELECT * FROM alumno  WHERE id = $promo", $link);
	$sql=mysql_query("SELECT * FROM personal WHERE id = $promo", $link);
	while($row=mysql_fetch_array($sql))
	{
	//$data->ExecuteQuery($q);
	//if($data->Row = $q)
	//{
		$id = $row["id"];
		$tipo=$row['tipo'];
		$fecha=$row['fecha'];
		$apellidos=$row['apellidos'];
		$nombres=$row['nombres'];
		$direccion=$row['direccion'];
		$dni = $row['dni'];
		$ruc = $row['ruc'];
		$lug_nac = $row['lug_nac'];
		$formacion = $row['formacion'];
		$profesion = $row['profesion'];
		$funcion = $row['funcion'];	
		$procedencia = $row['procedencia'];
		$genero = $row['genero'];
		$telefono=$row['telefono'];
		$email=$row['email'];
		$nota = $row['nota'];
		$usuario=$row['usuario'];
		$clave=$row['clave'];
		$apellidos = strtoupper($apellidos);
		$nombres = strtoupper($nombres);
		$email = strtolower($email);
	}
 	/* $cod_obra="0001-2008";
	$cod_orden="ORD-00003-2008";   */
	//Datos de la Obra
	$pdf->Image('../imagenes/unas.jpg',10,12);
	$pdf->SetFont('Arial','B',17);
	$pdf->Cell(0,0,"CERTIFICADO DE TRABAJO                                 ",0,0,0);
	$pdf->Ln(35);
	$pdf->SetFont('Arial','',10);
	$pdf->SetFillColor(200,220,225);
	$pdf->Ln();
	
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,0,"Tingo Maria, $fecha",0,0);
	$pdf->Ln(25);
		
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,0,"A QUIEN CONCIERNA:",0,0);
	$pdf->Ln(18);
	$pdf->Cell(0,0,"Por este medio informamos que el Sr(a). $apellidos, $nombres con Documento Nacional Identidad",0,0);
	$pdf->Ln(8);
	$pdf->Cell(0,0,"Numero $dni labora en nuestra empresa del $fecha hasta la fecha.",0,0);
	$pdf->Ln(8);
	$pdf->Cell(0,0,"Durante  ese  período el Sr(a). $apellidos, $nombres  se desempeñó correctamente en el area de ",0,0);
	$pdf->Ln(8);
	$pdf->Cell(0,0,"$funcion demostrando, en todo momento, eficiencia, responsabilidad y puntualidad ",0,0);
	$pdf->Ln(8);
	$pdf->Cell(0,0,"en la realización de sus funciones.",0,0);
	$pdf->Ln(35);
	$pdf->Cell(0,0,"Atentamente,",0,0);
	$pdf->Ln(40);
	$pdf->Cell(0,0,"Econ. ESTELA ZEGARRA ALIAGA",0,0);
	$pdf->Ln(3);
	$pdf->Cell(0,0,"-----------------------------------------------",0,0);
	$pdf->Ln(3);
	$pdf->Cell(0,0,"   Gerente de Recursos Humanos",0,0);
	$pdf->Ln(20);
	
		//$pdf->Ln(13);
	
	//Fin Programa Sub Programa
	$pdf->Output("ORDEN_COMPRA-$cod_orden.pdf","D");
	//$pdf->Output()
//}
?> 
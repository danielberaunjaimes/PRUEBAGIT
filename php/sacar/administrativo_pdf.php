<?php
	require('font/fpdf.php');
	include("class/class.php"); 
	$promo = $_GET['promo'];
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
	$sql=mysql_query("SELECT * FROM administrativo WHERE idadm = $promo", $link);
	while($row=mysql_fetch_array($sql))
	{
		$idadm=$row['idadm'];
		$fecharadm=$row['fecharadm'];
		$nomadm=$row['nomadm'];
		$resolucionadm=$row['resolucionadm'];
		$nomadm = strtoupper($nomadm);
		$resolucionadm = strtoupper($resolucionadm);
	}
	
	$pdf->Image('../imagenes/unas.jpg',10,12);
	$pdf->SetFont('Arial','B',17);
	$pdf->Cell(0,0,"RECURSOS HUMANOS - ADMINISTRATIVO",0,0,0);
	$pdf->Ln(25);
	$pdf->SetFont('Arial','',10);
	$pdf->SetFillColor(200,220,225);
	$pdf->Ln();
	
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,5,"CODIGO",1,0,'L',1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(60,5,"$idadm",1,0,'L',0);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,5,"FECHA DE REGISTRO",1,0,'L',1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,5,"$fecharadm",1,0,'L',0);
	$pdf->Ln();
	
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,5,"NOMBRE OFICINA",1,0,'L',1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,5,"$nomadm",1,0,'L',0);
	$pdf->Ln();
	
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,5,"RESOLUCION",1,0,'L',1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,5,"$resolucionadm",1,0,'L',0);
	$pdf->Ln();
	
	$sql=mysql_query("SELECT administrativo.idadm, area.idarea, area.nomarea, area.resolucionarea FROM administrativo INNER JOIN area ON administrativo.idadm = area.idadm WHERE administrativo.idadm = $promo", $link);
	while($row=mysql_fetch_array($sql))
	{
		$nomarea=$row['nomarea'];
		$resolucionarea=$row['resolucionarea'];
		$nomarea = strtoupper($nomarea);
		$resolucionarea = strtoupper($resolucionarea);
	
	
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,5,"DEPARTAMENTO",1,0,'L',1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(60,5,"$nomarea",1,0,'L',0);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,5,"RESOLUCION",1,0,'L',1);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,5,"$resolucionarea",1,0,'L',0);
	$pdf->Ln();
	
	}
	
	//Fin Programa Sub Programa
	$pdf->Output("ORDEN_COMPRA-$cod_orden.pdf","D");
	//$pdf->Output()
//}
?> 
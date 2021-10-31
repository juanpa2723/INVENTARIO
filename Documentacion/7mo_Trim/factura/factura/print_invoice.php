<?php
session_start();
include 'Invoice.php';
$invoice = new Invoice();
$invoice->checkLoggedIn();
if(!empty($_GET['invoice_id']) && $_GET['invoice_id']) {
	echo $_GET['invoice_id'];
	$invoiceValues = $invoice->getInvoice($_GET['invoice_id']);		
	$invoiceItems = $invoice->getInvoiceItems($_GET['invoice_id']);		
}
$invoiceDate = date("d/M/Y, H:i:s", strtotime($invoiceValues['fecha_creacion']));
$output = '';
$output .= '<table width="100%" border="1" cellpadding="5" cellspacing="0">
	<tr>
	<td colspan="2" align="center" style="font-size:18px"><b>FACTURA</b></td>
	</tr>
	<tr>
	<td colspan="2">
	<table width="100%" cellpadding="5">
	<tr>
	<td width="65%">
	Para,<br />
	<b>RECEPTOR (FACTURA A)</b><br />
	Nombres : '.$invoiceValues['nombre_empresa'].'<br /> 
	Dirección de facturación : '.$invoiceValues['direccion_factura'].'<br />
	</td>
	<td width="35%">         
	Factura No. : '.$invoiceValues['id_factura'].'<br />
	Factura Fecha : '.$invoiceDate.'<br />
	</td>
	</tr>
	</table>
	<br />
	<table width="100%" border="1" cellpadding="5" cellspacing="0">
	<tr>
	<th align="left">Sr No.</th>
	<th align="left">Codigo</th>
	<th align="left">Nombre Producto</th>
	<th align="left">Cantidad</th>
	<th align="left">Precio</th>
	<th align="left">Actual Amt.</th> 
	</tr>';
$count = 0;   
foreach($invoiceItems as $invoiceItem){
	$count++;
	$output .= '
	<tr>
	<td align="left">'.$count.'</td>
	<td align="left">'.$invoiceItem["codigo_producto"].'</td>
	<td align="left">'.$invoiceItem["producto"].'</td>
	<td align="left">'.$invoiceItem["cantidad"].'</td>
	<td align="left">'.$invoiceItem["precio"].'</td>
	<td align="left">'.$invoiceItem["total_producto"].'</td>   
	</tr>';
}
$output .= '
	<tr>
	<td align="right" colspan="5"><b>Sub Total</b></td>
	<td align="left"><b>'.$invoiceValues['subtotal'].'</b></td>
	</tr>
	<tr>
	<td align="right" colspan="5"><b>Tasa Impuesto :</b></td>
	<td align="left">'.$invoiceValues['tasa_impuesto'].'</td>
	</tr>
	<tr>
	<td align="right" colspan="5">Monto Tasa: </td>
	<td align="left">'.$invoiceValues['monto_impuesto'].'</td>
	</tr>
	<tr>
	<td align="right" colspan="5">Total: </td>
	<td align="left">'.$invoiceValues['total'].'</td>
	</tr>
	<tr>
	<td align="right" colspan="5">Monto Pagado:</td>
	<td align="left">'.$invoiceValues['cantidad_pagada'].'</td>
	</tr>
	<tr>
	<td align="right" colspan="5"><b>Monto adeudado:</b></td>
	<td align="left">'.$invoiceValues['cantidad_debida'].'</td>
	</tr>';
$output .= '
	</table>
	</td>
	</tr>
	</table>';
// create pdf of invoice	
$invoiceFileName = 'Factura'.$invoiceValues['id_factura'].'.pdf';
require_once 'dompdf/src/Autoloader.php';
Dompdf\Autoloader::register();
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$dompdf->loadHtml(html_entity_decode($output));
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream($invoiceFileName, array("Attachment" => false));
?>   
   
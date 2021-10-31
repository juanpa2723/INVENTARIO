<?php 
session_start();
include 'Invoice.php';
$invoice = new Invoice();
$invoice->checkLoggedIn();
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link href="css/style.css" rel="stylesheet">
</head>

<body>
<div class="container">		
<h2 class="title">Factura electronica</h2>

<ul class="nav navbar-nav">
<li class="dropdown">
	<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Factura
	<span class="caret"></span></button>
	<ul class="dropdown-menu">
		<li><a href="invoice_list.php">Lista de Facturas</a></li>
		<li><a href="create_invoice.php">Crear Factura</a></li>				  
	</ul>
</li>

<?php 
if($_SESSION['userid']) { ?>
	<li class="dropdown">
		<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Conectado: <?php echo $_SESSION['user']; ?></button>
	</li>
<?php } ?>
</ul>
<br><br><br><br>

<table id="data-table" class="table table-condensed table-striped">
<thead>
  <tr>
    <th width="7%">Fac. No.</th>
    <th width="15%">Fecha Creación</th>
    <th width="35%">Cliente</th>
    <th width="15%">Fatura Total</th>
    <th width="3%"></th>
    <th width="3%"></th>
    <th width="3%"></th>
  </tr>
</thead>
<?php		
$invoiceList = $invoice->getInvoiceList();
foreach($invoiceList as $invoiceDetails){
    $invoiceDate = date("d/M/Y, H:i:s", strtotime($invoiceDetails["fecha_creacion"]));
    echo '
      <tr>
        <td>'.$invoiceDetails["id_factura"].'</td>
        <td>'.$invoiceDate.'</td>
        <td>'.$invoiceDetails["nombre_empresa"].'</td>
        <td>'.$invoiceDetails["total"].'</td>
        <td><a href="print_invoice.php?invoice_id='.$invoiceDetails["id_factura"].'" title="Imprimir Factura"><div class="btn btn-primary"><span class="glyphicon glyphicon-print"></span></div></a></td>
        <td><a href="edit_invoice.php?update_id='.$invoiceDetails["id_factura"].'"  title="Editar Factura"><div class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></div></a></td>
        <td><a href="#" id="'.$invoiceDetails["id_factura"].'" class="deleteInvoice"  title="Borrar Factura"><div class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></div></a></td>
      </tr>
    ';
}       
?>
</table>	
</div>	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/invoice.js"></script>

</body>
</html>

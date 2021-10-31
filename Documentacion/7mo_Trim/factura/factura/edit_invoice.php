<?php 
session_start();
include 'Invoice.php';
$invoice = new Invoice();
$invoice->checkLoggedIn();
if(!empty($_POST['companyName']) && $_POST['companyName'] && !empty($_POST['invoiceId']) && $_POST['invoiceId']) {	
	$invoice->updateInvoice($_POST);	
	header("Location:invoice_list.php");	
}
if(!empty($_GET['update_id']) && $_GET['update_id']) {
	$invoiceValues = $invoice->getInvoice($_GET['update_id']);		
	$invoiceItems = $invoice->getInvoiceItems($_GET['update_id']);		
}
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
<div class="container content-invoice">
    	<form action="" id="invoice-form" method="post" class="invoice-form" role="form" novalidate> 
	    	<div class="load-animate animated fadeInUp">
		    	<div class="row">
		    		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
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
		    		</div>		    		
		    	</div>

		      	<input id="currency" type="hidden" value="$">
		    	<div class="row">
		      		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		      			<h3>De,</h3>
						<?php echo $_SESSION['user']; ?><br>	
						<?php echo $_SESSION['direccion']; ?><br>	
						<?php echo $_SESSION['celular']; ?><br>
						<?php echo $_SESSION['email']; ?><br>		      						      									
		      		</div>      		
		      		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right">
		      			<h3>Para,</h3>
		      			<div class="form-group">
							<input value="<?php echo $invoiceValues['nombre_empresa']; ?>" type="text" class="form-control" name="companyName" id="companyName" placeholder="Nombre de Empresa" autocomplete="off">
						</div>
						<div class="form-group">
							<textarea class="form-control" rows="3" name="direccion" id="direccion" placeholder="Su Dirección"><?php echo $invoiceValues['direccion_factura']; ?></textarea>
						</div>
						
		      		</div>
		      	</div>
		      	<div class="row">
		      		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<table class="table table-bordered table-hover" id="invoiceItem">	
<tr>
    <th width="2%"><input id="checkAll" class="formcontrol" type="checkbox"></th>
<th width="15%">Prod. No</th>
<th width="38%">Nombre Producto</th>
<th width="15%">Cantidad</th>
<th width="15%">Precio</th>								
<th width="15%">Total</th>
</tr>
<?php 
$count = 0;
foreach($invoiceItems as $invoiceItem){
    $count++;
?>								
<tr>
    <td><input class="itemRow" type="checkbox"></td>
    <td><input type="text" value="<?php echo $invoiceItem["codigo_producto"]; ?>" name="productCode[]" id="productCode_<?php echo $count; ?>" class="form-control" autocomplete="off"></td>
    <td><input type="text" value="<?php echo $invoiceItem["producto"]; ?>" name="productName[]" id="productName_<?php echo $count; ?>" class="form-control" autocomplete="off"></td>			
    <td><input type="number" value="<?php echo $invoiceItem["cantidad"]; ?>" name="quantity[]" id="quantity_<?php echo $count; ?>" class="form-control quantity" autocomplete="off"></td>
    <td><input type="number" value="<?php echo $invoiceItem["precio"]; ?>" name="price[]" id="price_<?php echo $count; ?>" class="form-control price" autocomplete="off"></td>
    <td><input type="number" value="<?php echo $invoiceItem["total_producto"]; ?>" name="total[]" id="total_<?php echo $count; ?>" class="form-control total" autocomplete="off"></td>
    <input type="hidden" value="<?php echo $invoiceItem['id_orden_producto']; ?>" class="form-control" name="itemId[]">
</tr>	
<?php } ?>		
</table>
		      		</div>
		      	</div>
		      	<div class="row">
		      		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
		      			<button class="btn btn-danger delete" id="removeRows" type="button">- Borrar</button>
		      			<button class="btn btn-success" id="addRows" type="button">+ Agregar mas</button>
		      		</div>
		      	</div>
		      	<div class="row">	
		      		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
		      			<h3>Notas: </h3>
		      			<div class="form-group">
							<textarea class="form-control txt" rows="5" name="notas" id="notas" placeholder="Tus notas"><?php echo $invoiceValues['notas']; ?></textarea>
						</div>
						<br>
						<div class="form-group">
							<input type="hidden" value="<?php echo $_SESSION['userid']; ?>" class="form-control" name="userId">
							<input type="hidden" value="<?php echo $invoiceValues['id_factura']; ?>" class="form-control" name="invoiceId" id="invoiceId">
			      			<input data-loading-text="Updating Invoice..." type="submit" name="invoice_btn" value="Save Invoice" class="btn btn-success submit_btn invoice-save-btm">
			      		</div>
						
		      		</div>
		      		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<span class="form-inline">
							<div class="form-group">
								<label>Subtotal: &nbsp;</label>
								<div class="input-group">
									<div class="input-group-addon currency">$</div>
									<input value="<?php echo $invoiceValues['subtotal']; ?>" type="number" class="form-control" name="subTotal" id="subTotal" placeholder="Subtotal">
								</div>
							</div>
							<div class="form-group">
								<label>Tasa Impuesto: &nbsp;</label>
								<div class="input-group">
									<input value="<?php echo $invoiceValues['tasa_impuesto']; ?>" type="number" class="form-control" name="taxRate" id="taxRate" placeholder="Tax Rate">
									<div class="input-group-addon">%</div>
								</div>
							</div>
							<div class="form-group">
								<label>Monto Inpuesto: &nbsp;</label>
								<div class="input-group">
									<div class="input-group-addon currency">$</div>
									<input value="<?php echo $invoiceValues['monto_impuesto']; ?>" type="number" class="form-control" name="taxAmount" id="taxAmount" placeholder="Tax Amount">
								</div>
							</div>							
							<div class="form-group">
								<label>Total: &nbsp;</label>
								<div class="input-group">
									<div class="input-group-addon currency">$</div>
									<input value="<?php echo $invoiceValues['total']; ?>" type="number" class="form-control" name="totalAftertax" id="totalAftertax" placeholder="Total">
								</div>
							</div>
							<div class="form-group">
								<label>Cantidad pagada: &nbsp;</label>
								<div class="input-group">
									<div class="input-group-addon currency">$</div>
									<input value="<?php echo $invoiceValues['cantidad_pagada']; ?>" type="number" class="form-control" name="amountPaid" id="amountPaid" placeholder="Amount Paid">
								</div>
							</div>
							<div class="form-group">
								<label>Cantidad debida: &nbsp;</label>
								<div class="input-group">
									<div class="input-group-addon currency">$</div>
									<input value="<?php echo $invoiceValues['cantidad_debida']; ?>" type="number" class="form-control" name="amountDue" id="amountDue" placeholder="Amount Due">
								</div>
							</div>
						</span>
					</div>
		      	</div>
		      	<div class="clearfix"></div>		      	
	      	</div>
		</form>			
    </div>
</div>	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/invoice.js"></script>

</body>
</html>

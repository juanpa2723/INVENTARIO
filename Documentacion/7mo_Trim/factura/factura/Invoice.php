<?php
class Invoice{
	private $host  = 'localhost';
    private $user  = 'root';
    private $password   = "";
    private $database  = "factura";   
	private $invoiceUserTable = 'usuarios';	
    private $invoiceOrderTable = 'factura';
	private $invoiceOrderItemTable = 'factura_producto';
	private $dbConnect = false;
    public function __construct(){
        if(!$this->dbConnect){ 
            $conn = new mysqli($this->host, $this->user, $this->password, $this->database);
            if($conn->connect_error){
                die("Error failed to connect to MySQL: " . $conn->connect_error);
            }else{
                $this->dbConnect = $conn;
            }
        }
    }
	private function getData($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$data= array();
		while ($row = mysqli_fetch_assoc($result)) {
			$data[]=$row;            
		}
		return $data;
	}
	private function getNumRows($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$numRows = mysqli_num_rows($result);
		return $numRows;
	}
	public function loginUsers($email, $contraseña){
		$sqlQuery = "
			SELECT id, email, nombre, apellido, direccion, celular 
			FROM ".$this->invoiceUserTable." 
			WHERE email='".$email."' AND contraseña='".$contraseña."'";
        return  $this->getData($sqlQuery);
	}	
	public function checkLoggedIn(){
		if(!$_SESSION['userid']) {
			header("Location:index.php");
		}
	}		
	public function saveInvoice($POST) {		
		$sqlInsert = "
			INSERT INTO ".$this->invoiceOrderTable."(user_id, nombre_empresa, direccion_factura, subtotal, monto_impuesto, tasa_impuesto, total, cantidad_pagada, cantidad_debida, notas) 
			VALUES ('".$POST['userId']."', '".$POST['companyName']."', '".$POST['direccion']."', '".$POST['subTotal']."', '".$POST['taxAmount']."', '".$POST['taxRate']."', '".$POST['totalAftertax']."', '".$POST['amountPaid']."', '".$POST['amountDue']."', '".$POST['notas']."')";		
		mysqli_query($this->dbConnect, $sqlInsert);
		$lastInsertId = mysqli_insert_id($this->dbConnect);
		for ($i = 0; $i < count($POST['productCode']); $i++) {
			$sqlInsertItem = "
			INSERT INTO ".$this->invoiceOrderItemTable."(id_factura, codigo_producto, producto, cantidad, precio, total_producto) 
			VALUES ('".$lastInsertId."', '".$POST['productCode'][$i]."', '".$POST['productName'][$i]."', '".$POST['quantity'][$i]."', '".$POST['price'][$i]."', '".$POST['total'][$i]."')";			
			mysqli_query($this->dbConnect, $sqlInsertItem);
		}       	
	}	
	public function updateInvoice($POST) {
		if($POST['invoiceId']) {	
			$sqlInsert = "
				UPDATE ".$this->invoiceOrderTable." 
				SET nombre_empresa = '".$POST['companyName']."', direccion_factura= '".$POST['direccion']."', subtotal = '".$POST['subTotal']."', monto_impuesto = '".$POST['taxAmount']."', tasa_impuesto = '".$POST['taxRate']."', total = '".$POST['totalAftertax']."', cantidad_pagada = '".$POST['amountPaid']."', cantidad_debida = '".$POST['amountDue']."', notas = '".$POST['notas']."' 
				WHERE user_id = '".$POST['userId']."' AND id_factura = '".$POST['invoiceId']."'";		
			mysqli_query($this->dbConnect, $sqlInsert);	
		}		
		$this->deleteInvoiceItems($POST['invoiceId']);
		for ($i = 0; $i < count($POST['productCode']); $i++) {			
			$sqlInsertItem = "
				INSERT INTO ".$this->invoiceOrderItemTable."(id_factura, codigo_producto, producto, cantidad, precio, total_producto) 
				VALUES ('".$POST['invoiceId']."', '".$POST['productCode'][$i]."', '".$POST['productName'][$i]."', '".$POST['quantity'][$i]."', '".$POST['price'][$i]."', '".$POST['total'][$i]."')";			
			mysqli_query($this->dbConnect, $sqlInsertItem);			
		}       	
	}	
	public function getInvoiceList(){
		$sqlQuery = "
			SELECT * FROM ".$this->invoiceOrderTable." 
			WHERE user_id = '".$_SESSION['userid']."'";
		return  $this->getData($sqlQuery);
	}	
	public function getInvoice($invoiceId){
		$sqlQuery = "
			SELECT * FROM ".$this->invoiceOrderTable." 
			WHERE user_id = '".$_SESSION['userid']."' AND id_factura = '$invoiceId'";
		$result = mysqli_query($this->dbConnect, $sqlQuery);	
		$row = mysqli_fetch_assoc($result);
		return $row;
	}	
	public function getInvoiceItems($invoiceId){
		$sqlQuery = "
			SELECT * FROM ".$this->invoiceOrderItemTable." 
			WHERE id_factura = '$invoiceId'";
		return  $this->getData($sqlQuery);	
	}
	public function deleteInvoiceItems($invoiceId){
		$sqlQuery = "
			DELETE FROM ".$this->invoiceOrderItemTable." 
			WHERE id_factura = '".$invoiceId."'";
		mysqli_query($this->dbConnect, $sqlQuery);				
	}
	public function deleteInvoice($invoiceId){
		$sqlQuery = "
			DELETE FROM ".$this->invoiceOrderTable." 
			WHERE id_factura = '".$invoiceId."'";
		mysqli_query($this->dbConnect, $sqlQuery);	
		$this->deleteInvoiceItems($invoiceId);	
		return 1;
	}
}
?>
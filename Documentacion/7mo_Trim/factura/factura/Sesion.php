<?php 
session_start();
$loginError = '';
if (!empty($_POST['email']) && !empty($_POST['pwd'])) {
	include 'Invoice.php';
	$invoice = new Invoice();
	$user = $invoice->loginUsers($_POST['email'], $_POST['pwd']); 
	if(!empty($user)) {
		$_SESSION['user'] = $user[0]['nombre']."".$user[0]['apellido'];
		$_SESSION['userid'] = $user[0]['id'];
		$_SESSION['email'] = $user[0]['email'];		
		$_SESSION['direccion'] = $user[0]['direccion'];
		$_SESSION['celular'] = $user[0]['celular'];
		header("Location:invoice_list.php");
	} else {
		$loginError = "Invalid email or password!";
	}
}
?>
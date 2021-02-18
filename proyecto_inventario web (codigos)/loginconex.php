<?php
 
//una forma de conecatr el login

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname ="registro";


$conn = mysqli_connect($dbhost , $dbuser , $dbpass , $dbname);

if (!$conn) {
	die("no hay conexion; ".mysqli_conect_error());

}

$email = $_POST["txtemail"];
$pass = $_POST["txtpass"];

$query = mysqli_query($conn , "SELECT email , contraseña FROM usuario WHERE email = '".$email."' && contraseña = '".$pass."'");
$nr = mysqli_num_rows($query);

if ($nr == 1)
{
	header("location: pagina_principal.php");

    //echo "bienvenido";
}
elseif ($nr == 0)
 {
	header("location: index.php");

	//echo "no ingreso";
}

?>
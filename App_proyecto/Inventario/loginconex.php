<?php
 
 require 'conex.php';

$email = $_POST["txtemail"];
$pass = $_POST["txtpass"];

if ($email == "") 
 	echo'<script type="text/javascript">
                     alert("por favor complete todos los campos");
                     window.location.href="Controladores/Login_controlador.php";
                     </script>';
if ($pass == "") 
 	echo'<script type="text/javascript">
                     alert("por favor complete todos los campos");
                     window.location.href="Controladores/Login_controlador.php";
                     </script>';                     

$query = mysqli_query($conn , "SELECT email , contraseña FROM usuario WHERE email = '".$email."' && contraseña = '".$pass."'");
$nr = mysqli_num_rows($query);

if ($nr == 1)
{
	header("location: vistas/Pagina_principal/pagina_principal.php");

    //echo "bienvenido";
}
elseif ($nr == 0)
 {
	 echo'<script type="text/javascript">
                     alert("usuario o contraseña incorrecta");
                     window.location.href="Controladores/Login_controlador.php";
                     </script>';

	//echo "no ingreso";
}

?>
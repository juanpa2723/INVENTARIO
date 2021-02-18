<?php   
 
 include("../conex.php");

if (isset($_POST['register'])) {
if (strlen($_POST['name']) >= 1 && 
	strlen($_POST['email']) >= 1 &&
    strlen($_POST['contraseña']) >= 1)
 {
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$contraseña = trim($_POST['contraseña']);
	$fechareg = date("d/m/y");
		
	$consulta = "INSERT INTO usuario( nombre, email, contraseña, fecha_reg) VALUES ('$name','$email','$contraseña','$fechareg')";

	$resultado = mysqli_query($conexion,$consulta);
	if ($resultado) {
		
		header("location: ../index.php");}

}
		else{
	?>
  <script type="text/javascript">alert("error al ingresar ") </script>
	<?php
}
}

?>




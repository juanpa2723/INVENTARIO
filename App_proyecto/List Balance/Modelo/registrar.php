<?php
 
 require '../conex.php';

 if (isset($_POST['register'])) {
 	$errmsg = '';

 	$fullname = $_POST['name'];
 	$email = $_POST['email'];
 	$password = $_POST['contraseña'];
 	$fechareg = date("d/m/y");

 	if ($fullname == "") 
 	echo'<script type="text/javascript">
                     alert("por favor complete todos los campos");
                     window.location.href="../Controladores/Registro_controlador.php";
                     </script>';
 	if ($email == "") 
 		echo'<script type="text/javascript">
                     alert("por favor complete todos los campos");
                     window.location.href="../Controladores/Registro_controlador.php";
                     </script>';
 	if ($password == "") 
 		echo'<script type="text/javascript">
                     alert("por favor complete todos los campos");
                     window.location.href="../Controladores/Registro_controlador.php";
                     </script>';

 	if ($errmsg == '' ) {
 		try{
 			$stmt = $connect->Prepare('INSERT INTO usuario (nombre, email, contraseña, fecha_reg)VALUES(:fullname, :email, :password, :fechareg)');
 			$stmt->execute(array(
 				':fullname' => $fullname,
 				':email' => $email,
 				':password' => $password,
 				':fechareg' => $fechareg
 			));

 			 echo'<script type="text/javascript">
                     alert("registro exitoso");
                     window.location.href="../index.php";
                     </script>';
 			exit;
 		}
 		catch(PDOExeption $e){
 			echo $e->getmessage();
 		}
 	 }
 }

?>
<?php
 
 require '../conex.php';

 if (isset($_POST['login'])) {
 	$errmsg = '';

 	$email = $_POST['txtemail'];
 	$pass = $_POST['txtpass'];
 	
 	if ($email == "") 
 		echo'<script type="text/javascript">
                     alert("por favor complete todos los campos");
                     window.location.href="../Controladores/Login_controlador.php";
                     </script>';
 	if ($pass == "") 
 		echo'<script type="text/javascript">
                     alert("por favor complete todos los campos");
                     window.location.href="../Controladores/Login_controlador.php";
                     </script>';

 	if ($errmsg == '' ) {
 		try{
 			$stmt = $connect->Prepare('SELECT email, contraseña FROM usuario WHERE email = :email');
 			$stmt->execute(array(
 		
 				':email' => $email,
 			));

             $data = $stmt->fetch (PDO::FETCH_ASSOC);

             if($data ==false) {
                 $errMsg = "Correo $email no encontrado";
             }

             else {
                 if($pass == $data['contraseña']) {
                     $_SESSION ['email'] = $data['email'];
                     $_SESSION ['contraseña'] = $data['pass'];

                     header ("location: ../Vistas/Pagina_principal/pagina_principal.php");
                     exit;
                 }
                 else  
                 $errMsg ='contraseña incorrecta'; 

             }

         }
         catch(PDOExeption $e) {
            $errMsg =$e->getMessage();

         }
     }
}
?>

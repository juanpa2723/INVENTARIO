<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="login/estilos3.css">
	

</head>  

<body>

    <header class="header">
		<div class="container">
		<div class="btn-menu">   
		</div>

    <div class="logo">
	<img src="img/logo.png" width= "200"height= "200">
	</div>

        <nav class="menu">
        <a href="datos.php">Quienes somos</a> 
		<a href="datos.php">Acerca de</a>
		<a href="datos.php">Contactanos</a>
        <a href="datos.php">Terminos y condiciones</a>
        </nav>
        <br><br><br><br>
    <form action="loginconex.php" method="post" class="formulario">
    
    <h1>Login</h1><br>
     <div class="contenedor">
     
     
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input name="txtemail" type="text" placeholder="Correo Electronico">
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input name="txtpass" type="password" placeholder="Contraseña">
        
         </div><br>
        <button class="button" type="submit">INGRESAR</button>
         <p>Al registrarte, aceptas nuestros terminos y condiciones</p><br>
         <p>¿No tienes una cuenta?  <a class="link" href="login/registro.php">Registrate </a></p>
     </div>
    </form>
</body>
</html>
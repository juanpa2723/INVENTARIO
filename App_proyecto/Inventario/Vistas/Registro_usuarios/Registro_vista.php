<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title></title> 
<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
<link rel="stylesheet" href="../css/estilos_login.css">
	
</head>  

<body>
    <header class="header">
		<div class="container">
		<div class="btn-menu">   
		</div>

    <div class="logo">
	<img src="../img/logo3.png" width= "200"height= "200">
	</div>

  <nav class="navegacion">
			<ul class="menu">
				<li><a href="../index.php">Inicio</a></li>
				<li><a href="#">Nosotros</a></li>
        <li><a href="#">Acerca de</a></li>
        <li><a href="#">Contactos</a></li>
				<li><a href="#" class="entrar">Entrar</a>
					<ul class="submenu">
						<li><a href="../Controladores/Login_controlador.php">Iniciar sesion</a></li>
						<li><a href="#">Registrar</a></li>
					</ul>
				</li>
			</ul>
		</nav>
        <br><br><br><br><br>
            
    <form action="../registrar.php" method="post" class="formulario">
    
    <h1>Registrate</h1><br>
    <div class="contenedor">
     
         <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" name="name" placeholder="Nombre Completo">
         
         </div>
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" name="email" placeholder="Correo Electronico">
         
         </div>
         
         <div class="input-contenedor">
         <i class="fas fa-key icon"></i>
         <input type="password" name="contraseña" placeholder="Contraseña">
         
         </div><br>
         <input type="submit" name="register" value="REGISTRAR" class="button">
         
         <p><br>Al registrarte, aceptas nuestros<a href="terminos.php" class="terminos"> Terminos y condiciones.</a></p>

    </div>
    </form>

</body>
</html>

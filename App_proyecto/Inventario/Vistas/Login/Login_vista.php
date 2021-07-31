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
						<li><a href="#">Iniciar sesion</a></li>
						<li><a href="../Controladores/Registro_controlador.php">Registrar</a></li>
					</ul>
				</li>
			</ul>
		</nav>
        <br><br><br><br><br>

    <form action="../loginconex.php" method="post" class="formulario">
    
    <h1>Iniciar sesión</h1><br>
    <div class="contenedor">
     
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input name="txtemail" type="text" placeholder="Correo Electronico">
         
         </div>
         
         <div class="input-contenedor">
         <i class="fas fa-key icon"></i>
         <input name="txtpass" type="password" placeholder="Contraseña">
        
         </div><br>
         

         <p><br>¿No tienes una cuenta? Que estas esperando, ve y registrate</p>

    
    </form>
  <a href="../pagina_principal/pagina_principal.php"><button class="button" type="submit" name=".login">INGRESAR</button></a>
    </div>

</body>
</html>
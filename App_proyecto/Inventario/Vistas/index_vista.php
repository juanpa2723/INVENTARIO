<!DOCTYPE html>
<html lang="es">
<head>

  <title>ListBalance.com</title> 

  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
  <link rel="stylesheet" href="css/estilos_index.css">
  
</head>  

<body>

    <header class="header">
		<div class="container">
		<div class="btn-menu">   
		</div>

    <div class="logo">
	<img src="img/logo3.png" width= "200"height= "200">
	</div>
      <nav class="navegacion">
			<ul class="menu">
				<li><a href="#">Inicio</a></li>
				<li><a href="#">Nosotros</a></li>
        <li><a href="#">Acerca de</a></li>
        <li><a href="#">Contactos</a></li>
				<li><a href="#" class="entrar">Entrar</a>
					<ul class="submenu">
						<li><a href="Controladores/Login_controlador.php">Iniciar sesion</a></li>
						<li><a href="Controladores/Registro_controlador.php">Registrar</a></li>
					</ul>
				</li>
			</ul>
		</nav>
        </header><br><br><br><br><br><br><br>

		<div class="contenedor">
		<main class="contenido-principal">
			<img src="img/stock.jpg" alt="Dome of the German Bundestag" class="contenido-principal__imagen">
			<div class="contenido-principal__contenedor">
				<h1 class="contenido-principal__titulo">ListBalance.com</h1>
				<p class="contenido-principal__resumen">
					Somos un grupo de jovenes programadores pertenecientes al Servicio Nacional de aprendizaje (SENA).
					Realizamos actividades como analisis y el desarrollo de sistemas de la informacion.
				</p><br>
				<p class="contenido-principal__resumen">
					Nombre de los aprendices:<br>
					Jose Damian Cuscue<br>
					Juan Pablo Acosta<br>
					Karen Yulieth Gutierrez
				</p>
			</div>
		</main>

		<div class="carousel">
			<div class="carousel__contenedor">
				<button aria-label="Anterior" class="carousel__anterior">
					<i class="fas fa-chevron-left"></i>
				</button>

				<div class="carousel__lista">
					<div class="carousel__elemento">
						<img src="img/2.png" alt="Rock and Roll Hall of Fame">
						<p>Rock and Roll Hall of Fame</p>
					</div>
					<div class="carousel__elemento">
						<img src="img/3.png" alt="Constitution Square - Tower I">
						<p>Constitution Square - Tower I</p>
					</div>
					<div class="carousel__elemento">
						<img src="img/4.png" alt="Empire State Building">
						<p>Empire State Building</p>
					</div>
					<div class="carousel__elemento">
						<img src="img/5.png" alt="Harmony Tower">
						<p>Harmony Tower</p>
					</div>
	
					<div class="carousel__elemento">
						<img src="img/6.png" alt="Empire State Building">
						<p>Empire State Building</p>
					</div>
					<div class="carousel__elemento">
						<img src="img/7.png" alt="Harmony Tower">
						<p>Harmony Tower</p>
					</div>
					<div class="carousel__elemento">
						<img src="img/8.png" alt="Empire State Building">
						<p>Empire State Building</p>
					</div>
					<div class="carousel__elemento">
						<img src="img/9.png" alt="Harmony Tower">
						<p>Harmony Tower</p>
					</div>
				</div>

				<button aria-label="Siguiente" class="carousel__siguiente">
					<i class="fas fa-chevron-right"></i>
				</button>
			</div>

			<div role="tablist" class="carousel__indicadores"></div>
		</div>
	</div>

  <br><br><br>

  <footer>
  <div class="container-body">
  <div class="colum1">
	  <h1>Mas informacion de la compañia<h1>

	<p>
		Esta compañia esta garantizada para ofrecerte servicios varios, 
		como resultados precisos y a bajo costo
	</p>
  </div>

  <div class="colum2">
  <h1>Redes sociales<h1>

  <div class="row">
	  <img src="">
	  <label> Siguenos en facebook
  </div>

  <div class="row">
	  <img src="">
	  <label> Siguenos en youtube
  </div>

  <div class="row">
	  <img src="">
	  <label> Siguenos en instagram
  </div>
  </div>

  <div class="colum3">
  <h1>Informacion Contactos<h1>

  <div class="row2">
	  <img src="">
	  <label> Bogota,Colombia
  </div>

  <div class="row3">
	  <img src="">
	  <label> ¿Quiere saber mas?
  </div>
  </div>
  </div>

  <div class="container-footer">
	  <div class="copyright">
	  © 2021 Todos los derechos reservados | <a
	  href="">Proyecto ListBalance</a>
	  </div>

  <div class="information">
      <a href=""> Mas informacion     </a>   | 
	  <a href=""> Privacion y politica</a>   | 
	  <a href=""> Terminos y condiciones</a> 
  </div>
  </div>

  
  
  </footer>

	<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="js/app.js"></script>
    
</body>
</html>
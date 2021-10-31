<?php 
include 'Sesion.php';
?>

<!DOCTYPE html>
<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="stylesheet" href="css/estilos.css">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link href="css/style.css" rel="stylesheet">
<link href="css/login.css" rel="stylesheet">
</head>

<body>
<div class="row">	
<div class="col-xs-6">
  
<div class="heading">
		
</div>
<div class="login-form">
<form action="" method="post">
    <h2 class="text-center">Iniciar Sesión</h2>  
<div class="form-group">
<?php if ($loginError ) { ?>
<div class="alert alert-warning"><?php echo $loginError; ?></div>
<?php } ?>
</div>         
<div class="form-group">
    <input name="email" id="email" type="email" class="form-control" placeholder="Email address" autofocus required>
</div>
<div class="form-group">
    <input type="contraseña" class="form-control" name="pwd" placeholder="contraseña" required>
</div> 
<div class="form-group">
    <button type="submit" name="login" class="btn btn-primary" style="width: 100%;"> Acceder </button>
</div>
<div class="clearfix">
<label class="pull-left checkbox-inline"><input type="checkbox"> Recordarme</label>
</div>        
</form>
</div>   

</div>
<div class="col-xs-6">-</div>	
</div>		
</div>

<!-- Encabezado -->
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/aa.jpg" alt="First slide" style="width:1600px; height:550px;">
            <div class="carousel-caption">
            <h1>TIENDAS Y MICRONEGOCIOS</h1>
            <p>Al alcance de tu mano</p>
         </div>
         </div>

         <div class="carousel-item">
            <img class="d-block w-100" src="img/abc.jpg" alt="Second slide" style="width:1600px; height:550px;">
            <div class="carousel-caption">
            <h1>TIENDAS Y MICRONEGOCIOS</h1>
            <p>Al alcance de tu mano</p>
         </div>
         </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="img/iventario.jpg" alt="Third slide" style="width:1600px; height:550px;">
            <div class="carousel-caption">
            <h1>TIENDAS Y MICRONEGOCIOS</h1>
            <p>Al alcance de tu mano</p>
         </div>
         </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  </header><br>

  <!-- Seccion -->
  <section class="services contenedor" id="servicio">
    <h1 class="subtitulo">Nuestro servicio</h1>
    <div class="contenedor-servicio">
      <img src="img/nosotros.png" alt="" style="width:300px; height:300px;">
      <div class="checklist-servicio">
        <div class="service">
  
        <h3 id="nosotros" class="n-service">Nosotros</h3>
        <p class="text1"><br>
          Hola como estan todos,hola como estan todos,hola como estan todos,hola como estan todos
          hola como estan todos,hola como estan todos,hola como estan todos,hola como estan todos
          hola como estan todos,hola como estan todos,hola como estan todos,hola como estan todos
          Hola como estan todos,hola como estan todos,hola como estan todos,hola como estan todos
          hola como estan todos,hola como estan todos,hola como estan todos,hola como estan todos
          hola como estan todos,hola como estan todos,hola como estan todos,hola como estan todos</p>
  </div>
  </div>
  </div>

  <div class="contenedor-servicio">
      
      <div class="checklist-servicio">
        <div class="service">
        <h3 id="acerca" class="n-service">Acerca de</h3>
        <p class="text1"><br>
          Hola como estan todos,hola como estan todos,hola como estan todos,hola como estan todos
          hola como estan todos,hola como estan todos,hola como estan todos,hola como estan todos
          hola como estan todos,hola como estan todos,hola como estan todos,hola como estan todos
          Hola como estan todos,hola como estan todos,hola como estan todos,hola como estan todos
          hola como estan todos,hola como estan todos,hola como estan todos,hola como estan todos
          hola como estan todos,hola como estan todos,hola como estan todos,hola como estan todos</p>
        
  </div>
  </div>
  <img src="img/acerca.png" alt="" style="width: 300px; height:300px;">
  </div>
  
  <div class="contenedor-servicio">
      <img src="img/contactos.png" alt="" style="width: 300px; height:300px;">
      <div class="checklist-servicio">
        <div class="service">
  
        <h3 id="contactos" class="n-service">Contactos</h3>
        <p class="text1"><br>
          Hola como estan todos,hola como estan todos,hola como estan todos,hola como estan todos
          hola como estan todos,hola como estan todos,hola como estan todos,hola como estan todos
          hola como estan todos,hola como estan todos,hola como estan todos,hola como estan todos
          Hola como estan todos,hola como estan todos,hola como estan todos,hola como estan todos
          hola como estan todos,hola como estan todos,hola como estan todos,hola como estan todos
          hola como estan todos,hola como estan todos,hola como estan todos,hola como estan todos</p>
  </div>
  </div>
  </div>
  </section><br>

  <!-- Pie de pagina -->
  <footer class="footer">
       <div class= "container-pie">
         <div class="row">
           <div class="footer-col">
             <h4>Compañia</h4>
             <ul>
  
               <li><a>Esta compañia esta garantizada para ofrecerte servicios varios, 
             como resultados precisos y a bajo costo</a></li>
             </ul>
           </div>
           <div class="footer-col">
             <h4>Mas informacion</h4>
             <ul>
               <li><a href="#">Privacion y politica</a></li>
               <li><a href="#">Terminos y condiciones</a></li>
         
             </ul>
           </div>
           <div class="footer-col">
             <h4>Informacion contactos</h4>
             <ul>
  
               <li><a>Direccion:<br> Carrera 48 #176-10</a></li>
               <li><a>Contactos:<br> 000-000-000 <br> 111-111-111</a></li>
               <li><a>Corrreo electronico: <br> abc@gmail.com</a></li>
         
             </ul>
           </div>
           <div class="footer-col">
             <h4>Nuestras redes</h4>
             <div class="social-links">
               <a href="#"><i class="fab fa-facebook-f"></i></a>
               <a href="#"><i class="fab fa-twitter"></i></a>
               <a href="#"><i class="fab fa-instagram"></i></a>
               <a href="#"><i class="fab fa-linkedin-in"></i></a>
             </div>
           </div>
         </div>
        </div>
       <br>
   
    <div class="container-footer">
      <div class="copyright">
      © 2021 Todos los derechos reservados | <a
      href="">Proyecto ListBalance</a>
      </div>
  
    <div class="information"> 
      <a href=""> Privacion y politica</a>   | 
      <a href=""> Terminos y condiciones</a> 
    </div>
    </div>
    </footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/invoice.js"></script>

</body>
</html>









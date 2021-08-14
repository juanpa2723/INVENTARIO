<?php
require_once 'conexion.php';
 ?>

<!DOCTYPE html>
<html lang="es">

<head> 
<title>listbalance.com</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="../../css/estilos_modu.css"> 
</head>

<body>

	<header class="header">
    <div class="container">
      <div class="btn-menu">   
      </div>
  
    
      <div class="logo" class="logo pull-left">
      <img src="../../img/logo3.png" width= "200"height= "200">
      </div>

      <nav class="menu">
    
      <nav class="navegacion">
			<ul class="menu">
				<li><a href="#">Nosotros</a></li>
        <li><a href="#">Acerca de</a></li>
        <li><a href="#">Contactos</a></li>
				<li><a href="#" class="entrar">Perfil de usuario</a>
					<ul class="submenu">
					<li><a href="../perfil/perfil.php">Perfil</a></li>
					<li><a href="../../index.php">Salir</a></li>
					</ul>
				</li>
			  </ul>
		    </nav>
        </nav>
        </div>
	</header>

    <div class="wrapper fixed-left">
    <nav id="sidebar">

      <ul class="list-unstyled components">
        <li>
          <a href="../Pagina_principal/pagina_principal.php"><i class='bx bxs-home'></i> Inicio</a>
        </li>
        <li>
          <a href="producto.php"><i class='bx bxs-shopping-bags'></i> Productos (ARREGLAR)</a>
        </li>
        <li>
          <a href="../usuario/usuario.php"><i class='bx bxs-user'></i> Usuarios (ARREGLAR)</a>
        </li>
        <li>
          <a href="../ventas/venta.php"><i class='bx bxs-bar-chart-alt-2'></i> Ventas<br> (ARREGLAR)</a>
        </li>
        <li>
          <a href="../reporte/reporte.php"><i class='bx bxs-book'></i> Reportes (ARREGLAR)</a>
        </li>
      </ul>
    </nav>

    <div id="content"></div>
    </div>

<div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header bg-dark">
                        <h3 class="text-center" style="color:#ffffff">Registro</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" id="frm">
                            <div class="form-group">
                                <label for="">Codigo</label>
                                <input type="hidden" name="idp" id="idp" value="">
                                <input type="text" name="codigo" id="codigo" placeholder="Codigo" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Producto</label>
                                <input type="text" name="producto" id="producto" placeholder="Descripción" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Precio</label>
                                <input type="text" name="precio" id="precio" placeholder="Precio" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Cantidad</label>
                                <input type="text" name="cantidad" id="cantidad" placeholder="cantidad" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="button" value="Registrar" id="registrar" class="btn btn-primary btn-block">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6 ml-auto">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="buscar"></label>
                                <input type="text" name="buscar" id="buscar" placeholder="Buscar..." class="form-control">
                            </div>
                        </form>
                    </div>
                </div>
                <table class="table table-hover table-resposive">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="resultado" style="color:#000000">

                    </tbody>
                </table>
            </div>
        </div>
    </div>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="..js/script.js"></script>
    <script src="script.js"></script>

</body>
</html>

    
    
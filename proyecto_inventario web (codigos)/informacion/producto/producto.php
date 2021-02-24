<?php
require_once 'conexion.php';
 ?>

<!DOCTYPE html>
<html lang="es">
<head> 

      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>listbalance.com</title>
      <link rel="stylesheet" href="css/estilospro.css">
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">

</head>
<body>
<br><br><br><br>

	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<div class="logo">
            <img src="img/logo.png" width= "200"height= "200">
			</div>
			<nav class="menu">
            <a href="../quienes somos.php">Quienes somos</a>
			<a href="../acerca de.php" title="Acerca de" rel="nofollow">Acerca de</a>
			<a href="../contactanos.php" title="Contactanos">Contactanos</a>
            <a href="../terminos.php">Terminos y condiciones</a>
			</nav>
		</div>
	</header>
    <div class="capa"></div>

<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
        <a href="../pagina_principal.php"><i class='bx bxs-home'></i> Inicio</a>
        <a href="../producto/producto.php"><i class='bx bxs-shopping-bags'></i> Productos</a>
        <a href="../usuario.php"><i class='bx bxs-user'></i> Usuarios</a>
        <a href="../venta.php"><i class='bx bxs-bar-chart-alt-2'></i> Ventas</a>
        <a href="../reporte/reporte.php"><i class='bx bxs-book'></i> Reportes</a>
        <a href="../index.php"><i class='bx bxs-door-open'></i> Cerrar sesion</a>
		</nav>

		<label for="btn-menu">✖️</label>
	</div>
</div>
  
</body>

<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="text-center">Registro de productos</h3>
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
                            <div class="form-group">precio
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
                    <tbody id="resultado">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    </body>
</html>

    
    
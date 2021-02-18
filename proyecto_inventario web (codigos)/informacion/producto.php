<?php
include_once 'bd/conexion.php';

$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT id, nombre, pais, edad FROM personas";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />  
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="main.css">  
      
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">  

      <meta charset="UTF-8">
      <title>listbalance.com</title>
      <link rel="stylesheet" href="../css/estilos.css">
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
</nav><br><br><br><br>

	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<div class="logo">
            <img src="../img/logo.png" width= "200"height= "200">
			</div>
			<nav class="menu">
            <a href="quienes somos.php">Quienes somos</a>
			<a href="acerca de.php" title="Acerca de" rel="nofollow">Acerca de</a>
			<a href="contactanos.php" title="Contactanos">Contactanos</a>
            <a href="terminos.php">Terminos y condiciones</a>
			</nav>
		</div>
	</header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>    
            </div>    
        </div>    
    </div>    
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr id="edtabla">
                                <th>Id</th>
                                <th>Nombre de producto</th>
                                <th>Descripcion</th>                                
                                <th>Precio</th>  
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody >
                            <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr id="edtabla">
                                <td><?php echo $dat['id'] ?></td>
                                <td><?php echo $dat['nombre'] ?></td>
                                <td><?php echo $dat['pais'] ?></td>
                                <td><?php echo $dat['edad'] ?></td>    
                                <td></td>
                            </tr>
                            <?php
                                }
                            ?>                                
                        </tbody>        
                       </table>                    
                    </div>
                </div>
        </div>  
    </div>  
	<div class="capa"></div>

<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
        <a href="../pagina_principal.php"><i class='bx bxs-home'></i> Inicio</a>
        <a href="producto.php"><i class='bx bxs-shopping-bags'></i> Productos</a>
        <a href="usuario.php"><i class='bx bxs-user'></i> Usuarios</a>
        <a href="venta.php"><i class='bx bxs-bar-chart-alt-2'></i> Ventas</a>
        <a href="reporte.php"><i class='bx bxs-book'></i> Reportes</a>
        <a href="../index.php"><i class='bx bxs-door-open'></i> Cerrar sesion</a>
		</nav>

		<label for="btn-menu">✖️</label>
	</div>
</div>
  
      
<!--Modal para CRUD-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formPersonas">    
            <div class="modal-body">
                <div class="form-group">
                <label for="nombre" class="col-form-label">Nombre de producto:</label>
                <input type="text" class="form-control" id="nombre">
                </div>
                <div class="form-group">
                <label for="pais" class="col-form-label">Descripcion:</label>
                <input type="text" class="form-control" id="pais">
                </div>                
                <div class="form-group">
                <label for="edad" class="col-form-label">Precio:</label>
                <input type="number" class="form-control" id="edad">
                </div>            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>  

<!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <script type="text/javascript" src="main.js"></script> 

</body>
</html>

    
    
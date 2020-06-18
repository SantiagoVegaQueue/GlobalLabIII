<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>

	<!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	
	<!-- Funcionalidad NAV -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!-- Hoja de estilo CSS -->
	<link rel="stylesheet" href="style.css">
</head>
<body id="all-body">
	<div class="bg">
		<!-- Nav -->
		<div class="container" style="margin-top: 3.5rem; max-width: 40rem;">
			<nav id="navbar-style" class="navbar navbar-expand-lg navbar-light fixed-top">
				<div class="container">
					<a class="navbar-brand" href="index.php">Cortex empresario</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
					<div class="collapse navbar-collapse" id="navbarResponsive">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="index.php">Inicio
								<span class="sr-only">(current)</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="sobreNosotros.php">Sobre nosotros</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="productos.php">Productos</a>
							</li>
							
					<?php
						if(isset($_SESSION["usernormal"]) || isset($_SESSION["useradmin"])){
							echo '
							<li class="nav-item">
							<a class="nav-link" href="logout.php">Salir</a>
							</li>';
							if(isset($_SESSION["useradmin"])){
								echo '
								<li class="nav-item">
								<a class="nav-link" href="usuarios_registrados.php">P. Admin</a>
								</li>
								';
							}
						}else{
							
							echo '<li class="nav-item">
							<a class="nav-link" href="login.php">Ingresar</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="crear_cuenta.php">Registrarse</a>
							</li>';
						}
					?>
						</ul>
					</div>
				</div>
			</nav> 
		</div>
		<div class="album py-5">
		<div class="container">  
		<div>
			<h1 class="text-center">Productos a la venta</h1>
		</div>
        <div class="row">
					<?php
					require("conexion.php");

					// define how many results you want per page
					$productosPorPagina = 3;
						
					// find out the number of results stored in database
					$sql='SELECT * FROM productos';
					$result= mysqli_query($conn, $sql);
					$row = mysqli_num_rows($result);

					// determine number of total pages available
					$numPags = ceil($row/$productosPorPagina);

					// determine which page number visitor is currently on
					if (!isset($_GET['pagina'])) {
					$pagina = 1;
					} else {
					$pagina = $_GET['pagina'];
					}

					// determine the sql LIMIT starting number for the results on the displaying page
					$empiezaPor = ($pagina-1)*$productosPorPagina;

					// retrieve selected results from database and display them on page
					$sql="SELECT * FROM productos ORDER BY id LIMIT $empiezaPor,$productosPorPagina";
					$result= mysqli_query($conn, $sql);

					while($row = mysqli_fetch_array($result)) {
						$img = base64_encode($row["imagen"]);
						echo "<div class='col-md-4'>";
						echo '	<div class="card mb-4" id="card">';
						echo '		<h4 class="text-center">'.$row["nombre"].'</h4>';
						echo '		<img height="100px"  class="img-fluid" src="data:image/jpg;base64,'.$img.'">';
						echo '		<p class="text-center">$'.$row["precio"].'</p>';
						echo '		<p class="text-center">'.$row["descripcion"].'</p>';
						echo '	</div>';
						echo "</div>";
					}
					?>
				
		</div>
				<div class="paginacion">
					<nav aria-label="Page navigation example">
                    	<ul class="pagination justify-content-center">
							<?php
								for($pagina = 1; $pagina <= $numPags; $pagina++)
									echo '<li class="page-item"><a class="page-link" href="productos.php?pagina='.$pagina.'">'.$pagina.'</a></li>';
							?>
                    	</ul>
                	</nav>
				</div>
	</div>
	
</div>
	</div>
	
        

	<footer id="footer" class="py-5">
		<div class="container">
			<p class="m-0 text-center text-white">Global Laboratorio III</p>
		</div>
    </footer>
	
</body>
</html>
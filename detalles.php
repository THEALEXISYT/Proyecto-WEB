<?php 
include("Conecction/conexion.php");
?>
<!DOCTYPE html>
<html>
	<head>
	  	<?php include 'php/head.php';
		$active_detalles=" active";
	  	?>
		<title>Detalles</title>
		<link rel="shortcut icon" href="img/logo.ico">
	</head>
	<body>
		<header>
    		<?php include 'php/menu.php';?>
    	</header>
    	  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Datos</h1>
      <p>En esta seccion se encuentra una pequeña conexion usando MySQL a nuestra base de datos, con ella podremos encontrar datos guardada en la base de datos como la plataforma, usuario, contraseña y contraseña segura. Usando PHP conectamos la pagina a nuestra base de datos.</p>
    </div>
  </div>
    	<div class="container">
  			<div class="row">
  				<div class="col">
			    	<table class="table">
				    	<thead>
					      <tr class="table-primary">
					      	<th scope="col">ID</th>
					        <th scope="col">Plataforma</th>
					        <th scope="col">Usuario</th>
					        <th scope="col">Correo</th>
					        <th scope="col">Contraseña</th>
					        <th scope="col">Contraseña segura</th>
					      </tr>
					    </thead>
					    <tbody>
					    	<?php 
							$sql='SELECT * FROM datos ORDER BY id ASC';
							$n=1;
							$resultado=select($sql,$conexion,$database_conexion);
							while($reg=mysqli_fetch_array($resultado)){
					    	if($n==1){
					    	echo '<tr class="table-success">';
					    	$n=2;
					    	}else{
					    		echo '<tr class="table-danger">';
					    		$n=1;
					    	}
					      	echo '
						        <th scope="row">'.$reg['ID'].'</th>
						        <td>'.$reg['plataforma'].'</td>
						        <td>'.$reg['usuario'].'</td>
						        <td>'.$reg['correo'].'</td>
						        <td>'.$reg['pass'].'</td>
						        <td>'.$reg['passe'].'</td>
					      	</tr>
					      	';
					      	}?>
					    </tbody>
				  	</table>
				</div>
			</div>
		</div>
	</body>
</html>
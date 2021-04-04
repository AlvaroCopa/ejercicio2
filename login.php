<?php
include "conectar.php";
if(isset($_POST['login'])){
	$ci = $_POST['ci'];
	$pass = $_POST['comtraseña']; 
	if($ci == "" || $_POST['comtraseña'] == null){
		echo "<script>alert('Error: usuario y/o clave vacios!!');window.location.href='index.php';</script>"; 
	}else{
		$consulta = mysqli_query($con,"SELECT * FROM usuario WHERE ci = '$ci' AND password = '$pass'");
		if(!$consulta){
			echo "ERROR: no se pudo ejecutar la consulta!";
		}else{
			$filas = mysqli_num_rows($consulta);
			if($filas == 0){
				echo "<script>alert('Error: usuario y/o clave incorrectos!!');</script>";
			}else{
				$query = mysqli_query($con,"SELECT * FROM persona WHERE ci = '$ci'");
				$fila = mysqli_fetch_array($query);
			}
		}
	}
}
?>

<!DOCTYPE html>
<html lang="es-BO">
  <head>
		<title>UMSA</title>
	</head>
	<link rel='stylesheet' type='text/css' href='/ejercicio2/style.css' />
  <body>
    <header id="cabeza">
    	<div>
      	<div>
        	<ul> 
						<h2 class="title">UMSA FCPN</h2>
						<li><a href="/ejercicio2">Inicio</a></li>
        	</ul>
      	</div>
    	</div>
		</header>
		<h2>Bienvenido <?php echo $fila["nombre"]?></h2>

<?php 

include "footer.php";
?>
<?php
include "conectar.php";
if(isset($_POST['login'])){
	$ci = $_POST['ci'];
	$pass = $_POST['comtraseña']; 
	if($ci == "" || $_POST['comtraseña'] == null){
		echo "<script>alert('Error: usuario y/o clave vacios!!');</script>"; 
	}else{
		$consulta = mysqli_query($con,"SELECT * FROM usuario WHERE ci = '$ci' AND password = '$pass'");
		if(!$consulta){
			echo "ERROR: no se pudo ejecutar la consulta!";
		}else{
			$filas = mysqli_num_rows($consulta);
			if($filas == 0){
				echo "<script>alert('Error: usuario y/o clave incorrectos!!');</script>";
			}else{
				header('location:login.php'); 
			}
		}
	}
}
?>

<form id="form" method="post" action="login.php">
  <label for="ci">CI:</label>
	<input type="text" name="ci" value=""/><br>
  <label for="password">Contraseña:</label>
	<input type="password" name="comtraseña" value=""/><br>
  <div class="contenedor">
    <label for="password">Color:</label>
    <select name="color" onchange="colorChange(this)">
      <option value="">Cambie el color</option>
      <option value="1">La primera opción</option>
      <option value="2">La segunda opción</option>
      <option value="3">La tercera opción</option>
    </select>
  </div>
	<input type="submit" name="login" value="Aceptar"/>
</form>
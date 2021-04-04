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
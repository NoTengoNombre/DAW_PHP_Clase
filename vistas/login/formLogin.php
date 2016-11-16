<h3>Login</h3>
<form action="index.php" method="get">
  Usuario:
  <input type="text" name="usuario" />
  <br/>
  Contraseña:
  <input type="text" name="passwd" />
  <br/>
  <input type="hidden" name="do" value="procesarFormularioLogin"/>
  <input type="submit"/>
</form>
<a href="index.php?do=mostrarFormularioAltaUsuario">Registrarse</a>

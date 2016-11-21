<h3>Login</h3>
<form action="index.php" method="get">
  <label>
    Usuario:
  </label>
  <input type="text" name="usuario" />
  <br>
  <label>
    Contraseña:
  </label>
  <input type="text" name="passwd" />
  <br/>
  <input type="hidden" name="do" value="procesarFormularioLogin"/>
  <input type="submit"/>
</form>
<!-- Enviar al index 'do' 
con la accion 
'mostrarFormularioAltaUsuario' 
-->
<a href="index.php?do=mostrarFormularioAltaUsuario">Registrarse</a>

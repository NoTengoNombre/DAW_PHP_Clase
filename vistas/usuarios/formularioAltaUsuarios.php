<h3>Alta de usuario</h3>
<form action="index.php" method="get">
  <label>  
    Nombre Usuario:
  </label>
  <input type="text" name="	nombre_usuario" value=""/>
  <br>
  <label>
    Fecha Nacimiento :
  </label>
  <input type="text" name="fechaNacimiento" value="" />
  <br>
  <label>
    Ciudad : 
  </label>
  <input type="text" name="ciudad" value="" />
  <br>
  <label>
    Genero : 
  </label>
  <input type="text" name="genero" value="" />
  <br>
  <label>
    Imagen Usuario :
  </label>
  <input type="text" name="imagen_usuario" value="" />
  <br>
  <label>
    Email :
  </label>
  <input type="text" name="email" value="" />
  <br>
  <label>
    Biografia : 
  </label>
  <input type="text" name="biografia" value="" />
  <br>
  <label>
    Contraseña:
  </label>
  <input type="text" name="password" value=""/>
  <br>
  <label>
    Tipo Usuario :
  </label>
  <input type="text" name="" value="" />
  <!-- Aqui van el resto de campos del formulario de alta de usuarios <br/> -->
  <input type="hidden" name="do" value="procesarFormularioAltaUsuario"/>
  <br><br>
  <input type="submit"/>
</form>

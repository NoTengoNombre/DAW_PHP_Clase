<!--
    @Created on : 22-nov-2016, 18:22:04
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<!-- 
Crear formulario 
Lo envia al index para realizar la inserccion
tiene que estar en la parte de administrador
-->
<!--<form method="get" action="index.php">-->

<fieldset>
  <legend>Formulario Peliculas</legend>
  <label></label>
  <form method="get" action="../../Controlador.php">
    <label>titulo</label>
    <input type="text" name="titulo" value="">
    <br>
    <label>duracion</label>
    <input type="text" name="duracion" value="">
    <br>
    <label>estreno</label>
    <input type="text" name="estreno" value="">
    <br>
    <label>sinopsis</label>
    <input type="text" name="sinopsis" value="">
    <br>
    <label>tipo</label>
    <input type="text" name="tipo" value="">
    <br>
    <label>formato</label>
    <input type="text" name="formato" value="">
    <br>
    <label>enlace</label>
    <input type="text" name="enlace" value="">
    <br>
    <label>imagen</label>
    <input type="text" name="do" value="">
    <br>
    <input type="hidden" name="do" value="addPelicula"/>
    <br>
    <input type="submit"/>
  </form>
</fieldset>

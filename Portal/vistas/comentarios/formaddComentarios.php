<!--
    @Created on : 27-nov-2016, 20:16:32
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <fieldset>
      <legend>Añadir Comentarios</legend>
      <form method="get" action="../../Controlador.php">
        <!--<label>Id Comentarios</label>-->
        <!--<input type="text" name="id_comentarios" value="">-->
        <!--<br>-->
        <label>Texto</label>
        <input type="text" name="Texto" value="">
        <br>
        <!--Parte que tiene que ejecutarse sola-->
        <!--Parte que tiene que ejecutarse sola-->
        <!--Parte que tiene que ejecutarse sola-->
        <label>Fecha Creacion</label>
        <input type="datetime" name="fecha_creacion" value="" readonly="true">
        <br>
        Campos  
        <label>Votaciones</label>
        <input type="number" name="votaciones" value="" readonly="true">
        <br>
        <label>Alerta </label>
        <input type="number" name="alerta" value="" readonly="true">
        <br>
        <input type="hidden" name="do" value="formulario_comentarios">
        <button name="enviar">Enviar</button>
    </fieldset>
  </form> 
  <?php
  ?>
</body>
</html>

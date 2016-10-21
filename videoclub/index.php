<!--
    @Created on : 20-oct-2016, 21:12:38
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->
<?php
include './peliculas.php';
include './login.php';
//include './personas.php';
//include './actuan.php';
//include './usuarios.php';

if (!isset($_REQUEST["do"]))
  $accion = "mostrarformulariologin";
else
  $accion = $_REQUEST["do"];

switch ($accion) {
  case "mostrarformulariologin":
    Login::showForm();
    break;
  case "checklogin":
    Login::checkLogin();
    break;
  case "anadirpelicula":
    $pel = new Pelicula();
    $pel->showFormAddPelicula();
    break;
  case "procesarFormAnadirPelicula":
    echo "aqui tendria que venir el codigo para añadir la peli a la bd";
    break;

//			$pelicula = new Pelicula();
//			$pelicula->addPelicula();
//			break;
}
?>	
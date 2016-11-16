<?php

//Aqui se van ejecutando todos los metodos de las distintas clases
//Tambien muestra las vistas despues de cada accion
//Paginas en general : cambia las pagians en paginas : direccionador
// controlador llama a las vistas

include_once ("vista.php");
include_once ("login.php");
include_once ("seguridad.php");

class Controlador {

  /**
   * Metodo controlador que va ejecutando
   * las acciones que le van llegando desde el formulario
   * y distintas clases
   */
  public static function control() {
    session_start(); // comienza/recibe los datos de la session


    if (!isset($_REQUEST["do"])) { // si no esta fijado la accion del "do"
      $accion = "mostrarFormularioLogin"; // fuerzo a mostrar el formulario de login para acceder a la aplicacion
    } else { //sino entra en el switch
      $accion = $_REQUEST["do"]; // "do" lleva asignado una accion 
    }

//    accion que se recibe desde los distintos formularios
    switch ($accion) {
      // ******************** LOGIN *************************
      case "mostrarFormularioLogin": // muestra el formulario
        Vista::show("login/formLogin");
        break;

      case "procesarFormularioLogin":
        $loginOk = Login::checkLogin();
        if ($loginOk) {
          if (Seguridad::getTipoUsuario() == "admin") {
            Vista::show("menu/menuAdmin");
          }
          if (Seguridad::getTipoUsuario() == "user") {
            Vista::show("menu/menuUser");
          }
        } else {
          Vista::show("login/errorLogin");
        }
        break;


      case "mostrarFormularioAltaUsuario":
        Vista::show("usuarios/formularioAltaUsuario");
        break;

      case "procesarFormularioAltaUsuario":
        $result = Usuarios::insertarUsuario();
        if ($result == 1) {
          Vista::show("usuarios/insercionOk");
        } else {
          Vista::show("usuarios/insercionError");
        }
        break;

      case "cerrarsesion":
        Seguridad::cerrarSesion();
        echo "La sesion se ha cerrado correctamente<br/>";
        echo "<a href='index.php'>Volver al inicio</a>";
        break;
      // ******************** MENÚS *************************
      case "showmenuadmin":
        if (Seguridad::getTipoUsuario() == "admin") {
          Vista::show("menu/menuAdmin");
        } else {
          Vista::show("login/formLogin");
        }
        break;
      case "showMenuUser":
        if (Seguridad::getTipoUsuario() == "user") {
          Vista::show("menu/menuUser");
        } else {
          Vista::show("login/formLogin");
        }
        break;
      // ******************** PELICULAS *************************
      case "formAnadirPelicula":
        if (Seguridad::getTipoUsuario() == "admin") {
          Vista::show("peliculas/formAddpelicula");
        } else {
          Vista::show("login/formLogin");
        }
        break;
      case "addPelicula":
        if (Seguridad::getTipoUsuario() == "admin") {
          
        } else {
          Vista::show("login/formLogin");
        }
        break;
//          
//          
//        ...etc...
    }
  }

}

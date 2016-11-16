<?php

class Vista {

  /**
   * Metodo static que de
   * @param type $vista
   */
//  $vista = "errorLogin,formLogin";
//  
//  $listaVistas[0] = "errorLogin";
//  $listaVistas[1] = "formLogin";
//  
  public static function show($vista) {
    include("vistas/header.php");
    include("vistas/nav.php");
    $listaVistas = explode(",", $vista);
    foreach ($listaVistas as $v) {
      include("vistas/$v.php");
    }
    include("vistas/footer.php");
  }

}

<!--
    @Created on : 22-nov-2016, 18:22:04
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : http://www.euskalnet.net/jaoprogramador/j2ee/JDBC/jdbc18.htm

Podría ser patron Singleton si lo instanciaramos

clase ResultSet
Un ResultSet contiene todas las filas que satisfacen las condiciones de una sentencia SQL y proporciona el acceso a los datos de estas filas mediante un conjunto de métodos get que permiten el acceso a las diferentes columnas de la filas. El método ResultSet.next se usa para moverse a la siguiente fila del result set, convirtiendo a ésta en la fila actúal.
-->

<?php

// Capa de abstracción para MySQL
class DBAbstract {

  // Modificaré estas variables para cambiar de servidor de BD
  public $dbName = "portal";
  public $dbHost = "localhost";
  public $dbUser = "root";
  public $dbPass = "";
  // Aquí guardamos el conector con la BD
  /* ¿ como se añade un objeto new mysqli(); se usa para almacenar los datos del metodo conectar */
  private $db = null;

//  private $db = new mysqli();
  // Conecta con la BD. Devuelve 1 (ok) o 0 (error)
  public function conectar() {
    $this->db = new mysqli($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
    if ($this->db) {
      return 1;
    } else {
      return 0;
    }
  }

  // Cierra la conexión con la BD (si está abierta)
  public function desconectar() {
    if ($this->db) {
      $this->db->close();
    }
  }

  // Ejecuta una consulta (SELECT) y devuelve el Resultset ( tabla virtual)
  // convertido en un array PHP.
  public function consulta($sql) {
    $resultArray = null;

    if ($this->db) {
      $result = $this->db->query($sql);
      if ($result) {
        $resultArray = array();
        while ($fila = $result->fetch_array()) {
          $resultArray[] = $fila;
        }
      }
    }
    return $resultArray;
  }

  // Ejecuta una instrucción de manipulación de datos
  // (INSERT, UPDATE o DELETE) y devuelve el número de filas afectadas
  public function manipulacion($sql) {
    $result = 0;

    if ($this->db) {
      $this->db->query($sql);
      $result = $this->db->affected_rows;
    }

    return $result;
  }

}

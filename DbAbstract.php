<?php

// Capa de abstracción para MySQL

class dbAbstract {

  private $dbName;
  private $dbHost;
  private $dbUser;
  private $dbPass;
// Aquí guardamos el conector con la BD
  private $db;

// Constructor. Asigna las variables de instancia.
  function __construct() {
// Hay que modificar el valor de estas variables para cambiar de servidor de BD
    $this->dbName = "portal";
    $this->dbHost = "localhost";
    $this->dbUser = "root";
    $this->dbPass = "";
    $this->db = null;
  }

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
      $$this->db->close();
    }
  }

// Ejecuta una consulta (SELECT) y devuelve el resultset
// convertido en un array PHP.
  public function consulta($sql) {
    $resultArray = null;

    if ($$this->db) {
      $result = $$this->db->query($sql);
      if ($result) {
        $resultArray = $result->fetch_all();
      }
    }

    return $resultArray;
  }

// Ejecuta una instrucción de manipulación de datos
// (INSERT, UPDATE o DELETE) y devuelve el número de filas afectadas
  public function manipulacion($sql) {
    $result = 0;

    if ($$this->db) {
      $$this->db->query($sql);
      $result = $$this->db->affected_rows;
    }

    return $result;
  }

}

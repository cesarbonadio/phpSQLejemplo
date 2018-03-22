<?php

/*
 * Clase manejadora de base de datos
 * @autor CesarAugusto 21/03/2018
 * Clase modelo
 */

 class ManejadorBD{

    private $db_host;
    private $db_contrasena;
    private $db_nombre;
    private $db_usuario;
    private $db_caracteres;

    function __construct(){/*constructor default*/}


    /**
     * @return Objeto PDO
     */
    protected function conectar(){
      $this->db_host = "localhost";
      $this->db_contrasena = "";
      $this->db_nombre = "test";
      $this->db_usuario = "root";
      $this->db_caracteres = "utf8";

      try {
        $dsn = "mysql:host=".$this->db_host.";dbname=".$this->db_nombre.";charset=".$this->db_caracteres;
        $pdo = new PDO($dsn,$this->db_usuario,$this->db_contrasena);
        #Habilitar las excepeciones con...
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
      } catch (PDOException $excepcion) {
         echo "Conexión fallida. Causa: ";
         print_r($excepcion->getMessage());
      }
    }


  /*GnS*/
   function getDb_host(){
       return $this->db_host;
   }
   function getDb_contrasena(){
       return $this->db_contrasena;
   }
   function getDb_nombre(){
       return $this->db_nombre;
   }
   function getDb_usuario(){
       return $this->db_usuario;
   }
   function getDb_caracteres(){
       return $this->db_caracteres;
   }
  

 }

 ?>

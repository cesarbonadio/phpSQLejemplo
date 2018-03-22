<?php

/*
 * Clase Productos para acceder a la tabla productos
 * @autor CesarAugusto 21/03/2018
 * Clase controlador
 */

 class Productos extends ManejadorBD{

    function __construct(){/*constructor default*/}


    /**
     * @param null
     * @return null
     */
    public function obtenerProductos(){
       $consulta = "SELECT * FROM PRODUCTOS";
       $resultado = $this->conectar()->query($consulta);

       while($fila = $resultado->fetch())
       for ($i=0; $i <(count($fila)/2); $i++) echo $fila[$i] . " <br>";

    }

    /**
     *
     * @param string ID del producto
     */
    public function obtenerProductoByID($id){
      # code...
      $consulta = "SELECT * FROM PRODUCTOS WHERE CÓDIGOARTÍCULO=?";
      $resultado = $this->conectar()->prepare($consulta);
      $resultado->execute([$id]);

      while($fila = $resultado->fetch())
       for($i=0; $i<(count($fila)/2); $i++) echo $fila[$i]. "<br>";
    }

    /**
     *
     * @param string País del Producto
     */
    public function obtenerProductosByPais($pais){
      # code...
      $consulta = "SELECT * FROM PRODUCTOS WHERE PAÍSDEORIGEN=?";
      $resultado = $this->conectar()->prepare($consulta);
      $resultado->execute([$pais]);

      while($fila = $resultado->fetch())
       for($i=0; $i<(count($fila)/2); $i++) echo $fila[$i]. "<br>";
    }



 }

 ?>

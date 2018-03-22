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
     * @param string $id - ID del producto
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
     * @param string $pais - País del Producto
     */
    public function obtenerProductosByPais($pais){
      # code...
      $consulta = "SELECT * FROM PRODUCTOS WHERE PAÍSDEORIGEN=?";
      $resultado = $this->conectar()->prepare($consulta);
      $resultado->execute([$pais]);

      while($fila = $resultado->fetch())
       for($i=0; $i<(count($fila)/2); $i++) echo $fila[$i]. "<br>";
    }


    /**
     *
     * @param int $desde - primer limite
     * @param int $hasta - segundo limite
     */
    public function obtenerProductosByPriceRange($desde, $hasta){
      # code...
      $consulta = "SELECT * FROM PRODUCTOS WHERE PRECIO>=? AND PRECIO<=?";
      $resultado = $this->conectar()->prepare($consulta);
      $resultado->execute([$desde,$hasta]);

      while($fila = $resultado->fetch())
       for($i=0; $i<(count($fila)/2); $i++) echo $fila[$i]. "<br>";
    }


    /**
     *
     * @param string $id - primer limite
     * @return int $cant - cantidad en el inventario
     *
     */
    public function obtenerCantidadBySeccion($seccion){
      # code...
      $consulta = "SELECT COUNT(SECCIÓN) AS CANTIDAD, SECCIÓN FROM PRODUCTOS  GROUP BY SECCIÓN HAVING SECCIÓN=?";
      $resultado = $this->conectar()->prepare($consulta);
      $resultado->execute([$seccion]);

       $fila = $resultado->fetch();
       $cant = $fila['CANTIDAD'];
       return $cant;
    }



 }

 ?>

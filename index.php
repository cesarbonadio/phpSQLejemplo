

<html>

<head>

<title> hola </title>

</head>

<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />

</head>

<body>

<?php

   include "ManejadorBD.php";
   include "Productos.php";

   $productos = new Productos();
   $productos->obtenerProductoByID("AR06");
   $productos->obtenerProductosByPais("USA");

?>

</body>
</html>

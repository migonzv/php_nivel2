<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  // Inicialización del Vector
  $mes[0] = "enero";
  $mes[1] = "febrero";
  $mes[2] = "marzo";
  $mes[3] = "abril";
  $mes[4] = "mayo";
  $mes[5] = "junio";
  $mes[6] = "julio";
  // Imprimir  el vector, usando estructura de control iterativas
  for($i=0; $i < 7; $i++) {
    echo ($mes[$i] . "<br>");
  }
?>
</body>
</html>
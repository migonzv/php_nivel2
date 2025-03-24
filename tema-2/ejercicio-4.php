<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  $semana = array("lunes", "martes",  "miercoles",  "jueves", "viernes", "sabado", "domingo");
  list($lu,$ma,$mi,$ju,$vi,$sa,$do) = $semana;
  echo $lu; //imprime lunes
  echo '<br>';
  echo $ma; //imprime martes
  echo '<br>';
  echo $mi; //imprime miercoles
  echo '<br>';
  echo $ju; //imprime jueves
  echo '<br>';
  echo $vi; //imprime viernes
  echo '<br>';
  echo $sa; //imprime sabado
  echo '<br>';
  echo $do; //imprime domingo
?>
</body>
</html>
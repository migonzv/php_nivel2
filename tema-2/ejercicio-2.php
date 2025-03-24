<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  $persona = array(
    'nombre' => 'Juan',
    'apellido' => 'perez',
    'pais' => 'venezuela'
  );
  echo $persona['nombre'];
  echo '<br>';
  echo $persona['apellido'];
  echo '<br>';
  echo $persona['pais'];
?>
</body>
</html>